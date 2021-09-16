<?php

class Product {

    private Logger $logger;

    public function __construct(Logger $logger){
        $this->logger = $logger;
    }

    public function setPrice($price){
        try {

        } catch (DbException $e){
            $this->logger->log($e->getMessage());
        }
    }
}