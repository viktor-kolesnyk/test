<?php

class Logger {

    public function log($message){
        $this->saveToFile($message);
    }
}