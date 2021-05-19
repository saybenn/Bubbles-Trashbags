<?php
//include required phpmailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// //set variables
// $name = $_POST['name'];
// $visitor_email = $_POST['email'];
// $message = $_POST['message'];

// $email_from = 'elliott.chambers.jr@gmail.com';
// $email_subject = "New Form Submission";
// $email_body = "You have received a new message from $name. \n"."Here is the message:\n $message".

// $to = "neverastain@gmail.com";
// $headers = "From: $email_from \r\n";
// $headers .= "Reply-To: $visitor_email \r\n";

// mail($to, $email_subject, $email_body, $headers);

if(isset($_POST['submit'])) {
    //create instance of php mailer
    $mail = new PHPMailer();

    //set mailer to use smtp
    $mail ->isSMTP();

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    //define smtp host
    $mail -> Host ="smtp.gmail.com";

    //enable smtp authentication
    $mail ->SMTPAuth = "true";

    //set type of encryption ((ssl/tls))
    $mail -> SMTPSecure = 'tls';

    //set port to connect smtp
    $mail -> Port = "587";

    //set gmail username
    $mail -> Username = "elijr1980@gmail.com";

    //set gmail password
    $mail -> Password = "22Cambri1232!";

    //set sender
    $mail->SetFrom('elijr1980@gmail.com');

    //set email subject
    $mail -> Subject = '*You Got Mail*';

    //email body
    $mail -> Body = 'from:' . $POST_['name'] . '@' .$POST_['email'] . 'saying' . $POST_['message'] . 'about' . $POST_['subject'];

    //recipient
    $mail -> addAddress("neverastain@gmail.com");

    //send email
    if ($mail ->Send()) {
        echo 'Mail Sent';
    } else {
        echo 'Error';
    }
    //close smtp connection
    $mail ->smtpClose();
    header("Location: index.php?mailsend");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/clean.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <title>Bubbles & Trashbags LLC</title>
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="top-fly">
            <div class="brand">
                <img src="./img/logo.jpg" alt="">
                <h1 class="xl">Bubbles & Trashbags</h1>
                <div class="menu-wrap">
                    <input type="checkbox" class="toggler">
                    <div class="hamburger"><div></div></div>
                    <div class="menu">
                        <div>
                            <div>
                                <ul>
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#commercial-cleaning">Commercial Cleaning</a></li>
                                    <li><a href="#valet-trash">Valet Trash</a></li>
                                    <li><a href="#about-us">About Us</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="telly" href="tel:+7572962939"> 
                    <i class="fas fa-phone"></i>
                </a>
            </div>
            <div class="call">
                <a href="tel:+7572962939">
                    <button class="btn btn-transparent round" id="call-btn"><i class="fas fa-phone"></i> Free Consultation (757) 296-2939</button>
                </a>
            </div>
        </div>
        <nav class="nav-bar">
            <ul class="small">
                <a class="current" href="#home"><li>Home</li></a>
                <a href="#commercial-cleaning"><li>Commercial Cleaning</li></a>
                <a href="#valet-trash"><li>Valet Trash</li></a>
                <a href="#about-us"><li>About Us</li></a>
                <a href="#contact"><li>Contact</li></a>
            </ul>
        </nav>
    </header>
    <!-- CONTENT -->
    
    <div class="outer-wrapper">
        <div class="wrapper">
    <!-- HOME -->
            <div class="slide" id="home">
                <div class="landing">
                    <div class="landing-left">
                        <h2 class>"Relax, let us do the dirty work."</h2>
                        <h1 class="xxl my-1">Bubbles & Trashbags</h1>
                        <h3 class="my-b3">Serving the Hampton Roads Communties</h3>
                        <button class="btn btn-transparent"><a class="small" href="#contact"> Get A Quote</a></button>
                    </div>
                    <div class="py-2 landing-right">
                        <h1 class="txt-c">Services We Offer</h3>
                            <div class="service-links">
                                <a href="#commercial-cleaning" class="bubble-top my-1">
                                    <img src="./img/building.jpg" alt="">
                                    <h3>Commercial <br>Cleaning</h3>
                                </a>
                                <a href="#valet-trash" class="bubble-bottom">
                                    <img src="./img/trash.jpg" alt="">
                                    <h3>Valet<br> Trash</h3>
                                </a>
                            </div>
                         
                    </div>    
                </div>
                <article>
                    <div class="intro">
                        <i class="fas fa-users fa-2x my-b1"></i>
                        <h1 class=" big my-b1">Who Are We</h1>
                        <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem doloremque autem consequuntur quas error ab illum numquam quisquam aliquid quam eius neque, itaque, at rem. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur autem aperiam quas quia numquam, amet eaque nam in a blanditiis natus enim minus ducimus temporibus?</p>
                    </div>     
                </article>
            </div>

    <!-- COMMERCIAL CLEANING -->
            <div class="slide" id="commercial-cleaning">
                <div class="landing-split">
                    <div class="landing-inner-left">
                        <img src="/img/building-2.jpg" alt="">
                        <h1 class="xxl">Commercial<br> Cleaning</h1>
                    </div>
                    <div class="landing-inner-right">
                        <div class="section-top">
                            <h1 class="my-b1">Service Summary</h1>
                            <div class="content">
                                <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At voluptatibus, mollitia assumenda fuga odio ullam culpa qui aut, laudantium est, non corporis provident veritatis inventore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, aut?<button class="btn btn-transparent"><a href="#contact">Contact Us</a></button></p>               
                            </div>      
                        </div>
                        <div class="section-bottom">
                            <h1 class="my-b2">Service Details</h1>
                            <div class="subs small">
                                <div class="sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam sunt, molestiae quibusdam necessitatibus corrupti repudiandae, voluptate eveniet commodi, et 
                                </div>
                                <div class="pipe"></div>
                                <div class="sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam sunt, molestiae quibusdam necessitatibus corrupti repudiandae, voluptate eveniet commodi, et 
                                </div>
                                <div class="pipe"></div>
                                <div class="sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam sunt, molestiae quibusdam necessitatibus corrupti repudiandae, voluptate eveniet commodi, et </div>
                            </div>
                        </div>                  
                    </div>
                </div>
            </div>

    <!-- VALET TRASH -->
            <div class="slide" id="valet-trash">
                <div class="landing-split">
                    <div class="landing-inner-left">
                        <img src="/img/valettrash.jpg" alt="">
                        <h1 class="xxl">Valet<br> Trash</h1>
                    </div>
                    <div class="landing-inner-right">
                        <div class="section-top">
                            <h1 class="my-b1">Service Summary</h1>
                            <div class="content">
                                <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At voluptatibus, mollitia assumenda fuga odio ullam culpa qui aut, laudantium est, non corporis provident veritatis inventore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, aut?<button class="btn btn-transparent"><a href="#contact">Contact Us</a></button></p>               
                            </div>      
                        </div>
                        <div class="section-bottom">
                            <h1 class="my-b2">Service Details</h1>
                            <div class="subs small">
                                <div class="sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam sunt, molestiae quibusdam necessitatibus corrupti repudiandae, voluptate eveniet commodi, et 
                                </div>
                                <div class="pipe"></div>
                                <div class="sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam sunt, molestiae quibusdam necessitatibus corrupti repudiandae, voluptate eveniet commodi, et 
                                </div>
                                <div class="pipe"></div>
                                <div class="sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam sunt, molestiae quibusdam necessitatibus corrupti repudiandae, voluptate eveniet commodi, et </div>
                            </div>
                        </div>                  
                    </div>
                </div>
            </div>

    <!-- ABOUT US -->
            <div class="slide" id="about-us">
                <div class="about-landing-split">
                    <div class="about-landing-left">
                        <img src="/img/about.jpg" alt="">
                        <h1 class="xxl">About<br> Us</h1>
                    </div>
                    <div class="about-landing-right">
                        <h1 class="my-b2 xl">WHO WE ARE</h1>
                        <ul>
                            <li class="my-1 med">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore, ut.</li>
                            <li class="my-1 med">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore, ut.</li>
                            <li class="my-1 med">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore, ut.</li>
                            <li class="my-1 med">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore, ut.</li>
                        </ul>
                    </div>
                </div>
            </div>

    <!-- CONTACT -->
            <div class="slide" id="contact">
                <div class="contact-content">
                    <h1 class="my-b2 xl">CONTACT US</h1>
                    <div class="contact">
                        <div class="contact-left">
                            <form method='post' action='mailer.php'>
                                <div class="row">
                                    <div class="column">
                                        <label class="my-b1" for="name">Name</label>
                                    <input class="my-b1" class="my-b1" name="name" type="text" id="name" placeholder="Enter your name...">
                                    </div>
                                    <div class="column">
                                        <label class="my-b1" for="phone">Phone </label>
                                        <input class="my-b1" name="phone" type="tel" id="phone" placeholder="Enter your phone number...">
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="column">
                                        <label class="my-b1" for="subject">Subject</label>
                                        <input class="my-b1" name="subject" type="text" id="subject" placeholder="Enter subject message...">
                                    </div>
                                    <div class="column">
                                        <label class="my-b1" for="email">Email</label>
                                        <input class="my-b1" name="email" type="email" id="email" placeholder="Enter your email...">
                                    </div>     
                                </div>
                                <div class="message-box">
                                    <label class="my-b1" for="message">Message</label>
                                    <textarea class="my-b3" name="message" id="message" cols="30" rows="5" placeholder="Enter your message..."></textarea>
                                    <button class="btn btn-transparent" value="submit" type="submit">Send</button>
                                </div>
                            </form>
                        </div>
                        <div class="pipe"></div>
                        <div class="contact-right">
                            <h2 class="my-b2">WHO WE SERVE</h2>
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer>
        <div class="left-footer">
            <p>&copy; 2019 by Bubbles and Trash Bags LLC</p>
        </div>
        <div class="middle-footer">
            <a href="tel:+7572962939">
                <p>(757) 296-2939</p>
            </a>
        </div>
        <div class="right-footer">
            <a target="_blank" href="https://www.facebook.com/Bubbles-Trash-Bags-LLC-104193860966911/"><i class="fab fa-facebook-f"></i></a>
            <a target="_blank" href="https://twitter.com/valettrash757"><i class="fab fa-twitter"></i></a>
        </div>
    </footer>

    <script src="script.js"></script>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7HM7QMyORLm4QAUIq-TGcPsiHXrOw4XQ&callback=initMap"></script>
</body>
</html>