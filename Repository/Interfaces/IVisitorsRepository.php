<?php 

namespace Repository\Interfaces;

interface IVisitorsRepository {
    public function save($visitor): void;
    public function findAll(): object;
}