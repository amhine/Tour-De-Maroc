<?php
namespace Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Charger PHPMailer

class MailService {
    protected $mail;
    private static $instance;

    public function __construct() {
        $this->mail = new PHPMailer(true);
        
        // Set UTF-8 charset
        $this->mail->CharSet = 'UTF-8';
        $this->mail->Encoding = 'base64';

        // Configuration du serveur SMTP
        $this->mail->isSMTP();
        $this->mail->Host       = 'smtp.gmail.com'; // Serveur SMTP de Gmail
        $this->mail->SMTPAuth   = true;
        $this->mail->Username   = 'bencheikh.official@gmail.com'; // Votre email
        $this->mail->Password   = 'immf zodl fsdb elfu'; // Mot de passe (mot de passe d'application si 2FA est activé)
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mail->Port       = 587;

        // Définition de l'expéditeur par défaut
        $this->mail->setFrom('bencheikh.official@gmail.com', 'Tour De Maroc');
    }

    // Static sendMail method using singleton instance
    public static function sendMail($to, $subject, $body, $altBody = '') {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance->sendMailInstance($to, $subject, $body, $altBody);
    }

    // Helper function to send mail using the instance's preconfigured PHPMailer
    private function sendMailInstance($to, $subject, $body, $altBody = '') {
        try {
            $this->mail->clearAddresses();
            $this->mail->addAddress($to);
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;
            $this->mail->AltBody = $altBody ?: strip_tags($body);

            $this->mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
