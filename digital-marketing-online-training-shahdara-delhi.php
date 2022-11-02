<?php

include('mail/PHPMailerAutoload.php');

if (isset($_POST['submitform'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $messg = $_POST['message'];

    if (empty($name)) {
        $errorlog = 'Name is Empty';
    } else if (empty($phone)) {
        $errorlog = 'Mobile is Empty';
    } else if (empty($location)) {
        $errorlog = 'Location is Empty';
    } else if (empty($messg)) {
        $errorlog = 'Message is Empty';
    } else {
        $msg = ' <div class="mail-msg">
      <table style="width:600px;margin:50px auto;border:1px solid
        #DDDDDD" width="700" cellspacing="0" cellpadding="0" border="0"
        align="center">
        <tbody>
          <tr>
            <td
              style="padding:10px;background-color:#dc1d2b;color:#FFF;"
              colspan="2" valign="middle" align="left">
              <h1 style="font-family:sans-serif; text-align: center;">Anya Web Solution</h1>
            </td>
          </tr>
          <tr>
            <td style="padding:30px;" colspan="2" valign="middle"
              align="left">
              <p style="font-family:sans-serif;color:#dc1d2b; margin: 0px; padding: 0px;"><strong>Dear Admin</strong><br>
                <br>A new user details : </p>
              <ul style="list-style: none; margin-top:10px; padding: 0px; font-family: lato; line-height: 1.7;">

                <li style="margin: 0px; padding: 0px;"><strong>Name :</strong> ' . $name . '</li>
                <li style="margin: 0px; padding: 0px;"><strong>Mobile No :</strong> ' . $phone . '</li>
                <li style="margin: 0px; padding: 0px;"><strong>Location :</strong> ' . $location . '</li>
                <li style="list-style: none; margin: 0px; padding: 0px;"><strong>Message :</strong>' . $messg . '</li>
              </ul>
              <br>
              <br>
            </td>
          </tr>
          
        </tbody>
      </table>
    </div>';
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = "mail.anyawebsolution.in";
            $mail->Port = 587;
            //$mail->SMTPSecure = "ssl";
            $mail->SMTPAuth = true;
            $mail->Username = "donotreply@anyawebsolution.in";
            $mail->Password = 'g.oE89oTU#gR';
            $mail->setFrom('donotreply@anyawebsolution.in', 'anyawebsolution');
            $mail->addAddress('anyawebsolution@gmail.com', 'anyawebsolution');
            $mail->addBCC('yashsharmadelhi01@gmail.com', 'anyawebsolution');
            $mail->Subject = 'Mail from ' . $name;
            $mail->msgHTML($msg);
            $mail->send();
            header("location:thanks.php");
            die;
        } catch (phpmailerException $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

?>


<!DOCTYPE html>

<html lang="zxx">



<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-48585826-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-48585826-1');
    </script>



    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-48585826-1"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());



        gtag('config', 'UA-48585826-1');
    </script>



    <title>Digital marketing Training Course in Shahdara Delhi-SEO SMO PPC -AWS</title>

    <meta name="description" content="Call: 9990888630, Learn Digital marketing Course from 11 Year old Industry Expert Faculty. Live Training, Google Ads, FB Ads, Youtube Ads, Ecommerce and much more." />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8" />

    <meta name="keywords" content="" />



    <!-- Custom Theme files -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- font-awesome icons -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- //Custom Theme files -->

    <!-- online-fonts -->

    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- //online-fonts -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '696505757461417');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=696505757461417&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>



<body>

    <!-- header -->
    <header>
        <!-- nav  -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#"><img src="images/Logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class=" dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Training</a>
                        <div class="dropdown-menu menutraining" role="menu">
                            <div class="content">
                                <div class="row d-flex justify-content-end">
                                    <div class="col-md-4">
                                        <div class="col-megamenu">
                                            <h6 class="title">Digital Marketing</h6>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-angle-right"></i> <a href="digital-marketing-online-training-shahdara-delhi.php">Digital Marketing Training</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="courses/SEO-Training.html">Search Engine Optimization(SEO) Training</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="courses/SMO-Training.html">Social Media Optimization(SMO) Training</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="courses/smm-training-institute-delhi-shahdara.html">Social Media Marketing(SMM) Training</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="courses/PPC-Training.html">Pay Per Click(PPC) Training</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="courses/ecommerce-amazon-flipkart-training-delhi-shahdara.html">E-Commerce(Amazon) Training</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-lg-0 mt-md-0 mt-sm-5 mt-5">
                                        <div class="col-megamenu">
                                            <h6 class="title">Designing Training</h6>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-angle-right"></i> <a href="Graphic-Designer-Training.html">Graphic Designing Training</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="website-designing-training-certification-delhi-shahdara.html">Website Designing Training</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="courses/adobe-photoshop-designing-training-certification-delhi-shahdara.html">Photoshop Training</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="courses/coreldraw-designing-training-certification-delhi-shahdara.html">Coreldraw Training</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="courses/adobe-illustrator-designing-training-certification-delhi-shahdara.html">Illustrator Training</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="courses/adobe-indesign-training-certification-delhi-shahdara.html">Indesign Training</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="courses/Page-maker-training-certification-delhi-shahdara.html">Pagemaker Training</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="courses/Desk-top-publication-dtp-training.html">DTP(Desktop Top Publications)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-lg-0 mt-md-0 mt-sm-3 mt-3 ml-lg-0 ml-md-0 ml-sm-3 ml-3">
                                        <div class="row mt-lg-0 mt-md-0 mt-sm-0 mt-5">
                                            <div class="col-megamenu">
                                                <h6 class="title">Basic Languages Training</h6>
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-angle-right"></i> <a href="courses/c-cpp-programming-development-training-certification-delhi.html">C and C++ Training</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row mt-lg-3 mt-md-3 mt-sm-0 mt-5">
                                            <div class="col-megamenu">
                                                <h6 class="title">Others</h6>
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-angle-right"></i> <a href="courses/Video-editing-course-in-delhi-shahdara.html">Video Editing Training</a></li>
                                                    <li><i class="fa fa-angle-right"></i> <a href="courses/Tally-erp-9-training-in-delhi-shahdara.html">Tally ERP Training</a></li>
                                                    <li><i class="fa fa-angle-right"></i> <a href="courses/Advance-excel-training-in-delhi-shahdara.html">Advanced Excel Training</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </li>
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu menuservice" role="menu">
                            <div class="content">
                                <div class="row justify-content-end">
                                    <div class="col-md-4">
                                        <div class="col-megamenu">
                                            <h6 class="title">Marketing Services</h6>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-angle-right"></i> <a href="services/search-engine-optimization-seo-services.html">SEO Services</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="services/smo-smm-services.html">SMO and SMM Services</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="services/ppc-google-ads-services.html">Pay Per Click (PPC) Services</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="services/link-building-services.html">Link Building Services</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-lg-0 mt-md-0 mt-sm-5 mt-5">
                                        <div class="col-megamenu">
                                            <h6 class="title">Graphic Designing Services</h6>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-angle-right"></i> <a href="services/graphic-design-services.html">Graphic Design Services</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="services/industrial-catalogue-design-services-delhi.html">Industrial Catalog Design</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="services/brochure-design-services-delhi.html">Industrial Brochure Design</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="services/logo-design-services-delhi.html">Logo Design</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4  mt-lg-0 mt-md-0 mt-sm-5 mt-5">
                                        <div class="col-megamenu">
                                            <h6 class="title">Website Designing Services</h6>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-angle-right"></i> <a href="services/web-design-development-services-company-in-delhi-shahdara.html">Web Design/ Development</a></li>
                                                <li><i class="fa fa-angle-right"></i> <a href="services/facebook-creative-banner-design-services.html">Facebook Creative & Banner</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- //nav  -->
    </header>
    <!-- //header -->



    <!-- banner -->

    <section id="marketing-banner">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="ban-cover">
                        <p class="ban-head text-white animate__animated animate__zoomIn">Digital Marketing Course(Training) in Shahdara </p>
                        <p class="ban-para text-white animate__animated animate__zoomIn">SEO | SMO | PPC | Google Ads | Facebook Ads | Email Marketing | Ecommerce Solution </p>
                        <p class="ban-note text-white animate__animated animate__zoomIn"><i class="fa-solid fa-phone"></i> 9870337825 | <i class="fa-solid fa-globe"></i> www.anyawebsolution.in</p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-cover">
                        <h1>Enquiry Form</h1>
                        <form class="row g-3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="col-md-12">
                                <input type="text" name="name" id="Name" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-12">
                                <input type="tel" name="phone" id="Phone" class="form-control" placeholder="Mobile No.">
                            </div>
                            <div class="col-12">
                                <input type="text" name="location" id="Location" class="form-control" placeholder="Your Location">
                            </div>
                            <div class="col-12">
                                <textarea type="text" name="message" id="Msg" class="form-control" rows="3" cols="5" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" id="Button" name="submitform" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- //banner -->

    <!-- main -->

    <main>





        <!-- marketing details -->

        <section id="marketing-detail">

            <div class="container-fluid">
                <h3 class="text-center"><span class="text-primary">C</span>ourse <span class="text-primary">H</span>ighlights</h3>

                <div class="row mb-4">
                    <div class="col-md-4 col-sm-4">

                        <div class="dm-course">
                            <img src="images/highlights/seo.png" alt="">
                            <a href="courses/SEO-Training.html">
                                <h3>SEO</h3>
                                <p>Search Engine Optimization</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4">

                        <div class="dm-course">
                            <img src="images/highlights/smo.png" alt="">
                            <a href="courses/SMO-Training.html">
                                <h3>SMM/SMO</h3>
                                <p>Social Media Optimization /Marketing</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4">

                        <div class="dm-course">
                            <img src="images/highlights/Google-ads.png" alt="">
                            <a href="courses/PPC-Training.html">
                                <h3>Google Ads</h3>
                                <p>Pay Per Click</p>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4 col-sm-4">

                        <div class="dm-course">
                            <img src="images/highlights/youtube.png" alt="">
                            <a href="courses/PPC-Training.html">
                                <h3>Youtube Ads</h3>
                                <p>Video Promotion & Marketing</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4">

                        <div class="dm-course">
                            <img src="images/highlights/fb-ads.png" alt="">
                            <a href="courses/smm-training-institute-delhi-shahdara.html">
                                <h3>Facebook Marketing</h3>
                                <p>Brand Engagment and Awareness</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4">

                        <div class="dm-course">
                            <img src="images/highlights/lead.png" alt="">
                            <a href="courses/PPC-Training.html">
                                <h3>Lead Generations</h3>
                                <p>Business Promotion and Marketing</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <!-- //marketing details -->

        <!-- course opportunity -->

        <section id="course_op">

            <div class="container-fluid">
                <h3 class="text-center"><span class="text-primary">D</span>igital <span class="text-primary">M</span>arketing <span class="text-primary">C</span>ourse </h3>
                <p class="head-title">Get Ready For The Future Career Opportunity</p>
                <div class="row">
                    <div class="op_content">
                        <p>Digital Marketing is the hot field of study. It is a global phenomenon and one of the fastest-growing industries. It has become an integral part of every business, and its growth is visible across every sector. <br> The time has
                            come to learn Digital Marketing as it will be the key to success in your career or business venture. By attending a Digital Marketing Course, startups and businesses will be able to learn about how digital marketing helps them
                            grow their business. Digital Marketing Courses are also very helpful for those who want to start their own online business and make it successful with digital marketing techniques.
                        </p>
                        <h3 class="sub-head">AWS Training Institute is one of the Best Digital Marketing Training institutes in Delhi!</h3>
                        <p>AWS is the number 1 Digital Marketing Training in Shahadra. Here, you will get expert digital marketing courses while being trained by professionals who have years of experience in the digital marketing industry. <br> AWS has been
                            providing professional digital marketing training since 2012 to students, young professionals, and startup entrepreneurs who wish to make a career in this field of study at affordable prices. At AWS, we teach marketing professionals
                            how to use social media platforms such as Facebook, Youtube, LinkedIn, etc so that they can market their products/services effectively online. <br> AWS offers Digital Marketing Training like Google AdWords, SEO, Facebook Advertising,
                            Graphic Designing, Video editing & Marketing. Here, you can avail all the online marketing courses at a nominal price with quality content delivered through classroom training, online videos, and recorded sessions. <br> If
                            you are looking to upskill yourself in online marketing, look no further. AWS is the right place for you! Get trained by professionals and learn the latest techniques in Digital Marketing. We will help you grow professionally
                            and set your career goals straight.
                        </p>
                    </div>

                </div>
            </div>

        </section>

        <!-- //course opportunity -->

        <!-- who can learn  -->
        <section id="member-learn">

            <div class="container-fluid">
                <h3 class="text-center"><span class="text-primary">W</span>ho <span class="text-primary">c</span>an <span class="text-primary">L</span>earn ?</h3>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="learnbox">
                            <img src="images/learner/businessman.jpg" alt="">
                            <h4>Businessman</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="learnbox">
                            <img src="images/learner/professional.jpg" alt="">
                            <h4>Professional</h4>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="learnbox">
                            <img src="images/learner/student.jpg" alt="">
                            <h4>Student</h4>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="learnbox">
                            <img src="images/learner/enterprenaur.jpg" alt="">
                            <h4>Enterprenaur</h4>
                        </div>

                    </div>
                </div>
            </div>

        </section>
        <!-- who can learn -->

        <!-- why learn -->
        <section id="why_learn">
            <div class="container-fluid">
                <h3 class="text-center"><span class="text-primary">W</span>hy <span class="text-primary">y</span>ou <span class="text-primary">s</span>hould <span class="text-primary">l</span>earn <span class="text-primary">D</span>igital <span class="text-primary">M</span>arketing
                    ?
                </h3>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">
                        <iframe class="side-video" width="650" height="450" src="https://www.youtube.com/embed/6bHRPFS_wyM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <ul>
                            <li><img src="images/check-mark.png" alt=""> &nbsp; India is the second-largest country using smartphones.</li>
                            <li><img src="images/check-mark.png" alt=""> &nbsp; Every year digital Marketing growth ratio is 30%.</li>
                            <li><img src="images/check-mark.png" alt=""> &nbsp; Advertisement spending overall growth 9.4% every year.</li>
                            <li><img src="images/check-mark.png" alt=""> &nbsp; Indian Govt. also promoting Digital India.</li>
                            <li><img src="images/check-mark.png" alt=""> &nbsp; Digital Marketing produce 2.6 lacs jobs in India by 2023.</li>
                            <li><img src="images/check-mark.png" alt=""> &nbsp; Meta (Facebook) Advertising expenses 2990 millions in 2021.</li>
                            <li><img src="images/check-mark.png" alt=""> &nbsp; Google Adsvertising spending 256 billions in 2021.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- why learn -->

        <!-- career -->
        <section id="dm-career-join">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h3 class="text-center"><span class="text-primary">C</span>areer <span class="text-primary">i</span>n <span class="text-primary">D</span>igital <span class="text-primary">M</span>arketing ?</h3>
                        <ul>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Intern/Link Builder.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Social Media Executive and Manager.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; SEO Executive and Analyst.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Digital Marketing Manager.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Google Ads & Facebook Ads Manager.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Content Writer.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; VP Digital Marketing.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h3 class="text-center"><span class="text-primary">W</span>hy <span class="text-primary">t</span>o <span class="text-primary">J</span>oin <span class="text-primary">U</span>s ?</h3>
                        <ul>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Learn from Industry Expert.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; 11 Year Experience in IT Company.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Professional Knowledge Based Course.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Industry Problem Solving for Paid Ads.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Affordable and Fairly Priced.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Practical and Theoretical Concept.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; We are Digital Marketing Service Provider.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- career -->

        <!-- shining star -->
        <section id="shining-star" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0" data-aos-once="true">
            <div class="container-fluid">
                <h3 class="text-center"><span class="text-primary">O</span>ur <span class="text-primary">S</span>hining <span class="text-primary">S</span>tar</h3>
                <div class="row slider">
                    <div class="col">
                        <div class="star-contain">
                            <img src="images/shining-stars/One.jpg" alt="">
                            <div class="starcover">
                                <h3>Mushkan </h3>
                                <p>I joined AWS for sharp my skill in digital marketing. Ram Sir teaching me all type of paid and for my company.</p>
                                <p class="profile">Digital Marketing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="star-contain">
                            <img src="images/shining-stars/Two.jpg" alt="">
                            <div class="starcover">
                                <h3>Kadam Sharma</h3>
                                <p>I learnt digital marketing for my real estate business. We are running google ads and getting daily 40-50 enquiry.</p>
                                <p class="profile">Digital Marketing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="star-contain">
                            <img src="images/shining-stars/Three.jpg" alt="">
                            <div class="starcover">
                                <h3>Abhishek Bhargava</h3>
                                <p>Mr. Ram Sharma Sir is a very skilled in the Digital Marketing. He has great industry knowledge and experience.</p>
                                <p class="profile">Digital Marketing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="star-contain">
                            <img src="images/shining-stars/Four.jpg" alt="">
                            <div class="starcover">
                                <h3>Kaushki</h3>
                                <p>I learn digital marketing from aws. Ram sir reach me SEO and PPC. Now I am working job in noida as SEO Analyst.</p>
                                <p class="profile">Digital Marketing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="star-contain">
                            <img src="images/shining-stars/Five.jpg" alt="">
                            <div class="starcover">
                                <h3>Manish Kumar</h3>
                                <p>In AWS Institute, I learned lot of things about digital marketing practically and All my doubts are cleared.</p>
                                <p class="profile">Digital Marketing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="star-contain">
                            <img src="images/shining-stars/Six.jpeg" alt="">
                            <div class="starcover">
                                <h3>Dev Kumar</h3>
                                <p>I learn from other institute and paid very high fee but I did'nt satisfy. Ram Sir taught me in very professional manner.</p>
                                <p class="profile">Digital Marketing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //shining star -->

        <!-- FAQ -->
        <div id="faq">
            <h1 class="text-center"><span class="text-primary">F</span>requently <span class="text-primary">A</span>sked <span class="text-primary">Q</span>uestions</h1>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <b>Q1.</b> I have no IT background. Can I learn digital marketing?
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="common collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <b>Ans.</b> Yes, you can learn digital marketing. There are many professionals who have had nothing to do with technology and yet work as digital marketers in many industries. You just need to have basic knowledge about computers and internet to learn Digital Marketing.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <b>Q2.</b> How much money can I make with digital marketing?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="common collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <b>Ans.</b> Much more than you expect. The average salary for beginners is approx Rs 3.5 to 4.5 lakhs per year. However, it entirely depends on which area of digital marketing you are in.
                        You can also become a freelancer and earn more than 6-7 lakhs per month. After gaining enough experience, you can also start your own agency and earn several millions in India.

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <b>Q3.</b> How can I use my digital marketing skills to make money?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="common collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <b>Ans.</b> There are several ways you can use your digital marketing skills to make good money. Some of the most popular methods to make money with digital marketing are: <br>
                        1. You can make money as a professional content writer. <br>
                        2. You can be an SEO expert and offer SEO services to your clients. <br>
                        3. You can earn good money with affiliate marketing. <br>
                        4. You can build your own online business and make a lot of money. <br>
                        5. You can also start your own digital marketing company. <br>
                        6. There are many more ways to earn good money.

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <b>Q4.</b> I just finished my course on digital marketing. As a newbie, how should I get started?
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="common collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <b>Ans.</b> You should apply for internships at good companies to gain practical knowledge of how digital marketers work. You should also create a professional portfolio that highlights your skills and qualifications. Finally, you should make professional contacts on various social media channels so that you can get opportunities from the wide network.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <b>Q5.</b> Where can I take a digital marketing course in Delhi?
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="common collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <b>Ans.</b> There are many good institutes in Delhi that offer professional training in digital marketing. To choose the right one for you, you can seek feedback from students who have successfully trained at a particular institute. Also, you should choose an institute that offers training on real projects and has a good track record of placing students in various good companies. <br>
                        One such institute is AWS, which is located in Shahdra. The institute covers the entire topics of digital marketing, teaches advanced modules and offers insights into the latest technologies used in digital marketing.
                    </div>
                </div>
            </div>
        </div>
        <!-- //FAQ -->

    </main>

    <!-- //main -->

    <!-- registration link -->
    <button id="register" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Send Enquiry</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enquire Us</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" id="enquiry_form">
                        <div class="form-row">
                            <div class="col-md-12 mb-4">
                                <input type="text" class="control" name="name" id="Name" placeholder="Name" required>
                            </div>
                            <div class="col-md-12 mb-4">
                                <input type="email" class="control" name="email" id="Email" placeholder="Email Id" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-4">
                                <input type="text" class="control" name="phone" id="Phone" placeholder="Mobile" required>
                            </div>
                            <div class="col-md-12 mb-4">
                                <input type="text" class="control" name="location" id="Location" placeholder="Your Location" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-4">
                                <textarea style="resize: none;" class="control" name="msg" id="Msg" placeholder="Message" cols="30" rows="4" required></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary" id="submit_bu" name="submit" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //registration link -->

    <!-- footer -->
    <footer>
        <div class="footer bg-dark">
            <div class="container-fluid">
                <div class="row justify-content-around">
                    <div class="col-md-3 col-sm-6 col-12 text-white">
                        <h4>GET IN TOUCH</h4>
                        <address><i class="text-primary fa-solid fa-location-dot"></i>
                            AWS-Anya Web Solution:<br>
                            2nd Floor, Bhola Complex A-1/1,<br>
                            West Jyoti Nagar, Durga Puri Chowk,<br>
                            Delhi 110094
                        </address>
                        <p class="info"><i class="text-primary fa-solid fa-phone"></i>+91-<span class="ban-note text-white animate__animated animate__zoomIn">9870337825</span></p>
                        <p class="info"><i class="text-primary fa-solid fa-envelope-open"></i>
                            info@anyawebsolution.in<br>
                            www.anyawebsolution.in
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 mt-sm-0 mt-lg-0 mt-md-0 mt-5 text-white">
                        <h4>USEFUL LINKS</h4>
                        <ul>
                            <li><i class="text-primary fa-solid fa-chevron-right"></i> <a href="index.php">Home</a></li>
                            <li><i class="text-primary fa-solid fa-chevron-right"></i> <a href="about.php">About Us</a></li>
                            <li><i class="text-primary fa-solid fa-chevron-right"></i> <a href="courses/SEO-Training.html">Courses</a></li>
                            <li><i class="text-primary fa-solid fa-chevron-right"></i> <a href="services/search-engine-optimization-seo-services.html">Services</a></li>
                            <li><i class="text-primary fa-solid fa-chevron-right"></i> <a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 mt-sm-5 mt-lg-0 mt-md-0 mt-5 text-white">
                        <h4>OUR SERVICES</h4>
                        <ul>
                            <li><i class="text-primary fa-solid fa-chevron-right"></i> <a href="services/search-engine-optimization-seo-services.html">SEO</a></li>
                            <li><i class="text-primary fa-solid fa-chevron-right"></i> <a href="services/link-building-services.html">Link Building</a></li>
                            <li><i class="text-primary fa-solid fa-chevron-right"></i> <a href="services/smo-smm-services.html">SMO</a></li>
                            <li><i class="text-primary fa-solid fa-chevron-right"></i> <a href="services/graphic-design-services.html">Graphic Design</a></li>
                            <li><i class="text-primary fa-solid fa-chevron-right"></i> <a href="services/web-design-development-services-company-in-delhi-shahdara.html">Web Design</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 mt-sm-5 mt-lg-0 mt-md-0 mt-5 text-white">
                        <h4>OTHERS</h4>
                        <address><i class="text-primary fa-solid fa-location-dot"></i>
                            Anya Classes :
                            Infront of Degree College,<br>
                            On SBI Bank, 1st Floor,<br>
                            G.T. Road, Aligarh - 202001
                        </address>
                        <p class="info"><i class="text-primary fa-solid fa-phone"></i> +91-9675220073</p>
                        <p class="info"><i class="text-primary fa-solid fa-envelope-open"></i>
                            info@anyawebsolution.in<br>
                            www.anyawebsolution.in
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="Links text-white d-flex justify-content-lg-between justify-content-md-between justify-content-sm-between flex-lg-row flex-md-row flex-sm-row flex-column">
                        <p>&copy; Copyright . All Rights Reserved &trade;</p>
                        <div class="icons new">
                            <a href="https://www.facebook.com/anyawebsolution/" target="_blank"><i id="check" class="fa-brands fa-facebook-f fa-1x "></i></a>
                            <a href="https://www.instagram.com/anyawebsolution/" target="_blank"><i id="check" class="fa-brands fa-instagram fa-1x"></i></a>
                            <a href="https://www.youtube.com/channel/UCxIZR0VT7e5AQbGIXVlLUrA" target="_blank"><i id="check" class="fa-brands fa-youtube fa-1x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->




    <!-- Custom Theme files -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="scroll.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/query.js"></script>

</body>
<script>
    $(document).ready(function(e) {

        $(document).on('submit', '#enquiry_form', function(e) {
            e.preventDefault();
            var coldata = new FormData(this);
            $.ajax({
                url: "ajax/enquiry_form.php",
                data: coldata,
                type: "POST",
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#submit_bu').text('wait...');

                },
                success: function(e) {
                    console.log(e.status);
                    window.location.href = "https://www.anyawebsolution.in/thanks";

                },
                error: function(e) {
                    console.error(e);
                }

            });

        });
    });
</script>


</html>