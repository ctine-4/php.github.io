<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <link rel="stylesheet" href="stylee.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <header class="home-header">
        <a href="index.html" class="logo">Portfolio.</a>

        <div class="bx bx-menu" id="menu-icon"></div>
        <nav class="navbar">
            <a href="home.php" class="active">Home</a>
            <a href="about.php">About</a>
            <a href="project.html" class="color">Dashboard</a>
            <a href="logout.php" class="color">Logout</a>
        </nav>
        <img src="sun.png" id="mode-icon">
    </header>

    <section class="home" id="home">
        <div class="home-image">
            <img src="l.png" alt="" class="img">
        </div>

        <div class="home-content">
            <h1>Hi, I'm <span>Cristine Mae S. Lafable</span></h1>
            <div class="text-animate">
                <h3>Aspiring Web Developer</h3>
            </div>
            <p>I'm a 20-year old IT student from Liloan, Cebu City.</p>
        
            <div class="btn-box">
                <a href="https://drive.google.com/file/d/1Kg2mUpKw1plbYyevOkH_GAzIR_iaH6Hm/view?usp=sharing" target="_blank" rel="noopener noreferrer" class="btn">Download CV</a>
                <a href="contact.html" class="btn">Let's Talk</a>
            </div>
        </div>

        <div class="socmed">
            <div class="button">
               <div class="icon"><a href="https://www.facebook.com/jcmayzkie?mibextid=ZbWKwL" target="_blank" rel="noopener noreferrer"><i class='bx bxl-facebook'></i></a></div>
                <span>Facebook</span>
            </div>
            <div class="button">
                <div class="icon"><a href=""><i class='bx bxl-instagram'></i></a></div>
                 <span>Instagram</span>
            </div>
            <div class="button">
                <div class="icon"><a href=""><i class='bx bxl-messenger'></i></a></div>
                 <span>Messenger</span>
            </div>
            <div class="button">
                <div class="icon"><a href=""><i class='bx bxl-linkedin'></i></a></div>
                 <span>Linkedin</span>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
    
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>