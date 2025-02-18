<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Cares</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <!-- header navbar section start  -->

    <header>

        <!-- logo name  -->
        <a href="#" class="logo"><span>D</span>octors <span>C</span>ares.</a>

        <!-- navbar link  -->
        <nav class="navbar">
            <ul>
                <li><a href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#doctor">doctor</a></li>
                <li><a href="#review">review</a></li>
                <li><a href="#contact">contact</a></li>
                <li><a href="#blog">blog</a></li>
            </ul>
        </nav>

        <div class="fas fa-bars"></div>
    </header>
    <!-- header navbar section end  -->

    <!-- home section start  -->

    <section id="home" class="home">

        <div class="row">

            <!-- home images  -->
            <div class="images">
                <img src="home.png" alt="">
            </div>

            <!-- home heading  -->
            <div class="content">
                <h1><span>Stay</span> Safe, <span>Stay</span> Healthy.</h1>
                <p>Pain itself is to be found, in the love of the profession and the others, through the duty of office.</p>
                <a href="#"><button class="button">read more</button></a>
            </div>
        </div>
    </section>
    <!-- home section end  -->

    <!-- about section start  -->

    <section id="about" class="about">

        <h1 class="heading">about our facility</h1>
        <h3 class="title">learn and explore our facility</h3>

        <div class="box-container">

            <!-- start here  -->
            <div class="box">
                <!-- about images  -->
                <div class="images">
                    <img src="about-1.png" alt="">
                </div>
                
                <!-- about heading & text  -->
                <div class="content">
                    <h3>ambulance services</h3>
                    <p>When emergencies strike, every second counts. Our dedicated ambulance
                         service is available 24/7, providing swift, reliable, and professional 
                      transportation to the nearest medical facility</p>
                 <a href="#" class="learn-more-button" data-section="ambulance"><button class="button">learn more</button></a>    
                </div>
            </div>
            <!-- end here  -->

            
            <!-- start here  -->
            <div class="box">
                <!-- about images  -->
                <div class="images">
                    <img src="about-2.png" alt="">
                </div>
                
                <!-- about heading & text  -->
                <div class="content">
                    <h3>emergency rooms</h3>
                    <p>In times of crisis, you need fast,
                         reliable, and professional care. 
                         Our Emergency Services are available
                          around the clock, providing immediate
                           medical attention for a wide range of 
                           urgent health conditions. Whether it's a
                            sudden illness, accident, or life-threatening 
                            situation, our
                         experienced team is here to help.</p>
                 <a href="#" class="learn-more-button" data-section="emergency"><button class="button">learn more</button></a>   
                </div>
            </div>
            <!-- end here  -->

            
            <!-- start here  -->
            <div class="box">
                <!-- about images  -->
                <div class="images">
                    <img src="about-3.png" alt="">
                </div>
                
                <!-- about heading & text  -->
                <div class="content">
                    <h3>free check-ups</h3>
                    <p>
                        Regular checkups are essential for early 
                        detection of potential health issues, and we’re
                         here to make sure you get the care you need, at no cost.
                    </p>
                 <a href="#" class="learn-more-button" data-section="checkups"><button class="button">learn more</button></a>   
                </div>
            </div>
            <!-- end here  -->

            <div class="box">
                <!-- about images  -->
                <div class="images">
                    <img src="about-3.png" alt="">
                </div>
                
                <!-- about heading & text  -->
                <div class="content">
                    <h3>Appointments</h3>
                    <p>
                        we understand that your time is valuable.
                         To make your visit as convenient as possible,
                          we offer an easy and efficient appointment booking process.
                    </p>
                 <a href="booking-form.html"><button class="button">Book Appointment</button></a>   
                </div>
            </div>



           </div>
    </section>

    <!-- about section end  -->
    
    <!-- card section start  -->

    <section id="doctor" class="card">

        <div class="container">

            <h1 class="heading">doctors</h1>
            <h3 class="title">our professional doctors</h3>

            <div class="box-container">

                <!-- start here  -->
                <div class="box">
                    <img src="doctor-1.jpg" alt="">                
                    
                    <div class="content">
                        <a href="#">
                            <h2>James Andrew</h2>
                        </a>
                        <p>professional</p>

                        <!-- card icons  -->
                        <div class="icons">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <!-- end here  -->

                 <!-- start here  -->
                 <div class="box">
                    <img src="./doctor-2.jpg" alt="">                
                    
                    <div class="content">
                        <a href="#">
                            <h2>Jennifer Hope</h2>
                        </a>
                        <p>professional</p>

                        <!-- card icons  -->
                        <div class="icons">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <!-- end here  -->

                 <!-- start here  -->
                 <div class="box">
                    <img src="doctor-3.jpg" alt="">                
                    
                    <div class="content">
                        <a href="#">
                            <h2>Abdul Muhammad</h2>
                        </a>
                        <p>professional</p>

                        <!-- card icons  -->
                        <div class="icons">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <!-- end here  -->

            </div>
        </div>
    </section>
    <!-- card section end  -->

    <!-- review section start  -->

    <section id="review" class="review">

        <h1 class="heading">our patient review</h1>
        <h3 class="title">what patient says about us</h3>

        <div class="box-container">

            <!-- start here  -->
            <div class="box">
                <i class="fas fa-quote-left"></i>
                <p>
                "Great service and very informative! The website provides
                 detailed information on doctors and hospitals, which made my
                 decision easier. The only improvement I'd suggest is adding more
                  filtering options for specialties. Otherwise, excellent platform!
                </p>

                <div class="images">
                    <img src="img-1.jpg" alt="">

                    <div class="info">
                        <h3>Linda Martins</h3>
                        <span>date :31 12 2024</span>
                    </div>
                </div>
            </div>
            <!-- end here  -->

            
            <!-- start here  -->
            <div class="box">
                <i class="fas fa-quote-left"></i>
                <p>
                This website made finding a reliable doctor so easy! I was able
                 to book an appointment within minutes, and the clinic I visited was fantastic.
                 The reviews helped me choose the best option, and I appreciate the quick response
                  from customer support. Highly recommend!
                </p>

                <div class="images">
                    <img src="img-2.jpg" alt="">

                    <div class="info">
                        <h3>Antony James</h3>
                        <span>date :  11 11 2024</span>
                    </div>
                </div>
            </div>
            <!-- end here  -->

            
            <!-- start here  -->
            <div class="box">
                <i class="fas fa-quote-left"></i>
                <p>
                "Fantastic platform! I was able to compare different clinics, 
                check their ratings, and book an appointment without any
                 hassle. The email reminders were super helpful, and the doctor 
                 I found was excellent. Highly recommend this service!
                </p>

                <div class="images">
                    <img src="img-3.jpg" alt="">

                    <div class="info">
                        <h3>Farhan Ali</h3>
                        <span>date : 03 02 2025</span>
                    </div>
                </div>
            </div>
            <!-- end here  -->
        </div>
    </section>
    <!-- review section end  -->
 
    <!-- contact section start  -->

    <section id="contact" class="contact">

        <h1 class="heading">contact us</h1>
        <h3 class="title">you can talk to us any times,</h3>

        <div class="row">

            <!-- form images  -->
            <div class="images">
                <img src="form.png" alt="">
            </div>

            <div class="form-container">    

            <form id="userForm" method="post" action="save_data.php">
                <input type="text" placeholder="full name" name="full_name" id="">
            <input type="email" placeholder="enter your email" name="email" id="">

            <input type="number" placeholder="phone" name="phone" id="">
            <textarea name="message" cols="30" rows="10" id="" ></textarea>
            <button type="submit" class="button" value="send">Send</button>
            </form>
            </div>
        </div>




    </section>



    <!-- contact section end  -->


    <!-- blog section start  -->

    <section id="blog" class="blog">

        <h1 class="heading">blog</h1>
        <h3 class="title">"Pain itself is to be, love is the purpose.".</h3>

        <div class="box-container">

            <!-- start here  -->
            <div class="box">
                <!-- images  -->
                <img src="blog 1.png" alt="">

                <div class="content">
                    <a href="#">
                        <h2>diabetes</h2>
                    </a>
                    <p> 
                        we are dedicated to helping you manage 
                        your diabetes effectively, so you can 
                        live a healthy, active life. Our team of
                         experts provides personalized care and guidance 
                        to ensure you maintain optimal health
                        </p>
                     <!-- button  -->
                    <a href="#" class="learn-more-button" data-section-id="diabetes"> <button class="button">learn more</button></a>
                </div>
            </div>
            <!-- end here  -->

            
            <!-- start here  -->
            <div class="box">
                <!-- images  -->
                <img src="blog 2.png" alt="">

                <div class="content">
                    <a href="#">
                        <h2>covid-19 vaccine</h2>
                    </a>
                    <p>
                        Our healthcare team is dedicated
                         to keeping you safe and informed while
                          offering essential services, from testing to
                           treatment and ongoing support.


                        </p>
                     <!-- button  -->
                    <a href="#" class="learn-more-button" data-section-id="vaccine"> <button class="button">learn more</button></a>
                </div>
            </div>
            <!-- end here  -->

            
            <!-- start here  -->
            <div class="box" >
                <!-- images  -->
                <img src="blog 3.png" alt="">

                <div class="content">
                    <a href="#">
                        <h2>prevent epidemic</h2>
                    </a>
                    <p>
                        we are committed to helping our community 
                        stay safe by providing essential information
                         and services aimed 
                         at preventing the spread of infectious diseases.
                        </p>
                     <!-- button  -->
                    <a href="#" class="learn-more-button" data-section-id="epidemic"> <button class="button">learn more</button></a>
                </div>
            </div>
            <!-- end here  -->
        </div>
    </section>



    <!-- blog section end  -->

    <!-- footer section start  -->

    <section class="footer">

        <div class="box">
            <h2 class="logo"><span>D</span>octors <span>C</span>ares</h2>

            <a href="">Phone No:+254 321 654 987</a>
            <a href="">Email:doctorcares@gmail.com</a>
            <a href="">Address:Nyeri,Kenya</a>
        </div>

        <div class="box">
            <h2 class="logo"><span>S</span>hare</h2>

            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">pinterest</a>
        </div>

        <div class="box">
            <h2 class="logo"><span>L</span>inks</h2>

            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">Doctor</a>
            <a href="#">Review</a>
            <a href="#">contact</a>
            <a href="#">blog</a>
        </div>


        <h1 class="credit">created by <span>Doctor Cares</span> all right reserved.</h1>
    </section>








    <!-- footer section end  -->
    



    










    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- custom js file link  -->
    <div id="modal" class="modal hidden">
        <div class="modal-content">
            <span id="closeModal" class="close">&times;</span>
            <h2 id="modalTitle">Section Title</h2>
            <p id="modalDescription">Section Description</p>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>