<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="style.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Portfolio</title>
</head>
<body>
    <?php
    include 'dbcon.php';
        if(isset($_POST['submit'])){
            $name =mysqli_real_escape_string($con, $_POST['username']);
            $mail = mysqli_real_escape_string($con, $_POST['mail']);
            $message = mysqli_real_escape_string($con, $_POST['message']);
            $emailquery = "select * from register where email='$email' ";
            $query = mysqli_query($con,$emailquery);
                
            $insertquery = "insert into data( name, mail, message) values('$name','$mail','$message')";
            $iquery = mysqli_query($con, $insertquery);
    
        }
        ?>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#home" class="nav_logo">Aayush Patel</a>
            </div>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item"><a href="#home" class="nav_link active">Home</a></li>
                    <li class="nav_item"><a href="#about" class="nav_link">About Me</a></li>
                    <li class="nav_item"><a href="#skills" class="nav_link">Skills</a></li>
                    <li class="nav_item"><a href="#work" class="nav_link">Work</a></li>
                    <li class="nav_item"><a href="#contact" class="nav_link">Contact</a></li> 
                </ul>
            </div>
            <div class="nav_toggle" id="nav-toggle">
                <i class="bx bx-menu"></i>
            </div>
        </nav>
    </header>
    <main class="l-main">
        <section class="home bd-grid" id="home">
            <div class="home_data">
                <h1 class="home_title">Hi,<br>I'am <span class="home_title-color">Aayush</span><br>Web Designer</h1>
                <a href="Aayush Resume.pdf" class="button">Resume</a>
            </div>
            <div class="home_social">
                <a href="https://www.linkedin.com/in/aayush-patel-7b70a21a0/" class="home_social-icon"><i class="bx bxl-linkedin"></i></a>
                <a href="#" class="home_social-icon"><i class="bx bxl-github"></i></a>
            </div>
            <div class="home_img">
                <img src="image/6.png" alt="image">
            </div>
        </section>
        <section class="about section" id="about">
            <h2 class="section_title">About</h2>
            <div class="about_container bd-grid">
                <div class="about_img">
                    <img src="image/6.png" alt="img">
                </div>
                <div>
                    <h2 class="about_subtitle">I'am Aayush</h2>
                    <p class="about_text">Currently in 3rd year, pursuing B Tech in Computer Science at Sardar Patel College of Engineering. I have worked on web development projects both in frontend and backend using technologies  like HTML, CSS, Bootstrap, JavaScript, Php and MySQL.</p>
                </div>
            </div>
        </section>
        <section class="skills section" id="skills">
                <h2 class="section_title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">55%</span>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div>              
                        <img src="image/work3.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>
        <section class="work section" id="work">
            <h2 class="section_title">Work</h2>
            
            <div class="work_container bd-grid">
                    <div class="work_img">
                        <img src="image/work (1).png" alt="">
                    </div>
                    <div class="work_img">
                        <img src="image/work (2).png" alt="">
                    </div>
                    <div class="work_img">
                        <img src="image/work (3).png" alt="">
                    </div>
                    <div class="work_img">
                        <img src="image/work (4).png" alt="">
                    </div>
                    <div class="work_img">
                        <img src="image/work (5).png" alt="">
                    </div>
                    <div class="work_img">
                        <img src="image/work (6).png" alt="">
                    </div>
                </div>
        </section>
        <section class="contact section" id="contact">
            <h2 class="section_title">Contact</h2>
            <div class="contact_container bd-grid">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="contact_form">
                        <input type="text" name="username" placeholder="Name" class="contact_input">
                        <input type="mail" name="mail" placeholder="Email" class="contact_input" required>
                        <textarea name="message" id="" cols="0" rows="10" class="contact_input"></textarea>
                        <!-- <input type="button" name="button" value="Contact" class="contact_button button"> -->
                        <button type="submit" name="submit" class="contact_button button">Contact</button>
                    </form>
                </div>
        </section>
        <footer class="footer">
            <p class="footer_title">Aayush</p>
            <div class="footer__social">
                <a href="#" class="footer_icon"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer_icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer_icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p>&#169; 2020 copyright all right reserved</p>
        </footer>
    </main>
    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="script.js"></script>
</body>
</html>