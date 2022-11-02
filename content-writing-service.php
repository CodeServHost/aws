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




    <title>Graphic Designer Certification Course in Shahdara East Delhi| Learn from Practitioner -AWS</title>



    <meta name="keywords" content="Graphic Design Course in Shahdara, Graphic Design Course, Graphic Design Institute in Shahdara, Graphic Design course near me, graphic design courses after 12th, Graphic Design Course in Delhi " />



    <meta name="description" content=": Learn Graphic Design from Practitioner, Design Catalogue, Brochure, Social Media Creative, Image Touching, Offset,  Screen Work. Just Call us 9990888630" />



    <meta name="robots" content="index, follow" />



    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8" />




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

    <section id="video-editing-banner">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="ban-cover">
                        <p class="ban-head text-white animate__animated animate__zoomIn">Video Editing Course(Training) in Shahdara </p>
                        <p class="ban-para text-white animate__animated animate__zoomIn">Photoshop | Illustrator | Canva | Filmora | AfterEffect | Premier</p>
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



        <!-- why learn -->
        <section id="why_learn_graphic">
            <div class="container-fluid">
                <h3 class="text-center"><span class="text-primary">W</span>hat <span class="text-primary">i</span>s <span class="text-primary">V</span>ideo <span class="text-primary">E</span>diting?</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">
                        <img src="images/video-editing/video-1.webp" alt="" class="side-img">
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <p>
                            Expert video editors with in-depth knowledge of multimedia editing-specific solutions are the most sought-after professionals. The AWS Audio Video Editing course is specifically designed to impart expertise in this niche video editing domain.
                        </p>
                        <p>
                            The AWS training module is profoundly designed to transform you into an expert in video editing and allied applications, mastering key skills such as Adobe Premier, After Effect, Illustrator, Canva, Filmora, and more. We have derived this competency from hands-on experience with video editing software, design implementations, and service orchestration.
                        </p>
                        <a href="" target="_blank"><button>Download Course PDF</button></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- why learn -->

        <!-- marketing details -->

        <section id="graphic-detail">

            <div class="container-fluid">
                <h3 class="text-center"><span class="text-primary">C</span>ourse <span class="text-primary">H</span>ighlights</h3>

                <div class="row mb-4">
                    <div class="col-md-4 col-sm-4">

                        <div class="gd-course">
                            <img src="images/graphic-design/photoshop.jpeg" alt="">
                            <a href="courses/adobe-photoshop-designing-training-certification-delhi-shahdara.html">
                                <h3>Photoshop</h3>
                                <p>Raster Graphic Editor</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4">

                        <div class="gd-course">
                            <img src="images/graphic-design/illustrator.jpeg" alt="">
                            <a href="courses/adobe-illustrator-designing-training-certification-delhi-shahdara.html">
                                <h3>Illustrator</h3>
                                <p>Vector Graphic Editor</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4">

                        <div class="gd-course">
                            <img src="images/graphic-design/canva.jpeg" alt="">
                            <a href="courses/Page-maker-training-certification-delhi-shahdara.html">
                                <h3>Canva Pro</h3>
                                <p>Professional Design Creation</p>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="row mt-4">

                    <div class="col-md-4 col-sm-4">

                        <div class="gd-course">
                            <img src="images/graphic-design/filmora.jpeg" alt="">
                            <a href="courses/Advance-excel-training-in-delhi-shahdara.html">
                                <h3>Filmora</h3>
                                <p>Transition and Motion Creation</p>
                            </a>
                        </div>

                    </div>

                    <div class="col-md-4 col-sm-4">

                        <div class="gd-course">
                            <img src="images/video-editing/aftereffect.jpeg" alt="">
                            <a href="courses/coreldraw-designing-training-certification-delhi-shahdara.html">
                                <h3>After Effect</h3>
                                <p>Motion Graphics Effect</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4">

                        <div class="gd-course">
                            <img src="images/video-editing/premier.jpeg" alt="">
                            <a href="courses/coreldraw-designing-training-certification-delhi-shahdara.html">
                                <h3>Premier</h3>
                                <p>Video Editing Creation</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <!-- //marketing details -->

        <!-- who learn -->
        <section id="who_learn_graphic">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">
                        <img src="images/video-editing/video-2.webp" alt="" class="side-img">
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <h3>Video Editing for Youtube</h3>
                        <p>
                            In addition, the course exposes you to hands-on practice in the form of real-world industry projects, assignments, and quizzes that allow you to learn and work the way professionals do, but at your own pace. You'll spend progressive time on the components to deepen & solidify the concepts and reinforce your creativity through the practical technical challenges related to video editing. </p>
                        <p>
                            In this course, you will learn Video editing for youtube and Chanel creation youtube. You can manage a Youtube channel and Upload Videos after editing cut-pastes with the use of mixing Audio Video. </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 col-sm-12 col-12">
                        <h3>Video Editing for Digital Marketing</h3>
                        <p>
                            That's why we designed AWS' Online Video Editing Certification Training (VECT), the pioneer certification course in the current digital marketplace. The widely recognized, placement-supported, and industry-standard, AWS certification credentials your resume with breakthrough knowledge, skills, and expertise in multimedia-based applications. So, if you are striving for the best video editing course in Shahdara, AWS is undoubtedly the finest for online and offline video editing courses with VECT certification. </p>
                        <p>
                            You will learn Video editing for Digital Marketing and Channel creation on youtube. You can manage a Youtube channel and Social Media Creative and Videos and Upload Videos after editing cut-pastes with the use of mixing Audio Video. </p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <img src="images/video-editing/video-3.webp" alt="" class="side-img">
                    </div>
                </div>
            </div>
        </section>
        <!-- who learn -->

        <!-- course opportunity -->

        <!-- <section id="graphic_course_op">

            <div class="container-fluid">
                <h3 class="text-center"><span class="text-primary">W</span>hy <span class="text-primary">L</span>earn?</h3>
                <p class="head-title">Do you want to make your career in graphic designing? </p>
                <div class="row">
                    <div class="op_content">
                        <p>
                            AWS is the best Graphic designing institute in Delhi. We provide the professional Graphic design training course in Shahdara at affordable prices. Our Graphic design courses are designed to help you learn the skills and techniques required for becoming a professional graphic designer in a short span of time.
                        </p>
                        h3 class="sub-head">AWS Training Institute is one of the Best Digital Marketing Training institutes in Delhi!</h3>
                        <p>
                            We provide a wide range of graphic design training programs in Shahdara, like basic computer graphics, social media creative, logo designing, banners, pamphlets, visiting cards, marriage card magazine cover pages, banners, brochures, catalogs, Facebook posts, web banners and multimedia designing at affordable costs.
                        </p>
                        <p>
                            AWS design course includes practical sessions where students get hands-on experience while working on real projects. At AWS, one can learn graphic designs in a professional environment and get the best Graphic designing training from graphic design practitioners and experienced instructors who will train you while making you work on different live graphic designing projects involving various types of design software, tools, and techniques used for creating graphics, logos, and other artworks. It makes AWS the best Graphic designing institute near you.
                        </p>
                        <p>
                            If you want to be the best in graphic designing skills and get on the path to becoming a professional graphic designer, AWS will surely help you get professional graphic design training.
                        </p>
                    </div>

                </div>
            </div>

        </section> -->

        <!-- //course opportunity -->



        <!-- career -->
        <!--  <section id="graphic-syllabus-join">
            <div class="container-fluid">
                <h3 class="text-center"><span class="text-primary">G</span>raphic <span class="text-primary">D</span>esign <span class="text-primary">S</span>yllabus</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <ul>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Digital Imaging.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Layout for Design Publishing.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Branding Exercises.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Social Media Image Creation.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Designing & Packaging.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Artwork for Advertising.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Symbols & Icon Design.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; How to trace the design.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Magazine Design.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Brochure Design.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Magazine Cover page design.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Holding Design.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Web Banner Designs.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Facebook Posts Design.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Project and Profile.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <ul>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Logo Design.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Identity Design.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Magazines & Newspaper Ads.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Publication Designs.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Templates, Posters.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Outdoor Designs.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Tag Designs.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Package Designs.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Using Core Concepts.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- career -->

        <!-- career -->
        <!--    <section id="graphic-career-join">
            <div class="container-fluid">
                <h3 class="text-center"><span class="text-primary">Y</span>ou <span class="text-primary">c</span>an <span class="text-primary">m</span>ake <span class="text-primary">C</span>arrer <span class="text-primary">i</span>n <span class="text-primary">R</span>espective <span class="text-primary">T</span>erms</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <ul>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Website Design & Development.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Magazines Design.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Books Work.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Advertising Company.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Posters Design.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Banners Design.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Publishing Industry.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Retail Industry.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <ul>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Software Industry.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Entertainment Industry.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Newspaper Agencies.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Video Game Industry.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Visual Online design.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Animation Industry.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Graphic Design for Media.</li>
                            <li><img src="images/right-arrow.png" alt=""> &nbsp; Television and Broadcast.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- career -->


        <!-- shining star -->
        <!-- <section id="shining-star" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0" data-aos-once="true">
            <div class="container-fluid">
                <h3 class="text-center"><span class="text-primary">O</span>ur <span class="text-primary">S</span>hining <span class="text-primary">S</span>tar</h3>
                <div class="row slider">
                    <div class="col">
                        <div class="star-contain">
                            <img src="images/graphic-shining-stars/ankit-k.jpeg" alt="">
                            <div class="starcover">
                                <h3>Ankit Kumar</h3>
                                <p>AWS-Best graphic designing faculty is very cooperative and working environment is very awesome.</p>
                                <p class="profile">Graphic Designing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="star-contain">
                            <img src="images/graphic-shining-stars/dipty-m.jpeg" alt="">
                            <div class="starcover">
                                <h3>Dipty Mathur</h3>
                                <p>I have done graphic designing course from AWS Institute. I would like to suggest try once to explore more.</p>
                                <p class="profile">Graphic Designing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="star-contain">
                            <img src="images/graphic-shining-stars/lokesh.jpeg" alt="">
                            <div class="starcover">
                                <h3>Lokesh</h3>
                                <p>I am pursuing graphic design here and It is one of the best platform to build your career in graphic design.</p>
                                <p class="profile">Graphic Designing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="star-contain">
                            <img src="images/graphic-shining-stars/saurabh.jpeg" alt="">
                            <div class="starcover">
                                <h3>Saurabh</h3>
                                <p>This is Shahdara's best institute for graphic designing. I joined this institute and now working in a reputed company.</p>
                                <p class="profile">Graphic Designing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="star-contain">
                            <img src="images/graphic-shining-stars/sachin.jpeg" alt="">
                            <div class="starcover">
                                <h3>Sachin</h3>
                                <p>AWS is the best institute is really best for graphic design. It is good to pursue Graphic Design Course in this institute.</p>
                                <p class="profile">Graphic Designing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="star-contain">
                            <img src="images/graphic-shining-stars/abhishek.jpeg" alt="">
                            <div class="starcover">
                                <h3>Abhishek</h3>
                                <p>The best institute in Delhi for graphic design. Teacher are very professional. They are so helpful in problem solving.</p>
                                <p class="profile">Graphic Designing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  -->
        <!-- //shining star -->

        <!-- FAQ -->
        <div id="faq">
            <h1 class="text-center"><span class="text-primary">F</span>requently <span class="text-primary">A</span>sked <span class="text-primary">Q</span>uestions</h1>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <b>Q1.</b> Will my original videos and photos be returned?
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="common collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <b>Ans.</b> Yes, they will. World Video Films will take extreme care of your video and/or photos as we transfer it to our video editing system. We will mail you the finished work along with your originals.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <b>Q2.</b> How long does the video editing process take?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="common collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <b>Ans.</b> We edit your videos in the order of your purchase. The quicker you get us your order and videos, the faster we can send you a fantastic finished product. Busier times generally include Mother’s Day, Father’s Day, Christmas and New Year’s Day, so please get your orders in early. <br>
                        If it’s a “need it now” video for a memorial service, a funeral or any last minute project, you need to let us know right away. For a small fee, we can put a rush order on your video and we will get it to you when you need it with the same quality you expect from World Video Films video editing services.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <b>Q3.</b> Will multiple people see and work on my video?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="common collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <b>Ans.</b> Although World Video Films video editing services has a team of editors, only one person will edit your video. This way you can be certain that there is a consistency and a flow to your videos from beginning to end.
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