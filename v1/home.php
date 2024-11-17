<?php
    require_once('./config.php');
    require_once( $CFG->libdir . '/filelib.php' );
    // require_login();
    $courses = get_courses();
    
    function get_course_image($course_id)
    {
       global $COURSE;
       $url = '';

       $context = context_course::instance( $course_id );
       $fs = get_file_storage();
       $files = $fs->get_area_files( $context->id, 'course', 'overviewfiles', 0 );

       foreach ( $files as $f )
       {
         if ( $f->is_valid_image() )
         {
            $url = moodle_url::make_pluginfile_url( $f->get_contextid(), $f->get_component(), $f->get_filearea(), null, $f->get_filepath(), $f->get_filename(), false );
         }
       }

       return $url;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./vsk/Files/home.css">
</head>
<body class="vsk_root">
            <!--===============Navbar =====================-->
        <nav class="nav_102">
                <div class="container_102 nav-container_102">
                    <div class="logo_102">
                        <a href="" class="nav-logo_102">VSKUUL</a>
                    </div>
                        <ul class="nav_items_102">
                            <?php $base_url="/school"; ?>
                            <li><a href="<?php echo $base_url; ?>">Home</a></li>
                            <li><a href="<?php echo $base_url; ?>/about.php">About</a></li>
                            <li><a href="<?php echo $base_url; ?>/levels.php">Our Exams</a></li>
                            <li><a href="<?php echo $base_url; ?>/contact.php">Contact Us</a></li>
                        </ul>

                        <div class="nav-signin_signup">
                        <?php if(!isloggedin()): ?>
                                <a href="../login/index.php" class="btn_102">Login</a>
                                <a href="<?php echo $base_url; ?>/register.php" class="btn_102">Signup</a>
                        <?php else: ?>
                            <a class="btn_102" onclick="location.href='https://vskuul.com/my'">Dashboard</a>
                        <?php endif; ?>
                        </div>
            

                    <button class="menu-btn_102"><ion-icon name="menu-outline"></ion-icon></button>
                    <button class="close-btn_102"><ion-icon name="close-outline"></ion-icon></button>
                </div>
        </nav>
 <!--=============== End of Navbar =====================-->

    <!--===============Header=====================-->
        <header>
            <div class="header_102">
                <div class="icon_102">
                    <img src="./vsk/Assets/pencil.png" alt="pencil" class="icon_pencil_102">
                </div>
                <div class="icon_102">
                    <img src="./vsk/Assets/curvyy.png" alt="pencil" class="icon_curvy_102">
                </div>          
                <!-- <div class="icon_102">
                    <img src="./vsk/Assets/right_direction.png" alt="pencil" class="icon_direction_102">
                </div> -->
                <div class="icon_102">
                    <img src="./vsk/Assets/idea_book.png" alt="pencil" class="icon_book_102">
                </div>
                <div class="icon_102">
                    <img src="./vsk/Assets/learning.png" alt="pencil" class="icon_learning_102">
                </div>
                <div class="icon_102">
                    <img src="./vsk/Assets/orbit.png" alt="pencil" class="icon_orbit_102">
                </div>
                <div class="icon_102">
                    <img src="./vsk/Assets/genius.png" alt="pencil" class="icon_genius_102">
                </div>
                 <div class="icon_102">
                    <img src="./vsk/Assets/bubbles.png" alt="pencil" class="icon_bubbles_102">
                </div>
                <div class="icon_102">
                    <img src="./vsk/Assets/bub.png" alt="pencil" class="icon_bub_102">
                </div>
                <div class="icon_102">
                    <img src="./vsk/Assets/round.png" alt="pencil" class="icon_round_102">
                </div>
                <div class="text">
                       <h1>CREATE NEW</h1>
                       <h1><span class="text_102">EXPRERIENCE</span> <span class="text-shadow_102">WITH</span><h1/>
                        <h1 class="text-shadow_102">WAYS OF</h1>
                        <h1>PERFECT <span class="text-learning_102 text-shadow_102">LEARNING</span></h1>
                </div>
                
            </div>
        </header>
<!--===============End of Header=====================-->

<!--===============Special Program=====================-->
<section class="special_program_102">
    <div class="special_program_container_102">
    <!-- <img src="./vsk/Assets/solar-system.png" alt="" class="solar_102"> -->
        <img src="./vsk/Assets/plane.png" class="rocket_102">
        <img src="./vsk/Assets/planets.png" class="planet_102">
        <h1>OUR SPECIAL PROGRAMS FOR YOUR <span class="education_102">EDUCATION</span></h1>
            <div class="program3_102">
                <p>We provide special service for both parents and students such as scholarship, virtual class and student monitoring</p>

            </div>
    </div>

    <div class="course_container_102">
        <div class="courses primary">
            <img src="./vsk/Assets/zoom.png" alt="">
            <h4>Virtual Class</h4>
            <p>Provide online tutoring services to students of all ages and educational levels</p>
            <button class="card_btn_102">Click me</button>
        </div>        
        <div class="courses secondary">
            <img src="./vsk/Assets/graduation-hat.png" alt="">
            <h4>Scholarship Program</h4>
            <p>Provide online tutoring services to students of all ages and educational levels</p>
            <button class="card_btn_102">Click me</button>
        </div>        
        <div class="courses tertiary">
            <img src="./vsk/Assets/pie-chart.png"  alt="">
            <h4>Student Monitoring</h4>
            <p>Provide online tutoring services to students of all ages and educational levels</p>
            <button class="card_btn_102">Click me</button>
        </div>

        <div class="binders_102">
            <div class="binder_102">
                <div class="try"></div>
                <div class="try"></div>
                <div class="try"></div>
            </div>
        </div>
        <div class="binders_2_102">
            <div class="bind_102">
                <div class="feature"></div>
                <div class="feature"></div>
                <div class="feature"></div>
            </div>
        </div>
    </div>

    <div class="future_102">
        <img src="./vsk/Assets/earth.png" class="earth_102">   
        <img src="./vsk/Assets/mercury.png" alt="" class="mercury_102">
        <img src="./vsk/Assets/mercury.png" alt="" class="venus_102">
        <div class="future_lead_102">
            <h1>OUR PROGRAM IS <span class="lead_102">EASY</span> TO USE</h1>
            <h1>AND USEFUL FOR THE FUTURE</h1>
        </div>
        <div class="future_card_102">
            <div class="card_header_102">
                <div class="header_lead_102">
                    <h4>Virtual Class</h4>
                </div>
                <div class="header_lead_102">
                    <h4>Virtual Class</h4>
                </div>
                <div class="header_lead_102">
                    <h4>Virtual Class</h4>
                </div>
            </div>
            <div class="card_content_102">
                <div class="virtual_102">
                    <h1>LEARNING VIRTUALLY EVERYWHERE</h1>
                    <p>We provide learning virtually for students anywhere and we provide recorded meetings for students unable to attend meetings</p>
                </div>
                <div class="virtual_image">
                    <video src="./vsk/Assets/online meeting.mp4" autoplay controls></video>
                </div>
            </div>
        </div>
    </div>

    <div class="payment_plan_102">
       <div class="payment_header_102">
        <h1>Select your Plan</h1>
       </div>
       <div class="payment_cards_102">
            <div class="payment_card_102">
                <div class="payment_card_header_102">
                    <h3>BASIC</h3>
                    <h2>FREE <span>/ limited</span></h2>
                </div>
                <div class="payment_card_content">
                    <div class="payment_card_text_102">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    <div class="payment_card_text_102">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    <div class="payment_card_text_102">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    <div class="payment_card_text_102">
                        <ion-icon name="close-circle-outline" class="cancel_102"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    <div class="payment_card_text_102">
                        <ion-icon name="close-circle-outline" class="cancel_102"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    <div class="payment_card_text_102">
                        <ion-icon name="close-circle-outline" class="cancel_102"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    
                </div>

                <div class="payment_card_btn_102">
                    <button class="payment_btn_102">Get Started</button>
                </div>
            </div>
            <div class="payment_card_102">
                <div class="payment_card_header_102">
                    <h3>PRO</h3>
                    <h2>$150 <span>/ month</span></h2>
                </div>
                <div class="payment_card_content">
                    <div class="payment_card_text_102">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    <div class="payment_card_text_102">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    <div class="payment_card_text_102">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    <div class="payment_card_text_102">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    <div class="payment_card_text_102">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    <div class="payment_card_text_102">
                        <ion-icon name="close-circle-outline" class="cancel_102"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    
                </div>

                <div class="payment_card_btn_102">
                    <button class="payment_btn_102">Get Started</button>
                </div>
            </div>
            <div class="payment_card_102">
                <div class="payment_card_header_102">
                    <h3>ENTERPRISE</h3>
                    <h2>$300 <span>/ month</span></h2>
                </div>
                <div class="payment_card_content">
                    <div class="payment_card_text_102">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    <div class="payment_card_text_102">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    <div class="payment_card_text_102">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    <div class="payment_card_text_102">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    <div class="payment_card_text_102">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    <div class="payment_card_text_102">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <p>Unlimited access to all courses</p>
                    </div>
                    
                </div>

                <div class="payment_card_btn_102">
                    <button class="payment_btn_102">Get Started</button>
                </div>
            </div>
       </div>
    </div>
</section>

<!--===============Courses=====================-->
<section class="potential_102">
    <img src="./vsk/Assets/mercury.png" alt="" class="potential_mercury_102">
    <!-- <img src="./vsk/Assets/bub.png" alt="" class="potential_bubble_102"> -->
    <img src="./vsk/Assets/solar.png" alt="pencil" class="icon_pencil_102">
    <img src="./vsk/Assets/curvyy.png" alt="pencil" class="icon_curvy_102">
    <img src="./vsk/Assets/plant.png" alt="" class="icon_plant_102">
    <img src="./vsk/Assets/diamond.png" alt="" class="icon_diamond_102">
    <img src="./vsk/Assets/polygon.png" alt="" class="icon_polygon_102">

    <div class="potential_text_102">
        <h1><span class="unlock_us_102">LETS </span><span class="unlock_102">UNLOCK</span></h1>
        <h1 class="unlock_102">YOUR POTENTIAL<h1/>
         <h1><span class="unlock_102">WITH </span> <span class="unlock_vsk_102">VSK</span></h1>
     </div>
</section>

<!--===============future=====================-->
<section class="future_courses_102">
   
</section>

<footer>
    <div class="footer_container_102">
        <div class="footer_content_102">
            <div class="about_102">
                <h4>CONTACT US</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Affiliates</a></li>
                    <li><a href="#">Testimonials</a></li>
                </ul>
            </div>
            <div class="about_102">
                <h4>ABOUT US</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Affiliates</a></li>
                    <li><a href="#">Testimonials</a></li>
                </ul>
            </div>
            <div class="about_102">
                <h4>OUR SERVICES</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Affiliates</a></li>
                    <li><a href="#">Testimonials</a></li>
                </ul>
            </div>
        </div>
        <div class="footer_socials_102">
            <ion-icon name="logo-facebook" class="facebook_102"></ion-icon>
            <ion-icon name="logo-twitter" class="twitter_102"></ion-icon>
            <ion-icon name="logo-youtube" class="youtube_102"></ion-icon>
        </div>
    </div>
</footer>




<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="./vsk/Files/index.js"></script>
</div>
</body>
</html>