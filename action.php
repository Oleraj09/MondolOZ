<?php
include "pages/frontend/header.php";
if(isset($_GET['pages'])){
    if($_GET['pages']=='home'){
        include "pages/home.php";
    }
    if($_GET['pages']=='calculator'){
        include "pages/calculator.php";
    }
    if($_GET['pages']=='todo'){
        include "pages/todo.php";
    }
}
include "pages/frontend/footer.php";