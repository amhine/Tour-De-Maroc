<?php

namespace Controllers;

use Core\Database;
use Entity\Photo;
use Helpers\Session;
use Repository\PhotoRepository;

use Exception;
class PhotoController
{
    private $db;
    private $session;

    public function __construct()
    {
        $this->db = Database::getConnection()->conn;
        $this->session = new Session();
    }

    public function addPhoto() {
        $filePhoto = $_FILES['image'];
        $fk_user_id = $this->session['user_id'];
        try {
            $photoInstance = new Photo(null, $filePhoto, $fk_user_id);
            $photoRepository = new PhotoRepository($this->db);
            $photoRepository->ajoute($photoInstance);
            $this->session->set('Succes', 'Image Added SuccesFully');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    public function delete() {
        $photo_id = $_GET['photo_id'];
        try {
            $photoRepository = new PhotoRepository($this->db);
            $photoRepository->delete($photo_id);
            $this->session->set('Succes', 'Image Deleted SuccesFully');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    public function getPhotos() {
        $fk_user_id = $this->session['user_id'];
        try {
            $photoRepository = new PhotoRepository($this->db);
            $photos = $photoRepository->getCyclisteImage($fk_user_id);
            return $photos; // TODO: return to view
        } catch (Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}