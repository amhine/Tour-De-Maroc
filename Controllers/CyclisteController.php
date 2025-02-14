<?php 
namespace Controllers;
use Core\Database;
use Helpers\Session;
use Entity\Cyclist;
use PDO;
use Repository\CyclistRepository;

class CyclisteController {
    private $db;
    private $session;
    private $cyclisteRepository;

    public function __construct()
    {
        $this->db = Database::getConnection()->conn;
        $this->session = new Session();
        $this->cyclisteRepository = new CyclistRepository($this->db);
    }

    public function index() {
        $this->session->set('', '' );
        require_once __DIR__ . '/../Views/cycliste/cyc_home.php';
    }

    
    public function profile() {
        $this->session->set('', '' );
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $db = new PDO('pgsql:host=localhost;dbname=your_database', 'username', 'password');
            $cyclistRepository = new CyclistRepository($this->db);
        
            if ($this->saveProfile($_POST)) {
                echo "<p class='text-green-600'>Profil enregistré avec succès!</p>";
            } else {
                echo "<p class='text-red-600'>Échec de l'enregistrement du profil.</p>";
            }
        }
        require_once __DIR__ . '/../Views/cycliste/profile.php';
    }

    private function saveProfile(array $formData): bool {
        $cyclist = new Cyclist();
        $cyclist->setNom($formData['nom'] ?? '');
        $cyclist->setPrenom($formData['prenom'] ?? '');
        $cyclist->setEmail($formData['email'] ?? '');
        $cyclist->setPassword($formData['password'] ?? '');
        $cyclist->setFkRoleId($formData['fk_role_id'] ?? 1); 
        $cyclist->setAge($formData['age'] ?? null);
        $cyclist->setStatus($formData['status'] ?? 'inactive');
        $cyclist->setImageProfile($formData['image_profile'] ?? '');
        $cyclist->setWallet($formData['wallet'] ?? 0);
        $cyclist->setAchievements($formData['achievements'] ?? '');
        $cyclist->setFirstName($formData['first_name'] ?? '');
        $cyclist->setLastName($formData['last_name'] ?? '');
        $cyclist->setTeam($formData['team'] ?? 'Équipe par défaut');
        $cyclist->setNationality($formData['nationality'] ?? '');
        $cyclist->setPreferredRaceType($formData['preferred_race_type'] ?? '');
        $cyclist->setHeightCm($formData['height_cm'] ?? null);
        $cyclist->setWeightKg($formData['weight_kg'] ?? null);

        return $this->cyclisteRepository->save($cyclist);
    }
}