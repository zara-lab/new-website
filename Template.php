<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $title ?></title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="css/coda-slider.css" type="text/css" charset="utf-8" />

        <script src="js/jquery-1.2.6.js" type="text/javascript"></script>
        <script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
        <script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

    </head>
    <body>

        <div id="slider">
            <div id="tooplate_wrapper">

                <div id="tooplate_header">
                    <div id="site_title"><h1><a href="#">ZaraLab Hackerspace</a></h1></div>

                    <div id="menu">
                        <ul class="navigation">
                            <li><a href="#home" class="selected">За Нас</a></li>
                            <li><a href="#about">Включи се</a></li>
                            <li><a href="#services">Събития</a></li>
                            <li><a href="#gallery">Глерия</a></li>
                            <li><a href="#contact">Контакти</a></li>
                        </ul>    	
                    </div> <!-- end of tooplate_menu -->

                    <div class="cleaner"></div>
                </div> 

                <div id="content">
                    <div class="scroll">
                        <div class="scrollContainer">

                            <div class="panel" id="home">
                                <div class="col_380 float_l">
                                    <?php echo $content; ?>
                                </div>

                                <div class="col_270 float_r">


                                </div>
                            </div>
                            <!-- end of home -->

                            <div class="panel" id="join_us">
                                <div class="col_380 float_l">
                                    <?php echo $join_us; ?>
                                </div>

                            </div>
                            <!-- end of aboutus -->

                            <div class="panel" id="events">
                                <div class="col_380 float_l " >
                                    <?php echo $events ?>
                                </div>
                            </div>
                            <!-- end of service -->

                            <div class="panel" id="gallery">
                                <h1>Галерия</h1>
                                <div id="gallery_container">
                                    <div class="gallery_box"> <a href="#"><img src="images/gallery/image_01.jpg" alt="Image 01" /></a> </div>
                                    <div class="gallery_box"> <a href="#"><img src="images/gallery/image_02.jpg" alt="Image 02" /></a> </div>
                                    <div class="gallery_box"> <a href="#"><img src="images/gallery/image_03.jpg" alt="Image 03" /></a> </div>
                                    <div class="gallery_box gb_rm"> <a href="#"><img src="images/gallery/image_04.jpg" alt="Image 04" /></a> </div>
                                    <div class="gallery_box"> <a href="#"><img src="images/gallery/image_05.jpg" alt="Image 05" /></a> </div>
                                    <div class="gallery_box"> <a href="#"><img src="images/gallery/image_06.jpg" alt="Image 06" /></a> </div>
                                    <div class="gallery_box"> <a href="#"><img src="images/gallery/image_07.jpg" alt="Image 07" /></a> </div>
                                    <div class="gallery_box gb_rm"> <a href="#"><img src="images/gallery/image_08.jpg" alt="Image 08" /></a> </div>
                                    <div class="gallery_box"> <a href="#"><img src="images/gallery/image_09.jpg" alt="Image 09" /></a> </div>
                                    <div class="gallery_box"> <a href="#"><img src="images/gallery/image_10.jpg" alt="Image 10" /></a> </div>
                                    <div class="gallery_box"> <a href="#"><img src="images/gallery/image_11.jpg" alt="Image 11" /></a> </div>
                                    <div class="gallery_box gb_rm"> <a href="#"><img src="images/gallery/image_12.jpg" alt="Image 12" /></a> </div>
                                    <div class="cleaner"></div>
                                </div>
                            </div>
                            <!-- end of gallery -->

                            <div class="panel" id="contact">
                                <h1>За връзка с нас</h1>

                                <div class="cleaner_h10"></div>
                                <div class="col_320 float_l">
                                    <div id="contact_form">
                                        <form method="POST"  action="mailer/contact.php">

                                            <label for="name">Name:</label><input type="text" name="name" />
                                            <div class="cleaner_h10"></div>

                                            <label for="email">Email:</label><input type="text" name="email"/>
                                            <div class="cleaner_h10"></div>

                                            <label for="message">Message:</label><textarea name="message"  ></textarea>
                                            <div class="cleaner_h10"></div>

                                            <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Send"/>
                                            <input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset"/>

                                        </form>

                                    </div>
                                </div>

                                <div class="col_270 float_r">

                                    <p>Неправителствена организация "Зара Лаб" бул. "Княз Александър Батенберг"28</p>
                                    <h3>Ако желаеш да помогнеш за развитието на ZaraLab, пишете ни на:</h3>

                                    <span>Email:</span>
                                    <a href="mailto:info@zaralab.org">info@zaralab.org</a>


                                </div>
                            </div>
                            <!-- end of contact -->

                        </div>
                    </div>
                    <!-- end of scroll -->
                </div>

                <div id="footer">

                    <div id="social_box">
                        <a href="#"><img src="images/3dts.png" alt="#" /></a>
                        <a href="#"><img src="images/bulsatcom.png" alt="flickr" /></a>
                        <a href="#"><img src="images/corllete.png" alt="myspace" /></a>
                        <a href="#"><img src="images/edynamix.png" alt="twitter" /></a>
                        <a href="#"><img src="images/siteground.png" alt="youtube" /></a>
                    </div>



                    <div class="cleaner"></div>
                </div>
            </div> 
        </div>

    </body>
</html>