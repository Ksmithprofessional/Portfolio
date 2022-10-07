<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A web development portfolio by Karl Smith | Homepage">
    <title>Karl Smith's portfolio</title>
    <link rel="icon" type="image/x-icon" href="images/portfolio-favicon.png">
    <link rel="stylesheet" href="css/Normalise.css">
    <link rel="stylesheet" href="css/base.css">
    <script src="https://kit.fontawesome.com/cc1e8c8726.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;500;700&display=swap" rel="stylesheet">  -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;500;700&family=Permanent+Marker&display=swap" rel="stylesheet"> 
</head>

<body>

    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>

    <!-- side nav bar -->
    <nav>

        <div class="nav-menu">
            <i class="fa-solid fa-bars fa-2xl"></i>
        </div>

        <div class="nav-icons" style="left: -100px;">

            <!-- logo -->
            <a href="#"><div class="logo">
                <p>KS</p>
            </div></a>
            <div class="link-sm">
                <a href="html/about-me.html" title="About me"><i class="fa-solid fa-person fa-2xl"></i></a>
                <div class="hover-link">
                    <p><a href="html/about-me.html" title="About me">About me</a></p>
                </div>
            </div>
            <div class="link-sm">
                <a href="#portfolio" title="Portfolio"><i class="fa-solid fa-copy fa-xl"></i></a>
                <div class="hover-link">
                    <p><a href="#portfolio" title="Portfolio">Portfolio</a></p>
                </div>
            </div>
            <div class="link-sm">
                <a href="html/coding-examples.html" title="Coding Examples"><i class="fa-solid fa-code fa-xl"></i></a>
                <div class="hover-link">
                    <p><a href="html/coding-examples.html" title="Coding Examples">Code examples</a></p>
                </div>
            </div>
            <div class="link-sm">
                <a href="html/scs-scheme.html" title="SCS Scheme"><i class="fa-solid fa-school fa-xl"></i></a>
                <div class="hover-link">
                    <p><a href="html/scs-scheme.html" title="SCS Scheme">SCS Scheme</a></p>
                </div>
            </div>
            <div class="link-sm">
                <a href="#contact" title="Contact"><i class="fa-solid fa-comment-dots fa-xl"></i></a>
                <div class="hover-link">
                    <p><a href="#contact" title="Contact">Contact</a></p>
                </div>
            </div>
            <div class="link-sm">
                <a href="https://github.com/Ksmithprofessional" title="Github" target="_blank"><i class="fab fa-github-square fa-2xl"></i></a>
                <div class="hover-link">
                    <p><a href="https://github.com/Ksmithprofessional" title="Github" target="_blank">Github</a></p>
                </div>
            </div>
            <div class="link-sm">
                <a href="https://www.linkedin.com/in/karl-smith-0b477a252/" title="Linkedin" target="_blank"><i class="fab fa-linkedin"></i></a>
                <div class="hover-link">
                    <p class="last-link"><a href="https://www.linkedin.com/in/karl-smith-0b477a252/" title="Linkedin" target="_blank">LinkedIn</a></p>
                </div>
            </div>

            <i class="far fa-times-circle"></i>
        </div>

        <div class="nav-links">
            <!-- logo -->
            <a href="#"><div class="logo">
                <p>KS</p>
            </div></a>

            <ul>
               <li><a href="html/about-me.html"> About Me </a></li>
               <li><a href="#portfolio"> My Portfolio </a></li>
               <li><a href="html/coding-examples.html"> Coding Examples </a></li>
               <li><a href="html/scs-scheme.html"> SCS Scheme </a></li>
               <li><a href="#contact"> Contact Me </a></li>

                <!-- social media links -->

                <li class="github"><a href="https://github.com/Ksmithprofessional" title="Github" target="_blank"><i class="fab fa-github-square fa-2xl"></i></a></li>
                <li><a href="https://www.linkedin.com/in/karl-smith-0b477a252/" title="Linkedin" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            </ul>

        </div>


    </nav>

    <!-- header image -->

    <div class="header-image">
        <div class="header-container">
            <div class="image-content">
                <div class="h1">
                    <div class="header-border">
                        <!-- <span class="header-name">M</span>
                        <span class="header-name">y</span>
                        <span class="header-name">n</span>
                        <span class="header-name">a</span>
                        <span class="header-name">m</span>
                        <span class="header-name">e</span>
                        <span class="header-name">i</span>
                        <span class="header-name">s</span>  -->
                        <div class="inline-name">
                            <!-- <span class="header-name">K</span>
                            <span class="header-name">a</span>
                            <span class="header-name">r</span>
                            <span class="header-name">l</span>
                            <span class="header-name">S</span>
                            <span class="header-name">m</span>
                            <span class="header-name">i</span>
                            <span class="header-name">t</span>
                            <span class="header-name">h</span> -->
                        </div>
                    </div>
                </div>
                <p class="header-name">I'm a web developer</p>
            </div>

            <div class="scroll-down">
                <a href="#contact"><p>Scroll Down</p>
                <i class="fa-solid fa-angle-down fa-2xl"></i></a>
            </div>
        </div>
    </div>


    <!-- project cards -->

    <div class="background-1">
        <div class="container">
            <div id="portfolio">
                
                <div class="project-1">

                    <a href="http://netmatters.karl-smith.netmatters-scs.co.uk/" target="_blank"><img src="images/netmatters-website.png" alt="My version of the netmatters homepage"></a>
                    <div class="hover-text">
                        <p>
                            Using html, sass, javascript, and php, I recreated the netmatters homepage from scratch, as closely as i could.
                            I think i got as close to perfect as i could.
                        </p>
                    </div>
                    <h3>Recreating the Netmatters homepage</h3>
                    <div class="project-langs">
                        <img class="lang" src="images/HTML5.png">
                        <img class="lang" src="images/javascript.png">
                        <img class="lang" src="images/PHP.png">
                    </div>
                    <a href="http://netmatters.karl-smith.netmatters-scs.co.uk/" target="_blank"><p>View Project <i class="fas fa-arrow-right"></i></p></a>
                </div>

                <div class="project-2">

                    <a href="https://ksmithprofessional.github.io/Array-reflection/" target="_blank"><img src="images/array-reflection.png" alt="My array reflection webpage"></a>
                    <div class="hover-text">
                        <p>
                            Using html, sass, and javascript, I created a small website that would pull a random image using javascript's fetch api and link it to a user inputted email address.
                        </p>
                    </div>
                    <h3>Array reflection</h3>
                    <div class="project-langs">
                        <img class="lang" src="images/HTML5.png">
                        <img class="lang" src="images/javascript.png">
                    </div>
                    <a href="https://ksmithprofessional.github.io/Array-reflection/" target="_blank"><p>View Project <i class="fas fa-arrow-right"></i></p></a>
                </div>

                <div class="project">

                    <a href="http://wordpress.karl-smith.netmatters-scs.co.uk/" target="_blank"><img src="images/wordpress.png" alt="My Wordpress site"></a>
                    <div class="hover-text">
                        <p>
                            I created a wordpress site based around my ebay shop. I created a child theme with html, css, javascript, and php, and created a woocommerce shop.
                        </p>
                    </div>
                    
                    <h3>Wordpress Reflection</h3>
                    <div class="project-langs">
                        <img class="lang" src="images/HTML5.png">
                        <img class="lang" src="images/javascript.png">
                        <img class="lang" src="images/PHP.png">
                        <img class="lang" src="images/Wordpress_Blue_logo.png">
                    </div>
                    <a href="http://wordpress.karl-smith.netmatters-scs.co.uk/" target="_blank"><p>View Project <i class="fas fa-arrow-right"></i></p></a>
                </div>

            </div>
        </div>
    </div>


    <!-- contact form -->
    

    <div class="background-2">
        <div class="container">
            <div id="contact">

                <div class="get-in-touch">
                    <h3>Get in touch</h3>
                    <p>If you would like to contact me, you can do so here:</p>
                    <a href="mailto:k_m_s@hotmail.co.uk">k_m_s@hotmail.co.uk</a>
                    <p>Or, you can use the contact form and i'll get back to you as soon as i can</p>

                </div>

                <?php 
                include 'php/insert.php'; 
                ?>

                <form action="#" method="post">

                    <fieldset>

                        <span class="fname name-star">
                                <input type="text" id="fname" name="fname" placeholder="First Name">
                        </span>

                        <span class="lname">
                            <input type="text" id="lname" name="lname" placeholder="Last Name">
                        </span>

                        <span class="email e-star">
                            <input type="text" id="email" name="email" placeholder="Emailaddress@email.com">
                        </span>

                        <span class="subject">
                            <input type="text" id="subject" name="subject" placeholder="Subject">
                        </span>

                        <span class="message mess-star">
                            <textarea id="message" name="message" placeholder="Message"></textarea>
                        </span>

                        <input type="submit" value="Submit" name="submit" id="submit">
                        <p class="error"><?php echo $error; ?></p>
                        <p><?php echo $success; ?></p>

                    </fieldset>
                </form>
            </div>

           

            <div class="top">
                <a href="#"><i class="fa-solid fa-angle-up fa-2xl"></i> <br>
                Back to top</a>
            </div>
        </div>
    </div>
<script src="js/main.js"></script>
<script src="js/menu.js"></script>
</body>
</html>