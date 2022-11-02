<?php

require_once('config.php');

$error = array(
    'name' => '',
    'email' => '',
    'phone' => '',
    'message' => '',
    'error' => ''
);

if (isset($_POST['submit'])) {

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    if (empty($name)) {
        $error['name'] = 'Please fill your name.';
    } else if (empty($email)) {
        $error['email'] = 'Please fill your email.';
    } else if (!$validEmail) {
        $error['email'] = 'Please fill a valid email.';
    } else if (empty($phone)) {
        $error['phone'] = 'Please fill your phone no.';
    } else {
        $created_at = date('Y-m-d H:i:s');
        $sql = "INSERT INTO w2i_enquiry (name, email, phone, message, created_at) VALUES ('{$name}', '{$email}', '{$phone}', '{$message}', '{$created_at}')";
        $conn->query($sql);
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Flightzon - Cheap Flights World Wide</title>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10971547307"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10971547307');
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <?php include("includes/top-css.php"); ?>
</head>

<body>
    <?php include("includes/header.php"); ?>

    <div class="home-carousel p-0">
        <div class="swiper mySwiper-01">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/bn1.jpeg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/bn2.jpeg" alt="">
                </div>


            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="form_area col-md-4">
            <h1>Get in touch</h1>
            <form id="flight_search_form" class="row gap-20" method="POST" name="Form" action="mail.php" onsubmit="return validateForm()">
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Name *" id="name" name="name" value="<?= @$name ?>">
                    <small class="text-danger"><?= $error['name'] ?></small>
                </div>
                <div class="col-md-12">
                    <input type="email" class="form-control" placeholder="Email *" name="email" value="<?= @$email ?>">
                    <small class="text-danger"><?= $error['email'] ?></small>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Phone Number *" name="phone" maxlength="10" minlength="10" value="<?= @$phone ?>">
                    <small class="text-danger"><?= $error['phone'] ?></small>
                </div>
                <div class="col-md-12">
                    <textarea name="message" rows="2" placeholder="Message" class="form-control"><?= @$message ?></textarea>
                    <small class="text-danger"><?= $error['message'] ?></small>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="form-control" name="submit">Submit</button>
                    <small class="text-danger"><?= $error['error'] ?></small>
                </div>


            </form>
        </div>

    </div>

    <section class="about">
        <div class="container">
            <div class="title text-center">
                <h2 class="mb-10"> About Us</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="choose-us-item">
                        <img src="images/about-us.png" alt="">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="choose-us-item">
                        <p>At TheFlightzon, we are passionate about travel. We believe that journeys can be life enriching and are happy to assist you in making your travel arrangements. From exotic beach destinations to places brimming with a rich cultural heritage, we help our customers find the perfect trip in absolutely any part of the world. <br>
                            Traveling within a specific budget is not only desired but also necessary for you to get the most out of your vacation. Having a deep understanding of all the factors of traveling, we are committed towards our objective of making your travel desires come true. In our travel portal, you can search a wide array of flight, hotel and rental car deals at prices that fit your budget. <br>
                            We roll out competitive prices on flight tickets, hotel rooms and rental cars from some of the most trusted global brands.<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="guidelines section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h2 class="mb-10"> Guidelines for Travel due to COVID-19</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-sm-6 col-12 my-2">
                    <div class="single-destination relative">
                        <div class="thumb relative">
                            <img class="img-fluid" src="images/guidelines/masks.jpg" alt="montego img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 my-2">
                    <div class="single-destination relative">
                        <div class="thumb relative">
                            <img class="img-fluid" src="images/guidelines/social-distancing.jpg" alt="Manila img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 my-2">
                    <div class="single-destination relative">
                        <div class="thumb relative">
                            <img class="img-fluid" src="images/guidelines/doctor.jpg" alt="orlando img">
                        </div>
                    </div>
                </div>
            </div>
            <a href=""><button><i class="fa-solid fa-phone"></i> Toll Free 800-401-0824</button></a>
        </div>
    </section>

    <section class="flight-offer section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h2 class="mb-10"> Flight Offers</h2>
                    </div>
                </div>
            </div>

            <div class="swiper flight">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Atlanta</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/atlanta.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Atlantic city</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/atlantic-city.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Austin</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/austin.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Boston</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/boston.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Cali Colombia</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/cali-colombia.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Cancun, Mexico</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/cancun-mexico.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Chicago</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/chicago.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Cleveland</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/cleveland.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Panorama of Denver</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/denver.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Detroit</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/detroit.jpg" alt="montego img">
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>EL Salvador</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/el-salvador.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Houston</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/houston.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Kingston Jamaica</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/kingston-jamaica.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Lauderable Florida</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/lauderdale-florida.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Los Angles</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/los-angles.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Miami Florida</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/miami-florida.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>New York</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/newyork.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Orlando Florida</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/orlando-florida.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Philadelphia</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/philadelphia.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Punta Cana</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/punta-cana.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>San Francisco</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/san-francisco.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>San Juan</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/san-juan.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Sandiego</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/sandiego.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Santiago</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/santiago.jpg" alt="montego img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>St Martin</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/st-martin.jpg" alt="montego img">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img-slide">
                            <div class="overlay overlay-bg">
                                <h1>Washington</h1>
                            </div>
                            <img class="img-fluid" src="images/flights-offer/washington.jpg" alt="montego img">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
    </section>

    <section class="fourpic-sec">
        <div class="container">
            <div class="title text-center">
                <h2 class="mb-2">Our Flights</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-4 col-sm-12 col-12">
                    <div class="choose-us-item calling-img">
                        <div class="single-destination relative">
                            <div class="thumb relative">
                                <img id="caller" class="img-fluid" src="images/caller/caller.png" alt="orlando img">
                            </div>
                        </div>

                        <a href=""><button><i class="fa-solid fa-phone"></i> 1(800)401-0824</button></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-4 col-sm-12 col-12">
                    <div class="choose-us-item ">
                        <h1 class="flight-head">Flights Under $99</h1>
                        <table>
                            <tr style="color: #fff;">
                                <th>FROM</th>
                                <th>TO</th>
                                <th>DEAL</th>
                            </tr>
                            <tr>
                                <td>Las Vegas</td>
                                <td>Denver</td>
                                <td>USD 69</td>
                            </tr>
                            <tr>
                                <td>Sandiago</td>
                                <td>Las Vegos</td>
                                <td>USD 69</td>
                            </tr>
                            <tr>
                                <td>Newark</td>
                                <td>Philadelphia</td>
                                <td>USD 65</td>
                            </tr>
                            <tr>
                                <td>New York</td>
                                <td>Atlanta</td>
                                <td>USD 55</td>
                            </tr>
                            <tr>
                                <td>Chicago</td>
                                <td>Bostan</td>
                                <td>USD 75</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 col-sm-12 col-12">
                    <div class="choose-us-item ">
                        <h1 class="flight-head">Flights Under $299</h1>
                        <table>
                            <tr style="color: #fff;">
                                <th>FROM</th>
                                <th>TO</th>
                                <th>DEAL</th>
                            </tr>
                            <tr>
                                <td>New York</td>
                                <td>San Franchisco</td>
                                <td>USD 290</td>
                            </tr>
                            <tr>
                                <td>Atlanta</td>
                                <td>Seattle</td>
                                <td>USD 265</td>
                            </tr>
                            <tr>
                                <td>Honolulu</td>
                                <td>Washington</td>
                                <td>USD 299</td>
                            </tr>
                            <tr>
                                <td>Boston</td>
                                <td>Anchorage</td>
                                <td>USD 295</td>
                            </tr>
                            <tr>
                                <td>Los Angeles</td>
                                <td>Chicago</td>
                                <td>USD 296</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <a href="tel:+18004010824" class="call-btn">To Book Call On +18004010824</a>
    <a href="tel:+18004010824" class="call-btn-icon"><i class="fa-solid fa-phone"></i></a>

    <?php include("includes/footer.php"); ?>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper-01", {
            slidesPerView: 1,
            spaceBetween: 30,
            speed: 500,
            effect: 'fade',
            loop: true,
            autoplay: {
                delay: 5000
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var swiper = new Swiper(".flight", {
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 5000
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function(e) {
            $('form').on('submit', function(e) {
                let name = $('[name="name"]', this).val();
                let email = $('[name="email"]', this).val();
                let phone = $('[name="phone"]', this).val();
                let message = $('[name="message"]', this).val();
                if (name == '') {
                    alert('Name is Empty.');
                } else if (email == '') {
                    alert('Email is Empty.');
                } else if (phone == '') {
                    alert('Phone no is Empty.');
                } else if((phone.charAt(0) == '0') || (phone.charAt(0) == '1') || (phone.charAt(0) == '2') || (phone.charAt(0) == '3')){
                    alert("Phone number must not start with 0");
                } else {
                    return true;
                }
                return false;

            });
            $('[name="phone"]').on('keypress', function(evt) {
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            });
        });
    </script>
    <script src="js/js-query.js"></script>
</body>

</html>