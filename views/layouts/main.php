<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>


<!-- Navigation-->
<?php $this->beginBody() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
<head>
    <meta charset="<?php echo Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resume</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <?php echo $this->head() ?>

</head>

<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Petran Laurentiu</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="profile image" /></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
            </ul>
        </div>
    </nav>
    <?php echo $content ?>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    Petran
                    <span class="text-primary">Laurentiu</span>
                </h1>
                <div class="subheading mb-5">
                    9 Pancota Street <br> Bucharest, <br> (+40) 766-647123 <br>
                    <a href="mailto:petran_laurentiu@yahoo.com">E-mail</a>
                </div>
                <p class="lead mb-5">Front-End Developer, computer, and science enthusiast. My main skills are HTML 5, CSS, Bootstrap, JavaScript, Vue.js, Python, Django. I`m looking to strengthen and constantly expand my skill set by learning new technologies. My best skills
                    are that I am hardworking, patient, and very savvy. I learn very quickly, and I adapt easily to new environments and I integrate well with teams. </p>
                <div class="social-icons">
                    <a class="social-icon" href="https://www.linkedin.com/in/petran-laurentiu-emil/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="https://github.com/petranlaurentiu"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="https://www.facebook.com/petran.laurentiu"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>

        </section>
        <hr class="m-0" />
        <!-- Experience-->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Experience <a class="social-icon" href="#"><i class="fas fa-briefcase"></i></a></h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">IT Support</h3>
                        <div class="subheading mb-3">Cora</div>
                        <p>• Installing and configuring computer hardware, software, systems, networks, printers and scanners <br>• Monitoring and maintaining computer systems and network <br>• Providing technical support across the company <br>• Repairing
                            and replacing equipment as necessary <br>• Testing and evaluating new technology <br>• Set up new users' accounts and profiles and deal with password issues <br>• Scripting</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">July 2020 - Present</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Front-End Developer</h3>
                        <div class="subheading mb-3">Antares Training & Recruitment</div>
                        <p>Key Qualifications & Responsibilities <br>• Implement websites, mobile applications, and landing pages. <br> • Standardized all output with a new, responsive, mobile-first approach and strategy. <br>• Assessed UX and UI designs
                            for feasibility.
                            <br>• Collaborated with product team members to implement new feature developments. Technologies used <br>• HTML 5 <br>• CSS <br>• Bootstrap <br>• JavaScript <br>• Analytical Skills <br>• SEO <br>• Responsive Design (Optimal
                            User Experience) Achievements <br>• Implemented new responsive, mobile-first approach which increased mobile traffic by 25%.</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">September 2019 - May 2020</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">For previous experience please check my <a class="social-icon" href="https://www.linkedin.com/in/petran-laurentiu-emil/"><i class="fab fa-linkedin-in"></i></a></h3>

                    </div>
                    <div>
                    </div>



                    <!-- End of Experience-->
        </section>
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Education <a class="social-icon" href="#"><i class="fas fa-university"></i></a></h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">University Romana-Americana</h3>
                        <div class="subheading mb-3">Bachelor of Economics</div>
                        <div>Banking and Financial Support</div>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">2009 - 2012</span></div>
                </div>

                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Wantsome IT Academy</h3>
                        <div class="subheading mb-3">Python Programming</div>
                        <div>Compilation vs Interpretation Levels of programming languages Basic terminal operations: cd, ls / dir, mkdir IDE Bit-wise operations ASCII Algorithms Pseudo code Creating a program from an algorithm Source Code Keywords Identifiers
                            Basic Data Types Complex Data Types Variables Constants Literals Punctuation / Symbols Operators Basic Coding Flows Iteration / Repetition / Loops Memory Stack Heap Arrays Strings Functions Basic Algorithms</div>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">2020 - 2020</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Udemy Academy</h3>
                        <div class="subheading mb-3">Python Programming</div>
                        <div>Online Course Python Programming Language Python Programming Bootcamp with advanced theoretical knowledge and practical experience. Credentials: http://ude.my/UC-4ac2fe3a-82b0-450e-9a93-e1c51b0fbd00
                        </div>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">2019 - 2020</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Udemy Academy</h3>
                        <div class="subheading mb-3">Python & Django Full Stack Developer</div>
                        <div>Full Stack Web Developer Bootcamp with advanced theoretical knowledge and practical experience. -Creating a fully functional web site using the Full-Stack with Django -HTML -CSS -Bootstrap -Javascript -jQuery to quickly work with
                            the DOM -Working with HTTP requests -Create landing pages -Using Python to code out web applications -Using Django as a back end for the websites -Implementing a full Models-Views-Templates structure for websites</div>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">2019 - 2020</span></div>
                </div>
            </div>
            <!-- End of Education-->
        </section>
        <hr class="m-0" />
        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-5">Skills <a class="social-icon" href=""><i class="far fa-file-code"></i></i></a></h2>
                <div class="subheading mb-3">Programming Languages & Tools</div>
                <ul class="list-inline dev-icons">
                    <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                    <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                    <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                    <li class="list-inline-item"><i class="fab fa-vuejs"></i></li>
                    <li class="list-inline-item"><i class="fab fa-bootstrap"></i></li>
                    <li class="list-inline-item"><i class="fab fa-python"></i></li>
                    <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                </ul>
                <div class="subheading mb-3">Workflow</div>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span> Mobile-First, Responsive Design
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span> Cross Browser Testing & Debugging
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span> Cross Functional Teams
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span> Agile Development & Scrum
                    </li>
                </ul>
            </div>
            <!-- End of Skills-->
        </section>
        <hr class="m-0" />
        <!-- Interests-->
        <section class="resume-section" id="interests">
            <div class="resume-section-content">
                <h2 class="mb-5">Interests <a class="social-icon" href="#"><i class="fa fa-magic"></i></a></h2>
                <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Bucharest, I enjoy mountain biking, free climbing, and hiking <i class="fas fa-hiking"></i>.</p>
                <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development
                    world.
                </p>
            </div>
            <!-- End of Interests-->
        </section>
        <hr class="m-0" />
        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">Awards & Certifications</h2>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span> Python & Django Full Stack Web Developer
                        <a href="https://www.udemy.com/certificate/UC-67528bed-79b6-4a1f-85d7-e2a9f60a6c05/">URL</a>
                    </li>
                </ul>
            </div>
        </section>
        </div>
        <!-- End of Awards-->

        <!-- Bootstrap core JS-->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> --> -->
    
<?php $this->endBody() ?>
</body>

<?php $this->endPage() ?>
