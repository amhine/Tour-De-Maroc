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
        $query = "INSERT INTO cyclists (first_name, last_name, team, age, nationality, preferred_race_type, height, weight, bio, profile_picture)
                  VALUES (:first_name, :last_name, :team, :age, :nationality, :preferred_race_type, :height, :weight, :bio, :profile_picture)";
        $stmt = $this->db->prepare($query);

        return $stmt->execute([
            ':first_name' => $cyclist->getFirstName(),
            ':last_name' => $cyclist->getLastName(),
            ':team' => $cyclist->getTeam(),
            ':age' => $cyclist->getAge(),
            ':nationality' => $cyclist->getNationality(),
            ':preferred_race_type' => $cyclist->getPreferredRaceType(),
            ':height' => $cyclist->getHeight(),
            ':weight' => $cyclist->getWeight(),
            ':bio' => $cyclist->getBio(),
            ':profile_picture' => $cyclist->getProfilePicture(),
        ]);
    }
}