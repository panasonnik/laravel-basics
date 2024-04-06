<?php

namespace App\Models;

class Item {
    public int $id; 
    public string $title;
    public String $desc;

    public function __construct(int $id) {
        $this->id = $id;
        $this->title="Item $id";
        $this->desc = "Description of item $id";
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function getDesc(): int {
        return $this->desc;
    }

    public function setDesc(int $desc): void {
        $this->desc = $desc;
    }
}
