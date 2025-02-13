<?php 

namespace Repository\Interfaces;

interface IVisitorRepository {
    public function save($visitor): void;
    public function findAll(): object;
}