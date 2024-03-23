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
            <a href="home.php" class="active">Home</a>
            <a href="about.php">About</a>
            <a href="project.html" class="color">Dashboard</a>
            <a href="logout.php" class="color">Logout</a>
        </nav>
        <img src="sun.png" id="mode-icon">
    </header>

    <section class="skills">
        <h2 class="head"><span>My</span>Skills</h2>

        <div class="skills-row">
            <div class="skills-column">
                <h3 class="title">Coding Skills</h3>

                <div class="skills-box">
                    <div class="skills-content">
                        <div class="progress">
                            <h3>HTML <span>50%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>CSS <span>40%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                        
                        <div class="progress">
                            <h3>Java <span>20%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                        
                        <div class="progress">
                            <h3>JavaScript <span>10%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="skills-column">
                <h3 class="title">Soft Skills</h3>

                <div class="skills-box">
                    <div class="skills-content">
                        <div class="progress">
                            <h3>Time Management <span>80%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Adaptability <span>70%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                        
                        <div class="progress">
                            <h3>Problem Solving <span>60%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                        
                        <div class="progress">
                            <h3>Creativity <span>50%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="education">
        <div class="education-column"> 
            <h3 class="title"><span>Career</span> Objectives</h3>
    
             <div class="education-box">
                <div class="education-content">
                    <div class="content">
                    <p>To take on a challenging role in the field of programming where I can implement the experience
                        I gained and hone my skills while contributing something worthwhile to your will.</p>
                    </div>
                </div>
            </div>
        </div>

    <h3 class="title"><span>Educational</span> Background</h3>
     <div class="education-row">
       <div class="education-column"> 
        
            <div class="education-box">
                <div class="education-content">
                    <div class="content">
                        <div class="year"><i class='bx bxs-calendar'></i>2023-Present</div>
                        <h3>College</h3>
                        <p>-Cebu Technological University</p>
                        <p>-Sabang Danao City</p>
                        <p>-Bachelor of Science in Information technology</p>
                        <p>-Dean's Lister</p>
                    </div>
                </div>
            </div>
        </div>
            <div class="education-column"> 
              <div class="education-box">
                <div class="education-content">
                    <div class="content">
                        <div class="year"><i class='bx bxs-calendar'></i>2020-2022</div>
                        <h3>Senior Highschool</h3>
                        <p>-Arcelo Memorial Highschool</p>
                        <p>-San Vicente, Liloan Cebu</p>
                        <p>-Information, Communication and Technology</p>
                        <p>-Honor Received: With Honor</p>
                    </div>
                </div>
             </div>
          </div>
     </div>

     <div class="btn-box">
        <a href="about.php" class="btn" id="read">Back</a>
    </div>
    </section>

    <script src="script.js"></script>
</body>
</html>