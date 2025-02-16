<?php

namespace Controllers;

use Core\Database;
use Entity\Cycliste;
use Repository\CyclisteRepository;
use Helpers\Session;
use Helpers\Validator;
use PDO;
use Exception;

class CyclisteController
{
    private $db;
    private $session;
    private $cyclisteRepository;

    public function __construct()
    {
        $this->db = Database::getConnection()->conn;
        $this->session = new Session();
        $this->cyclisteRepository = new CyclisteRepository($this->db);
    }

    public function index()
    {

        require_once __DIR__ . '/../Views/cycliste/cyc_home.php';
    }

    public function profile()
    {
        $message = '';

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $imageProfile = '';
                if (isset($_FILES['image_profile']) && $_FILES['image_profile']['error'] === UPLOAD_ERR_OK) {
                    $imageProfile = Validator::ValidateImage($_FILES['image_profile']);
                }

                $_POST['image_profile'] = $imageProfile;

                if ($this->saveProfile($_POST)) {
                    $message = "<p class='text-green-600'>Profil enregistré avec succès!</p>";
                } else {
                    $message = "<p class='text-red-600'>Échec de l'enregistrement du profil.</p>";
                }
            } catch (Exception $e) {
                $message = "<p class='text-red-600'>Erreur: " . $e->getMessage() . "</p>";
            }
            echo "<pre>";
            var_dump($_SERVER['POST']);
            echo "</pre>";
            die;
        }

        require_once __DIR__ . '/../Views/cycliste/profile.php';
    }

    private function saveProfile(array $formData): bool
    {
        $cyclist = new Cycliste();

        $cyclist->setNom($formData['nom']);
        $cyclist->setPrenom($formData['prenom']);
        $cyclist->setEmail($formData['email']);
        $cyclist->setPassword(password_hash($formData['password'], PASSWORD_DEFAULT));
        $cyclist->setFkRoleId(2);
        $cyclist->setAge((int)$formData['age']);
        $cyclist->setStatus('inactive');
        $cyclist->setImageProfile($formData['image_profile']);
        $cyclist->setWallet(0);
        $cyclist->setAchievements($formData['achievements']);
        $cyclist->setFirstName($formData['prenom']);
        $cyclist->setLastName($formData['nom']);
        $cyclist->setTeam('Default Team');
        $cyclist->setNationality($formData['nationality']);
        $cyclist->setPreferredRaceType($formData['preferred_race_type']);
        $cyclist->setHeightCm((int)$formData['height_cm']);
        $cyclist->setWeightKg((int)$formData['weight_kg']);

        return $this->cyclisteRepository->save($cyclist);
    }
}
