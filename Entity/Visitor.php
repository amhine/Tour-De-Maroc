<?php

namespace Entity;
use DateTime;

class Visitor {
    private $id;
    private $ipAddress;
    private $country;
    private $city;
    private $visitedAt;
    private $pageVisited;

    public function getId() {
        return $this->id;
    }

    public function setIpAddress($ipAddress) {
        $this->ipAddress = $ipAddress;
    }

    public function getIpAddress() {
        return $this->ipAddress;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

    public function getCountry() {
        return $this->country;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function getCity() {
        return $this->city;
    }

    public function setVisitedAt(DateTime $visitedAt): void {
        $this->visitedAt = $visitedAt;
    }

    public function getVisitedAt() {
        return $this->visitedAt;
    }

    public function setPageVisited($pageVisited) {
        $this->pageVisited = $pageVisited;
    }

    public function getPageVisited() {
        return $this->pageVisited;
    }
}