<?php
namespace Controllers;

use Controllers\MailService;
use Core\Database;

class NotificationController { 
    private $db;

    public function __construct() {
        $this->db = Database::getConnection()->conn;
    }

    private function getUserData($userId) {
        $stmt = $this->db->prepare("SELECT name, email FROM users WHERE id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    private function getStageData($stageId) {
        $stmt = $this->db->prepare("
            SELECT name, date, start_time, distance, route 
            FROM stages 
            WHERE id = ?
        ");
        $stmt->execute([$stageId]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function sendStageNotification($userData, $stageData) {
        // Prepare template data
        $templateData = [
            'userName' => $userData['name'],
            'stageName' => $stageData['name'],
            'stageDate' => $stageData['date'],
            'startTime' => $stageData['start_time'],
            'distance' => $stageData['distance'],
            'route' => $stageData['route'],
            'trackingLink' => "https://tourdemaroc.com/live/" . $stageData['id'],
        ];

        // Load and process the template
        ob_start();
        extract($templateData);
        include __DIR__ . '/../Views/emails/stage-notification-template.php';
        $emailContent = ob_get_clean();

        // Send the email
        return MailService::sendMail(
            $userData['email'],
            "Tour De Maroc - Notification pour l'étape " . $stageData['name'],
            $emailContent
        );
    }

    public static function Notification($idUser, $idStage) {
        $controller = new self();
        
        // Fetch data from database
        $userData = $controller->getUserData($idUser);
        $stageData = $controller->getStageData($idStage);

        if (!$userData || !$stageData) {
            throw new \Exception("User or Stage not found");
        }

        // Add IDs for generating links
        $stageData['id'] = $idStage;
        $userData['id'] = $idUser;

        return $controller->sendStageNotification($userData, $stageData);
    }
}
