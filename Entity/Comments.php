<?php
namespace Entity;

class Comments {
    private $comment_id;     
    private $comment_content; 
    private $fk_user_id;     
    private $fk_etape_id;     
    private $status;         

    
    private $fan_name;      
    private $etape;         
    
    public function __construct($id) {  
        $this->comment_id = $id;
    }
    
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
    
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}