<?php
namespace App\classes;
class start
{
    public function __construct()
    {
        echo "Hello World!";
    }
    public function run(){
        header('Location: action.php?pages=home');
    }
}