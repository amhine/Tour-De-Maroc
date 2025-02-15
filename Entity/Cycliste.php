<?php

namespace Entity;

class Cycliste
{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $fkRoleId;
    private $age;
    private $status;
    private $imageProfile;
    private $wallet;
    private $achievements;
    private $firstName;
    private $lastName;
    private $team;
    private $nationality;
    private $preferredRaceType;
    private $heightCm;
    private $weightKg;

    // Getters and Setters
    public function getId(): ?int {
        return $this->id;
    }

    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function getNom(): ?string {
        return $this->nom;
    }

    public function setNom(?string $nom): void {
        $this->nom = $nom;
    }

    public function getPrenom(): ?string {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): void {
        $this->prenom = $prenom;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setEmail(?string $email): void {
        $this->email = $email;
    }

    public function getPassword(): ?string {
        return $this->password;
    }

    public function setPassword(?string $password): void {
        $this->password = $password;
    }

    public function getFkRoleId(): ?int {
        return $this->fkRoleId;
    }

    public function setFkRoleId(?int $fkRoleId): void {
        $this->fkRoleId = $fkRoleId;
    }

    public function getAge(): ?int {
        return $this->age;
    }

    public function setAge(?int $age): void {
        $this->age = $age;
    }

    public function getStatus(): ?string {
        return $this->status;
    }

    public function setStatus(?string $status): void {
        $this->status = $status;
    }

    public function getImageProfile(): ?string {
        return $this->imageProfile;
    }

    public function setImageProfile(?string $imageProfile): void {
        $this->imageProfile = $imageProfile;
    }

    public function getWallet(): ?int {
        return $this->wallet;
    }

    public function setWallet(?int $wallet): void {
        $this->wallet = $wallet;
    }

    public function getAchievements(): ?string {
        return $this->achievements;
    }

    public function setAchievements(?string $achievements): void {
        $this->achievements = $achievements;
    }

    public function getFirstName(): ?string {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): void {
        $this->firstName = $firstName;
    }

    public function getLastName(): ?string {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): void {
        $this->lastName = $lastName;
    }

    public function getTeam(): ?string {
        return $this->team;
    }

    public function setTeam(?string $team): void {
        $this->team = $team;
    }

    public function getNationality(): ?string {
        return $this->nationality;
    }

    public function setNationality(?string $nationality): void {
        $this->nationality = $nationality;
    }

    public function getPreferredRaceType(): ?string {
        return $this->preferredRaceType;
    }

    public function setPreferredRaceType(?string $preferredRaceType): void {
        $this->preferredRaceType = $preferredRaceType;
    }

    public function getHeightCm(): ?int {
        return $this->heightCm;
    }

    public function setHeightCm(?int $heightCm): void {
        $this->heightCm = $heightCm;
    }

    public function getWeightKg(): ?int {
        return $this->weightKg;
    }

    public function setWeightKg(?int $weightKg): void {
        $this->weightKg = $weightKg;
    }
}