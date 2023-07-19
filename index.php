<?php


class Movie {
    public $name;
    public $director;
    public $year;
    public $language;
    public static $staticProperty = 'VERSION 1.0';

    function __construct(String $_name, Int $_director, Int $_year, String $_language){
        $this->name = $_name;
        $this->director = $_director;
        $this->year = $_year;
        $this->language = $_language;

       
    }

    public function getName(){
        return $this->name;
    }
}




$Repo_Man = new Movie('Repo Man', 'Alex Cox', 1984, 'eng');
echo $Repo_Man->getName();
var_dump($Repo_Man);


$The_haunting = new Movie('The Haunting', 'Robert Wise', 1963, 'eng');
echo $The_haunting->getName();
var_dump($The_haunting);


 ?>

