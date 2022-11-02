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


    <title>AWS - Blogs</title>

    <meta name="description" content="Call: 9990888630, AWS(Anya Web Solution) Blogs." />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8" />

    <meta name="keywords" content="" />



    <!-- Custom Theme files -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/style.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- font-awesome icons -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- //Custom Theme files -->

    <!-- online-fonts -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- //online-fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>



<body>
    
    <?php get_header(); ?>

    <!-- banner -->

    <section id="blogs-banner">

        <div class="container-fluid">
            <h1>AWS <span>Blogs</span></h1>
        </div>

    </section>

    <!-- //banner -->

    <!-- main -->

    <main>
        <section id="blogs-section">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-md-8">
                        <div class="blogs-wrapper">
                        
                            <?php
                            
                            $searchdata='';
                            if($_GET['title']!=''){
                                $searchdata=$_GET['title'];
                            }
                            
                            $wpsear = array(
                                'post_type'=> 'post',
                                'post_status'=> 'publish',
                                's'=>$searchdata,
                            );
                                
                            $squery = new Wp_Query($wpsear);
                            while($squery->have_posts()){
                                $squery->the_post();
                                $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
                            ?>
                            <div class="blog-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo $imagepath[0]; ?>" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h1><?php echo the_title(); ?></h1>
                                        <p><?php echo the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <?php  }  ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar">
                            
                            <form class="row g-3">
                                <div class="col-12">
                                    <label for="search" class="form-label">Search</label>
                                    <input type="text" placeholder="Search by Blog Name" name="title" value="<?php echo $_GET['title']; ?>" class="form-control" id="search">
                                    <input type="submit" name="btn" class="mt-2 mb-3 btn btn-primary">
                                </div>
                            </form>
                            <div class="recent-post p-3" >
                                <h1>Recent Posts</h1>
                                <div class="rposts">
                                    <?php
                                        $wpsear2 = array(
                                            'post_type'=> 'post',
                                            'post_status'=> 'publish',
                                        );
                                        $squery2 = new Wp_Query($wpsear2);
                                        while($squery2->have_posts()){
                                            $squery2->the_post();
                                    ?>
                                        <div class="blog-item">
                                                    <a href="<?php the_permalink(); ?>"><p class="my-3"><?php echo the_title(); ?></p></a>
                                        </div>
                                    <?php  }  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </main>

    <!-- //main -->


    <?php get_footer(); ?>