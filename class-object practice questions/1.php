<!-- Question 1 — Basic Class Creation

Create a class Book.

Requirements:

Properties: title, author

Methods:

setTitle($title)
setAuthor($author)
getTitle()
getAuthor()

Task

Create one object.
Set values using setter methods.
Print both values using getters.

Goal

Object creation
$this usage
Basic structure -->



<?php

class Book
{
    public $title;
    public $author;

    public function setdata($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getdata()
    {
        return $this->title . "_" .
            $this->author;
    }
}

$show = new Book();
$show->setdata("Database Management System", "Jaydip Kuamar");
echo $show->getdata();
