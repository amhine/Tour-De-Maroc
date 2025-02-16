<?php 
namespace Controllers;

use Core\Database;
use Entity\Comments;
use Repository\CommentsRepository;
use Helpers\Validator;
use PDO;
use Exception;

class CommentsController {
    private $db;
    // private $session;
    private $commentsRepo;

    public function __construct()
    {
        $this->db = Database::getConnection()->conn;
        $this->commentsRepo = new CommentsRepository($this->db); 
    }
    public function showDashboard() {
        try {
            $comments = $this->commentsRepo->getAll();
            
            $totalComments = $this->commentsRepo->countAll();
            $hiddenComments = $this->commentsRepo->countHidden();
            
            include "./views/admin/Commentsdashboard.php";
            
        } catch (Exception $e) {
            $this->handleError($e);
        }
    }

    public function delete($id) {
        try {
            if (!Validator::validateInt($id)) {
                throw new Exception("Invalid comment ID");
            }
            
            $comment = $this->commentsRepo->getById($id);
            
            if ($comment->fk_user_id != $this->session->get('user_id')) {
                throw new Exception("Unauthorized deletion attempt");
            }
            
            $this->commentsRepo->delete($comment);
            
            $this->redirectToDashboard();
            
        } catch (Exception $e) {
            $this->handleError($e);
        }
    }

    public function update($id, $newContent) {
        try {
            if (!Validator::validateInt($id) || !Validator::validateCommentContent($newContent)) {
                throw new Exception("Invalid input parameters");
            }
            
            $comment = $this->commentsRepo->getById($id);
            
            if ($comment->fk_user_id != $this->session->get('user_id')) {
                throw new Exception("Unauthorized edit attempt");
            }
            
            $comment->comment_content = $newContent;
            $this->commentsRepo->update($comment);
            
            $this->redirectToDashboard();
            
        } catch (Exception $e) {
            $this->handleError($e);
        }
    }

    public function countComments() {
        try {
            return [
                'total' => $this->commentsRepo->countAll(),
                'hidden' => $this->commentsRepo->countHidden()
            ];
        } catch (Exception $e) {
            $this->handleError($e);
            return [];
        }
    }

    private function handleError(Exception $e) {
        error_log($e->getMessage());
        $this->session->setFlash('error', $e->getMessage());
        $this->redirectToDashboard();
    }

    private function redirectToDashboard() {
        header("Location: /dashboard");
        exit;
    }
}