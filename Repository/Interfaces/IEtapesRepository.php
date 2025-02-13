<?php 

namespace Repository\Interfaces;

interface IEtapesRepository
{
    public function getAll();
    public function getById($id);
    public function create($etape);
    public function update($etape);
    public function delete($id);
}