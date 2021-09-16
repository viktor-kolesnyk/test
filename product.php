<?php

class Product {

    public function setPrice($price){
        try {

        } catch (DbException $e){
            $this->logError($e->getMessage());
        }
    }

    public function logError($error){
        echo $error;
    }
}