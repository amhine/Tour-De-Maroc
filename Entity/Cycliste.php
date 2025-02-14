<?php

namespace Entity;

class Cyclist
{
    private $id;
    private $firstName;
    private $lastName;
    private $team;
    private $age;
    private $nationality;
    private $preferredRaceType;
    private $height;
    private $weight;
    private $bio;
    private $profilePicture;

    // Getters and Setters
    public function getId(): ?int {
        return $this->id;
    }

    public function setId(?int $id): void {
        $this->id = $id;
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

    public function getAge(): ?int {
        return $this->age;
    }

    public function setAge(?int $age): void {
        $this->age = $age;
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

    public function getHeight(): ?int {
        return $this->height;
    }

    public function setHeight(?int $height): void {
        $this->height = $height;
    }

    public function getWeight(): ?int {
        return $this->weight;
    }

    public function setWeight(?int $weight): void {
        $this->weight = $weight;
    }

    public function getBio(): ?string {
        return $this->bio;
    }

    public function setBio(?string $bio): void {
        $this->bio = $bio;
    }

    public function getProfilePicture(): ?string {
        return $this->profilePicture;
    }

    public function setProfilePicture(?string $profilePicture): void {
        $this->profilePicture = $profilePicture;
    }
}