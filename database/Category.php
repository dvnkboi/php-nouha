<?php

namespace mobileshop;

class Category
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db)) {
            return null;
        }
        $this->db = $db;
    }

    //Fetch product Data
    public function getAll()
    {
        try{
            $this->db->query("SELECT * FROM categories");
            return $this->db->results();
        }catch(Throwable $e) {
            echo '<div class="alert alert-danger">'.get_class($e).
            ' on line: '.$e->getLine().' of '.$e->getFile().': '.$e->getMessage().'</div>';
        }
    }
}

