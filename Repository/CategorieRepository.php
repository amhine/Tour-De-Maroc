<?php

namespace Repository;

use Repository\Interfaces\ICategorieRepository;

class CategorieRepository implements ICategorieRepository
{
    private $db;
    private $table = 'categorie';

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function create($categorie)
    {
        // TODO: Implement create() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function update($categorie)
    {
        // TODO: Implement update() method.
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }


}