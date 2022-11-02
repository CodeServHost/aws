<?php
$error = '';
require('mail/PHPMailerAutoload.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    if (empty($name)) {
        $error = 'Please Fill the name';
    } else if (empty($email)) {
        $error = 'Please Fill the email';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please Fill the valid email';
    } else if (empty($phone)) {
        $error = 'Please Fill the Mobile no';
    } else if (empty($message)) {
        $error = 'Please Fill the message';
    } else {
        $to = "anyawebsolution@gmail.com";
        $to1 = "rkyj08@gmail.com";
        $subject = "digital-marketing-shahdara-delhi || Landing Page";

        $message = "
<html>
<head>
</head>
<body>
 <b>Name</b> $name<br>
 <b>email</b> $email<br>
 <b>Mobile no</b> $phone<br>
 <b>Message</b> $message<br>
</body>
</html>
";

        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = "mail.anyawebsolution.in";
            $mail->Port = 587;
            $mail->SMTPSecure = "tls";
            $mail->SMTPAuth = true;
            $mail->Username = "donotreply@anyawebsolution.in";
            $mail->Password = "g.oE89oTU#gR";
            $mail->setFrom('donotreply@anyawebsolution.in', 'anyawebsolution');
            $mail->addAddress($to);
            $mail->addAddress($to1);
            $mail->Subject = $subject;
            $mail->msgHTML($message);
            if ($mail->send()) {
                header('location:thanks.php');
            }
        } catch (phpmailerException $e) {
            echo "Exception Occurs : ", $mail->ErrorInfo;
            $error = 'Error Sending Mail !!';
        } catch (Exception $e) {
            echo "Exception Occurs : ", $mail->ErrorInfo;
            $error = 'Error Sending Mail !!';
        }

    }
}

if (isset($_POST['callback'])) {
    $name = $_POST['name']; 
    $phone = $_POST['mobile']; 
    if (empty($name)) {
        $error = 'Please Fill the name'; 
        
    }else if (empty($phone)) {
        $error = 'Please Fill the Mobile no';
    }  else {
        $to = "anyawebsolution@gmail.com";
        $to1 = "rkyj08@gmail.com";
        $subject = "digital-marketing-shahdara-delhi || Call back";

        $message = "
<html>
<head>
</head>
<body>
 <b>Name</b> $name<br> 
 <b>Mobile no</b> $phone<br> 
</body>
</html>
";

        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = "mail.anyawebsolution.in";
            $mail->Port = 587;
            $mail->SMTPSecure = "tls";
            $mail->SMTPAuth = true;
            $mail->Username = "donotreply@anyawebsolution.in";
            $mail->Password = "g.oE89oTU#gR";
            $mail->setFrom('donotreply@anyawebsolution.in', 'anyawebsolution');
            $mail->addAddress($to);
            $mail->addAddress($to1);
            $mail->Subject = $subject;
            $mail->msgHTML($message);
            if ($mail->send()) {
                header('location:thanks.php');
            }
        } catch (phpmailerException $e) {
            echo "Exception Occurs : ", $mail->ErrorInfo;
            $error = 'Error Sending Mail !!';
        } catch (Exception $e) {
            echo "Exception Occurs : ", $mail->ErrorInfo;
            $error = 'Error Sending Mail !!';
        }

    }
}


?>
<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>AWS-Digital Marketing Professional training Course institute in Durgapuri Shahdara Delhi</title>
	
	<meta name="keywords" content="digital marketing course, digital marketing course shahdara, seo course shahdara, seo training shahdara, ppc course, smo course shahdara" />

<meta name="description" content="4.8 Rating Out of 5, Advance Digital Marketing Course - SEO, SMO, PPC, SMM, ecommerce, Facebook Ads, Google Ads, Call 9990888630."/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/stylesheet.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/media.css">
</head>

<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 logo"><img src="images/logo.png" width="189" height="88"></div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 email-top">
                <div class="call-us"><a href="tel:+91-9990888630"><i class="fa fa-phone" aria-hidden="true"></i>
                        +91-9990888630 </a></div>
                <div class="call-us"><a href="mailto:anyawebsolution@gmail.com"><i class="fa fa-envelope"
                                                                                   aria-hidden="true"></i>
                        anyawebsolution@gmail.com </a></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</header>
<section class="main-relative">
    <div class="banner-inner"><img src="images/banner.jpg" alt="Banner">
        <div class="form-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-6 banner-contant">
                        <div class="banner-contant-inner">
                            <h3>Learn Digital Marketing<br>
                                from Industry
                                Experts on <br>
                                Live Projects </h3>
                            <ul>
                                <li>Become Google, Facebook Ad Expert</li>
                                <li>Professional Certificate in Digital Marketing</li>
                                <li>100% Professional Training</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5  col-sm-6" id="form">
                        <div class="enquiry-form">
                            <form method="post" enctype="multipart/form-data" id="formdata">
                                <h4>Get a Free Quote </h4>
                                <div class="form-group">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  padding2">
                                        <input type="text" class="form-control" id="name_top" placeholder="Name"
                                               name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12   padding2">
                                        <input type="text" class="form-control" id="email_top" placeholder="Your Email"
                                               name="email">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12   padding2">
                                        <input type="text" name="phone" id="phone_top" class="form-control"
                                               placeholder="Your Phone Number"
                                               onkeypress='return event.charCode >=48 && event.charCode <=57 || event.charCode==43 || event.charCode==40 || event.charCode==41 || event.charCode==45'
                                        >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 padding2">
                                        <input type="text" name="message" id="detail_top" class="form-control msg"
                                               placeholder="Message">
                                    </div>
                                </div>
                                <div class="error"><?= $error ?></div>
                                <div class="col-md-12 padding2">
                                    <input name="submit" type="submit" id="submit_top" class="btn-default"
                                           value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="middle-sec">
    <div class="highlight-course-icon-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h3 class="headdding33">Course Highlights </h3>
                </div>
                <div class="col-lg-4 col-md-4 highlight-course-icon"><img src="images/seo.png" alt="seo">
                    <h6>SEO</h6>
                    <p>Search Engine Optimization</p>
                </div>
                <div class="col-lg-4 col-md-4 highlight-course-icon"><img src="images/smo.png" alt="SMO">
                    <h6>SMO/SMM</h6>
                    <p>Social Media Optimization/Marketing</p>
                </div>
                <div class="col-lg-4 col-md-4 highlight-course-icon"><img src="images/ppc.png" alt="Pay Per Click">
                    <h6>PPC</h6>
                    <p>Pay Per Click</p>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-4 col-md-4 highlight-course-icon"><img src="images/ecommer.png" alt="E-Commerce	">
                    <h6>E-Commerce</h6>
                    <p>E-Commerce Training</p>
                </div>
                <div class="col-lg-4 col-md-4 highlight-course-icon"><img src="images/modules.png"
                                                                          alt="Advance Modules">
                    <h6>41+Modules</h6>
                    <p>Advance Modules Training</p>
                </div>
                <div class="col-lg-4 col-md-4 highlight-course-icon"><img src="images/email.png" alt="Email Marketing">
                    <h6>E-Mail</h6>
                    <p>Email Marketing</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modules-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h3 class="headdding33">Affordable Course Modules</h3>
                    <ul>
                        <li>
                            <div class="col-cell"><img src="images/1.png" alt="Fundamental Of Digital Marketing">
                                Fundamental Of Digital Marketing
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/3.png" alt="Email Marketing"> E -Mail <br>
                                Marketing
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/4.png" alt="Lead Generation For Business"> Lead
                                Generation For Business
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/5.png" alt="Email Marketing"> Google <br>
                                Ads (PPC)
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/6.png" alt="Email Marketing"> Google<br>
                                Analytics
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/7.png" alt="Social Media Marketing"> Social Media
                                Marketing(SMM)
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/8.png" alt="Search Engine Optimization"> Search
                                Engine Optimization (SEO)
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/9.png" alt="Search Engine Optimization"> Online
                                Display Advertisment
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/10.png" alt="Search Engine Optimization">
                                E-Commer<br>
                                Marketing
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/11.png" alt="Search Engine Optimization"> Mobile <br>
                                Marketing
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/12.png" alt="Search Engine Optimization"> Content
                                <br>
                                Marketing
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/13.png" alt="Search Engine Optimization"> Online
                                Reputaion Management
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/14.png" alt="Search Engine Optimization"> Creating
                                Marketing Strategy
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/15.png" alt="Search Engine Optimization">
                                Affiliate<br>
                                Marketing
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/16.png" alt="Search Engine Optimization"> Blogging
                                <br>
                                <p>&nbsp; </p>
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/17.png" alt="Search Engine Optimization"> GEO
                                International Targeting
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/18.png" alt="Search Engine Optimization"> Black <br>
                                Hat Techniques
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/19.png" alt="Search Engine Optimization"> Video<br>
                                Marketing
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/20.png" alt="Search Engine Optimization">
                                Freelance<br>
                                Pushups
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/21.png" alt="Search Engine Optimization"> Digital
                                Marketing Interview Prepration
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/22.png" alt="Search Engine Optimization"> Competitor
                                <br>
                                Analysis
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/23.png" alt="Search Engine Optimization"> Case Study
                                <br>
                                Discussions
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/16.png" alt="Search Engine Optimization"> Search
                                Engine <br>
                                Algorithm
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/17.png" alt="Search Engine Optimization"> Search
                                Engine & <br>
                                Soial Marketing
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/18.png" alt="Search Engine Optimization"> Web
                                Master<br>
                                Tool
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/24.png" alt="Search Engine Optimization"> Inbound
                                <br>
                                Marketing
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/25.png" alt="Search Engine Optimization"> Local
                                Business <br>
                                Listing
                            </div>
                        </li>
                        <li>
                            <div class="col-cell"><img src="images/26.png" alt="Search Engine Optimization"> Remarketing
                                <br>
                                Parameters
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
   <!-- <div style="margin: 30px 0px;">
       <div class="container">
           <div class="auto-play slider" style="height: 250px; margin: 0px 20px;">
               <div class="slide">
               <img src="images/p1.jpg" />
           </div>
           <div class="slide">
               <img src="images/p1.jpg" />
           </div>
           <div class="slide">
               <img src="images/p1.jpg" />
           </div>
           <div class="slide">
               <img src="images/p1.jpg" />
           </div>
           <div class="slide">
               <img src="images/p1.jpg" />
           </div>
           <div class="slide">
               <img src="images/p1.jpg" />
           </div>
           </div>
       </div>
   </div>
   -->
   

 
    <div class="about-dm couses-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h3 class="headdding33">Digital Marketing </h3>
                </div>
                <div class="col-lg-12 col-md-12">
                    <p> We offer specialized skill-based practical programs in digital marketing training, seo training,
                        Google AdWords, Social media marketing with Graphic Designing course.
                        Our digital marketing courses are designed for students, working professionals and entrepreneurs
                        to learn and implement the concepts in the real world scenarios.</p>
                    <ul>
                        <li>Student and Fresher for Job Purpose</li>
                        <li>Digital Marketing Professional for Career Growth</li>
                        <li>Business Owner and Enterpreneurs for Business Growth</li>
                        <li>New Business Startup</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="couses-list-row">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h3 class="headdding33">Course Content </h3>
                </div>
                <div class="popular-procedures-row">
                    <div class="col-lg-12 col-md-12 couses-list">
                        <ul>
                            <li> Introduction to Digital marketing</li>
                            <li>Basics of Marketing and Branding</li>
                            <li>Creating Digital Marketing Strategy</li>
                            <li>Website Planning and Structure</li>
                            <li>Inbound / Outbound Marketing</li>
                            <li>Link Building Strategies</li>
                            <li>Advance Search Engine Optimization</li>
                            <li>Google My Business –Map</li>
                            <li>Advanced Web Analytics</li>
                            <li>Google Webmaster Tool</li>
                            <li>Content Marketing</li>
                            <li>Introduction to Digital marketing</li>
                            <li>Professional Blogging</li>
                            <li>Web Analytics</li>
                            <li>Social Media Advertising</li>
                            <li>Facebook Ad Campaigns</li>
                            <li>Facebook Advance Strategies</li>
                            <li>Facebook Marketing Fundamentals</li>
                            <li>Conversion Rate Optimization</li>
                            <li>Instagram Marketing</li>
                            <li>Brand Awareness</li>
                            <li>Blogging</li>
                            <li>LinkedIN, Twitter and Pinterest</li>
                            <li>Mobile Marketing</li>
                            <li>Social Media Strategy & Management</li>
                            <li>Twitter Marketing</li>
                            <li>Marketing Automation</li>
                            <li>Marketing Fundamentals</li>
                            <li>Marketing Principles</li>
                            <li>Video Making</li>
                            <li>Display Advertising</li>
                            <li>Viral Marketing</li>
                            <li>YouTube Marketing</li>
                            <li>Pay Per Click</li>
                            <li>Advanced Search Advertising</li>
                            <li>Google Adwords Advance Level</li>
                            <li>Online Advertising & Google Adwords</li>
                            <li> Online Display Advertising</li>
                            <li>Remarketing & Recall Ads</li>
                            <li>Lead generation and Marketing Automation</li>
                            <li>Re-Marketing Strategies</li>
                            <li>Basic of CPanel and FTP</li>
                            <li>Interview Preparation</li>
                            <li>Fiverr Project Understanding</li>
                            <li>Email Marketing Advance Level</li>
                            <li>E-commerce Website Creation using woo commerce</li>
                            <li>Ecommerce and Payment Gateway</li>
                            <li>Affiliate Marketing and AdSense</li>
                            <li>Case Studies and Practical Assignments</li>
                            <li>Graphic designing for Business</li>
                            <li>100 Proven Marketing Tips</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="disclaimer">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h6>Our Location</h6>
                    <p>1449/B-1, 1st Floor, Durgapuri Chowk, Loni Road <br>
                  Near Fruit Juice Corner Shop, SHAHDARA -110032</p>
                    <div class="bottom-social">
                        <ul>
                            <li><a target="_blank" href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.382081023498!2d77.29220841486392!3d28.678215082399813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb1d495aba2d%3A0xe2cce45bfc4ea10d!2sSEO%2C+PPC%2C+SMO%2C+Graphic+Designer%2C+DTP%2C+Advance+Excel-Shahdara!5e0!3m2!1sen!2sin!4v1543305799346"
                            width="100%" height="200" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="bottom-band"><a href="#form">Get a Free Quote </a></div>
<div class="callback"><a class="callback-btn" data-toggle="modal" data-target="#myModal"> CALL BACK </a></div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="enquiry-form">
                    <form method="post" enctype="multipart/form-data" id="callback">
                        <h4>Call Back </h4>
                        <div class="form-group">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  padding2">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12   padding2">
                                <input type="text" name="mobile" class="form-control" placeholder="Your Phone Number"
                                       onkeypress='return event.charCode >=48 && event.charCode <=57 || event.charCode==43 || event.charCode==40 || event.charCode==41 || event.charCode==45'>
                            </div>
                        </div>
                        <div class="col-md-12 padding2">
                            <input name="callback" type="submit" class="btn-default" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).on('submit', '#callback', function (e) {
        var name = $('[name="name"]', this);
        var mobile = $('[name="mobile"]', this);
        var submit = $('[type="submit"]', this);
        if (empty(name.val())) {
            alert('Please Fill the name');
            return false;
        } else if (empty(mobile.val())) {
            alert('Please Fill the mobile no');
            return false;
        } else {
            submit.val('Wait...');
            submit.css('cursor', 'none');
        }
    });
    $(document).on('submit', '#formdata', function (e) {
        var name = $('[name="name"]', this);
        var email = $('[name="email"]', this);
        var phone = $('[name="phone"]', this);
        var message = $('[name="message"]', this);
        var submit = $('[type="submit"]', this);
        if (empty(name.val())) {
            alert('Please Fill the name');
            return false;
        } else if (empty(email.val())) {
            alert('Please Fill the Email');
            return false;
        } else if (!isEmail(email.val())) {
            alert('Please Fill the valid Email');
            return false;
        } else if (empty(phone.val())) {
            alert('Please Fill the mobile no');
            return false;
        } else if (empty(message.val())) {
            alert('Please Fill the Message');
            return false;
        } else {
            submit.val('Wait...');
            submit.css('cursor', 'none');
        }
    });

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function empty(data) {
        if ($.trim(data) == '')
            return true;
        else
            return false;
    }
</script>
<script>

    $('a[href^="#"]').click(function () {

        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 200);

        return false;

        e.preventDefault();

    });
</script>
<script>
    $(document).ready(function () {

        $(document)[0].oncontextmenu = function () {
            return false;
        }

        $(document).mousedown(function (e) {
            if (e.button == 2) {
                alert('Sorry, this functionality is disabled!');
                return false;
            } else {
                return true;
            }
        });
    });
</script>
<script>
    function disableselect(e) {
        return false
    }

    function reEnable() {
        return true
    }

    if IE4 +
    document.onselectstart = new Function("return false")
        if NS6
            if (window.sidebar) {
                document.onmousedown = disableselect
                document.onclick = reEnable
            }
</script>
<script>
    document.onkeydown = function (e) {
        if (e.keyCode == 123) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
            return false;
        }

        if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
            return false;
        }
    }
</script>
<script>
    $(document).ready(function(){

    $('.auto-play').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        vertical:false,
        arrows: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 520,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
      });

});
</script>
</body>
</html>
