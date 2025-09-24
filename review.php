<?php
class Review {
    private $name;
    private $surname;
    private $level;
    private $title;
    private $content;

    function __construct($name, $surname, $level, $title, $content){
        $this->name = $name;
        $this->surname = $surname;
        $this->level = $level;
        $this->title = $title;
        $this->content = $content;
    }
}