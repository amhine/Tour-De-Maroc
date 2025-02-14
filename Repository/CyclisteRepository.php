<?php

namespace Repository;

use Entity\Cyclist;
use PDO;

use Repository\Interfaces\ICyclistRepository as InterfaceCyclisteRepository;

class CyclistRepository implements InterfaceCyclisteRepository
{
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function save(Cyclist $cyclist): bool {
        $query = "INSERT INTO public.cycliste (
                      nom, prenom, email, password, fk_role_id, age, status, image_profile, wallet, 
                      acheivements, first_name, last_name, team, nationality, preferred_race_type, height_cm, weight_kg
                  ) VALUES (
                      :nom, :prenom, :email, :password, :fk_role_id, :age, :status, :image_profile, :wallet, 
                      :achievements, :first_name, :last_name, :team, :nationality, :preferred_race_type, :height_cm, :weight_kg
                  )";
        $stmt = $this->db->prepare($query);

        return $stmt->execute([
            ':nom' => $cyclist->getNom(),
            ':prenom' => $cyclist->getPrenom(),
            ':email' => $cyclist->getEmail(),
            ':password' => $cyclist->getPassword(),
            ':fk_role_id' => $cyclist->getFkRoleId(),
            ':age' => $cyclist->getAge(),
            ':status' => $cyclist->getStatus(),
            ':image_profile' => $cyclist->getImageProfile(),
            ':wallet' => $cyclist->getWallet(),
            ':achievements' => $cyclist->getAchievements(),
            ':first_name' => $cyclist->getFirstName(),
            ':last_name' => $cyclist->getLastName(),
            ':team' => $cyclist->getTeam(),
            ':nationality' => $cyclist->getNationality(),
            ':preferred_race_type' => $cyclist->getPreferredRaceType(),
            ':height_cm' => $cyclist->getHeightCm(),
            ':weight_kg' => $cyclist->getWeightKg(),
        ]);
    }
}