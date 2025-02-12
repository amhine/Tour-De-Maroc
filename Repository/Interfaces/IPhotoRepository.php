<?php

namespace Repository\Interfaces;

interface IPhotoRepository
{
    public function ajoute($instancePhoto);
    public function delete($id);
    public function getCyclisteImage($user_id);

}