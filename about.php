<?php 
session_start();
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
    <header class="header">
        <a href="index.html" class="logo">Portfolio.</a>

        <div class="bx bx-menu" id="menu-icon"></div>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php" class="active">About</a>
            <a href="dashboard.php" class="color">Dashboard</a>
            <a href="logout.php" class="color">Logout</a>
        </nav>
        <img src="sun.png" id="mode-icon">
    </header>
      
    <section class="bg">
        <div class="about">
            <h3 class="heading">About <span> Me</span></h3>
        <div class="abt-img">
            <img src="p.png" alt="">
            <span class="spin"></span>
        </div>

        <div class="about-content">
            <p>
            Hello! I'm Cristine Mae S. Lafable, a 20-year-old IT student with a dream of becoming a proficient web developer. My life, deeply intertwined with technology, has inspired me to embrace the world of technologists.
            As an enthusiastic learner, I dive into the complexities of IT,
            exploring various facets from programming languages to the latest web development trends.
            </p>
        </div>

        <div class="btn-box">
            <a href="readMore.php" class="btn" id="read">Read More</a>
        </div>

    </div>
    </section>

    <script src="script.js"></script>
</body>
</html>