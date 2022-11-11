<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MondolOZ :: A personal Blog of Oleraj Hossin!!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <link rel="stylesheet" href="assests/css/responsive.css">
    <link rel="stylesheet" href="assests/css/todo.css">
    <link rel="stylesheet" href="assests/css/calculator.css">
</head>
<body>
    <header id="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a href="action.php?pages=home" class="navbar-brand"><img src="media/images/logo.png" alt="Logo"></a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fa-solid fa-bars fa-xl text-muted"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="action.php?pages=home" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#aboutme" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="#project" class="nav-link">Projects</a></li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="others" role="button" data-bs-toggle="dropdown">
                                Others 
                                <span class="ps-1 fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="others">
                                <li><a href="action.php?pages=calculator" class="dropdown-item style">Calculator</a></li>
                                <li><a href="action.php?pages=todo" class="dropdown-item style">To-Do Appp</a></li>
                                <li><a href="#testimonial" class="dropdown-item style">Testimonial</a></li>
                                <li><a href="#happyclient" class="dropdown-item style">Happy Clients</a></li>
                                <li><a href="#contact" class="dropdown-item style">Contact Me</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#blogpost" class="nav-link">Blogs</a></li>
                        <li class="nav-item"><p class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">Login</p></li>
                    </ul>
                </div> 
            </div>
        </nav>
        <div class="header-image">
            <div class="bg-mask">
                <div class="intro text-center">
                    <h3 class="tyed3 py-2">HI, I am Oleraj</h3>
                    <h1 class="tyed1 py-2"><span class="typed"> </span></h1>
                    <p class="tyedp py-2 text-capitalize">Lorem ipsum dolor sit amet consectetur, adipisicing elit nobis. <br> Dolor sit amet consectetur, adipisicing elit nobis.</p>
                    <button class="cvbutton rounded-pill">Download CV</button>
                </div>
            </div>
        </div>
    </header>