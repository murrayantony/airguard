<?php

@include 'connection.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> AIR GUARD</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body> 
      </p>
    <!-- header section -->
       <a href="#home"alt="Logo" class="logo" ></a>
    <header>
        <img src="images/logo-1.png" alt="" width="200">
        <a href="logout.php"></a>
        <nav class="navbar">
            <ul>
                <li><a href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#services">services</a></li>
                <li><a href="#projects">projects</a></li>
                <li><a href="#donate">donate</a></li>
                <li><a href="#post">post</a></li>
                <li><a href="post-data.php">Airguard</a></li>
                <li><a href="logout.php">Logout</a></li> 
</a></li>
            </ul>
        </nav>
        <div class="fas fa-bars"></div>
    </header>
    <!-- header section -->
    <!-- home section -->
    <section class="home" id="home">
        <div class="content">
            <h1>AIR MONITORING SERVICES</h1>
            <p style="color: ghostwhite; align-content: center;">Monitoring Our Planet for a Sustainable Future</p>
            <a href="" class="btn">explore more</a>
        </div>
    </section>
    <!-- about section -->
    <section class="about" id="about">
        <div class="row">
            <div class="image">
                <img src="images/4.avif" alt="">
            </div>
            <div class="content">
                <h3>Together we can save the planet</h3>
                <p>At Airguard, we are dedicated to safeguarding the health of our planet through advanced environmental monitoring and data analysis. Our mission is to provide real-time insights into the state of our environment, empowering individuals, communities, and organizations to take meaningful action towards sustainability.</p>
                <p>At Airguard was founded on the belief that knowledge is the first step towards change. By harnessing cutting-edge technology and a global network of sensors, we offer comprehensive data on air quality, water quality, and other critical environmental factors. Our goal is to make this information accessible to everyone, fostering a world where informed decisions lead to a healthier planet.</p>
                <a href="" class="btn">learn more</a>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-users"></i>
                <h3>10000+</h3>
                <p>Environmental Monitoring</p>
            </div>
            <div class="box">
                <i class="fas fa-tree"></i>
                <h3>1300+</h3>
                <p>Data Analysed</p>
            </div>
            <div class="box">
                <i class="fas fa-paw"></i>
                <h3>500+</h3>
                <p>Public Awareness</p>
            </div>
            <div class="box">
                <i class="fas fa-donate"></i>
                <h3>850+</h3>
                <p>Collaborations</p>
            </div>
        </div>
    </section>
    <!-- services section -->
    <section class="services" id="services">
        <h1 class="heading"> <i class="fas fa-quote-left"></i> our services <i class="fas fa-quote-right"></i></h1>
        <div class="box-container">
            <div class="box">
                <div class="detail">
                    <i class="fas fa-seedling"></i>
                    <h3>Environmental Monitoring:</h3>
                    <p>We deploy state-of-the-art sensors across various regions to continuously monitor key environmental parameters.</p>
                    
                </div>
            </div>
            <div class="box">
                <div class="detail">
                    <i class="fas fa-recycle"></i>
                    <h3>Data Analysis: </h3>
                    <p>Our team of experts analyzes the collected data to identify trends, detect anomalies, and forecast potential environmental threats.</p>
                   
                </div>
            </div>
            <div class="box">
                <div class="detail">
                    <i class="fas fa-hand-holding-water"></i>
                    <h3>Public Awareness:</h3>
                    <p>We provide clear, actionable information to the public, helping communities understand and respond to environmental challenges.</p>
                   
                </div>
            </div>
            <div class="box">
                <div class="detail">
                    <i class="fas fa-tree"></i>
                    <h3>Collaboration</h3>
                    <p>We work with governments, non-profits, and businesses to promote sustainable practices and policies based on reliable data.</p>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- project section -->
    <section class="projects" id="projects">
        <h1 class="heading"> <i class="fas fa-quote-left"></i> our projects <i class="fas fa-quote-right"></i></h1>
        <div class="box-container">
            <div class="thumbnail">
                <img src="images/project.jpg" alt="">
                <div class="icons">
                    <a href="#" style="--i:1" class="fas fa-heart"></a>
                    <a href="#" style="--i:2" class="fas fa-share"></a>
                    <a href="#" style="--i:3" class="fas fa-comment"></a>
                </div>
            </div>
            <div class="thumbnail">
                <img src="images/project1.jpg" alt="">
                <div class="icons">
                    <a href="#" style="--i:1" class="fas fa-heart"></a>
                    <a href="#" style="--i:2" class="fas fa-share"></a>
                    <a href="#" style="--i:3" class="fas fa-comment"></a>
                </div>
            </div>
            <div class="thumbnail">
                <img src="images/project2.jpg" alt="">
                <div class="icons">
                    <a href="#" style="--i:1" class="fas fa-heart"></a>
                    <a href="#" style="--i:2" class="fas fa-share"></a>
                    <a href="#" style="--i:3" class="fas fa-comment"></a>
                </div>
            </div>
            <div class="thumbnail">
                <img src="images/project3.jpg" alt="">
                <div class="icons">
                    <a href="#" style="--i:1" class="fas fa-heart"></a>
                    <a href="#" style="--i:2" class="fas fa-share"></a>
                    <a href="#" style="--i:3" class="fas fa-comment"></a>
                </div>
            </div>
            <div class="thumbnail">
                <img src="images/88.jpg" alt="">
                <div class="icons">
                    <a href="#" style="--i:1" class="fas fa-heart"></a>
                    <a href="#" style="--i:2" class="fas fa-share"></a>
                    <a href="#" style="--i:3" class="fas fa-comment"></a>
                </div>
            </div>
            <div class="thumbnail">
                <img src="images/project5.png" alt="">
                <div class="icons">
                    <a href="#" style="--i:1" class="fas fa-heart"></a>
                    <a href="#" style="--i:2" class="fas fa-share"></a>
                    <a href="#" style="--i:3" class="fas fa-comment"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- donate section -->
    <section class="donate" id="donate">
        <h1 class="heading"> <i class="fas fa-quote-left"></i>Donate Here! <i class="fas fa-quote-right"></i></h1>
        <div class="video-container">
            <video src="images/video.mp4" loop autoplay muted></video>
        </div>
        <div class="form-container">
            <form action="">
                <div class="inputBox">
                    <input type="text" name="usernamef" placeholder="First Name">
                    <input type="text" name="usernamel" placeholder="Last Name">
                </div>
                <div class="inputBox">
                    <input type="email"name="email" placeholder="enter your email">
                    <select name="" id="">
                        <option value="" selected disabled>Donation amount</option>
                        <option value="1">$5</option>
                        <option value="2">$10</option>
                        <option value="3">$15</option>
                        <option value="4">$20</option>

                    </select>
                </div>
                <textarea name="" id="" cols="30" rows="10" placeholder="message (optional)"></textarea>
                <input type="submit" class="btn">
            </form>
        </div>
    </section>
    <!-- post section -->
    <section class="post" id="post">
        <h1 class="heading"> <i class="fas fa-quote-left"></i> our latest post <i class="fas fa-quote-right"></i></h1>
        <div class="box-container">
            <div class="box">
                <img src="images/post.png" alt="">
                <div class="content">
                    <span><i class="fas fa-calender"></i>MAY, 2021</span>
                    <h3>Air Pollution & Plant Health:</h3>
                    <p>Air pollution can adversely affect the health of plants, leading to reduced crop yields, forest decline, and altered ecosystems. Some plant species, known as bioindicator plants, are particularly sensitive to air pollutants and can be used to assess air quality levels in specific regions.</p>
                    
                </div>
            </div>
            <div class="box">
                <img src="images/post2.jpg" alt="">
                <div class="content">
                    <span><i class="fas fa-calender"></i>MAY, 2022</span>
                    <h3>Air Quality and Health: </h3>
                    <p>Breathing clean air is crucial for maintaining good health. Poor air quality can exacerbate respiratory conditions such as asthma and contribute to cardiovascular diseases, lung cancer, and other health problems.</p>
                    
                </div>
            </div>
            <div class="box">
                <img src="images/post3.jpg" alt="">
                <div class="content">
                    <span><i class="fas fa-calender"></i>MAY, 2024</span>
                    <h3>Air Composition:</h3>
                    <p style="color: ghostwhite;">The air we breathe is primarily composed of nitrogen (about 78%), oxygen (about 21%), and traces of other gases such as argon, carbon dioxide, and water vapor.</p>
           
                </div>
            </div>
        </div>
    </section>

   
    <!-- footer section -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <a href=""><img src="images/logo-2.png" alt=""></a>
                <p>We envision a world where every person has the knowledge and tools to protect and improve the environment. By making environmental data transparent and accessible, we aim to inspire a global movement towards sustainability and resilience.</p>
    
            </div>
            <div class="box">
                <h3 class="share">share</h3>
                <a href="">Facebook</a>
                <a href="">Twitter</a>
                <a href="">WhatApp</a>
                <a href="">nstagram</a>
            </div>
            <div class="box">
                <h3 class="news">newsletter</h3>
                <form action="">
                    <input type="email" placeholder="enter your email">
                    <button class="fas fa-paper-plane"></button>
                </form>
            </div>
        </div>
        <h1 class="credit">created by <span>code WITH ANTONY MURITHI</span> | all right reserved</h1>
    </section>



    <!-- lightbox start -->
    <div class="lightbox">
        <div class="lightbox-content">
            <div class="lightbox-close">&times</div>
            <img src="images/project2.jpg" alt="" class="lightbox-img">
        </div>
        <div class="lightbox-control">
            <div class="prev" onclick="prevSlide()"><i class="fa fa-angle-left"></i></div>
            <div class="next" onclick="nextSlide()"><i class="fa fa-angle-right"></i></div>
        </div>
    </div>
    <!-- lightbox end -->
    <script src="script.js1"></script>

</body>
</html>