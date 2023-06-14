<?php

require_once 'config/database.php';

class Row {
    private $id;
    protected $name;
    private $createdAt;
    private $updatedAt;

    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}