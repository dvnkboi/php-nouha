<?php

namespace mobileshop;

class Product
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
    public function getProducts()
    {
        try{
            $this->db->query("SELECT * FROM product");
            return $this->db->results();
        }catch(Throwable $e) {
            echo '<div class="alert alert-danger">'.get_class($e).
            ' on line: '.$e->getLine().' of '.$e->getFile().': '.$e->getMessage().'</div>';
        }

    }
}

