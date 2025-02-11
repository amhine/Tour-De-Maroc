<?php

namespace Repository\Interfaces;

interface ICategorieRepository
{
    public function getAll();
    public function getById($id);
    public function create($categorie);
    public function update($categorie);
    public function delete($id);
}