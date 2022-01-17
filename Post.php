<?php

class Post{
  public $title;
  public $date;
  public $author;
  public $text;

  function __construct($_title, $_date, $_author, $_text)
  {
    $this->title = $_title;
    $this->date = $_date;
    $this->author = $_author;
    $this->text = $_text;
  }

  public function getExcept(){
    return substr($this->text,0,20) . "...";
  }
}

