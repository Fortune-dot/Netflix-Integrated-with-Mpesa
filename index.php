<?php
session_start();
$_SESSION['phone'] = $_POST['phone'];

//session_register('phone');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Netflix</title>
</head>
<style type="text/css">
    :root {
        --primary-color: #e50914;
        --dark-color: #141414;
        --light-color: #f4f4f4;
    }

    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background: #000000;
        color: #999999;
    }

    ul {
        list-style: none;
    }

    h1,
    h2,
    h3,
    h4 {
        color: #ffffff;
    }

    h3 {
        font-weight: lighter;
    }

    a {
        color: #ffffff;
        text-decoration: none;
    }

    p {
        margin: 0.5rem 0;
        font-weight: bold;
        color: #ffffff;
    }

    img {
        width: 100%;
    }

    .showcase {
        width: 100%;
        height: 100vh;
        position: relative;
        background: url("./images/1.jpg") no-repeat center center/cover;
    }

    .showcase::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        background: rgba(0, 0, 0, 0.4);
        box-shadow: 120px 100px 250px #000000, inset -120px -100px 250px #000000;
    }

    .showcase-top {
        position: relative;
        z-index: 2;
        height: 90px;
    }

    .showcase-top img {
        width: 140px;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translate(40%, -50%);
    }

    .showcase-top a {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translate(-60%, -50%);
    }

    .showcase-content {
        position: relative;
        margin: 0 26%;
        z-index: 2;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        align-items: center;
        margin-top: 9rem;
    }

    .showcase-content h1 {
        font-weight: 700;
        font-size: 64px;
        margin: 0 30px;
        max-width: 800px;
        line-height: 74.5px;
    }

    .showcase-content h3 {
        color: white;
        font-size: 25px;
        margin: 16px 0;
    }

    .showcase-content p {
        font-size: 19.2px;
        font-weight: 300;
        padding-top: 0.5rem;
        padding-bottom: 1rem;
    }

    .showcase-content input {
        position: absolute;
        left: 0;
        bottom: -8vh;
        width: 454px;
        height: 3rem;
        font-size: 1rem;
        padding-left: 0.5rem;
    }

    .btn {
        display: inline-block;
        background: var(--primary-color);
        color: white;
        padding: 0.5rem 1.2rem;
        font-size: 1rem;
        text-align: center;
        border: none;
        cursor: pointer;
        border-radius: 2px;
        margin-right: 0.5rem;
        outline: none;
        box-shadow: 0 5px 3px rgba(0, 0, 0, 0.45);
    }

    .btn:hover {
        opacity: 0.9;
    }

    .btn-rounded {
        border-radius: 5px;
    }

    .showcase-content .btn-lg {
        position: absolute;
        right: 0;
        bottom: -8vh;
        padding: 0.5rem 1.2rem;
        font-size: 1.5rem;
        text-transform: uppercase;
        height: 36px;
        width: 14rem;
    }

    .card-0,
    .card-1,
    .card-2,
    .card-3 {
        border-top: 8px rgb(69, 69, 69) solid;
        padding: 50px;
    }

    .card-0 {
        position: relative;
        display: inline-grid;
        grid-template-columns: 40% 50%;
        text-align: left;
        align-items: center;
        padding: 25px 45px 50px;
    }

    .desc-0 {
        padding-left: 100px;
    }

    .card-1 {
        position: relative;
        display: inline-grid;
        grid-template-columns: 50% 40%;
        text-align: left;
        align-items: center;
        padding: 25px 45px 50px;
    }

    .desc-1 {
        padding-left: 80px;
    }

    .style-cards h1 {
        font-size: 3rem;
        padding: 1rem;
        padding-left: 0;
    }

    .style-cards h3 {
        font-size: 1.6rem;
        line-height: 2rem;
    }

    .card-1 video {
        position: relative;
        width: 100%;
        height: 54%;
        grid-column: 2/2;
        grid-row: 1/2;
        z-index: -1;
    }

    .card-1 img {
        grid-column: 2/2;
        grid-row: 1/2;
    }

    .card-2 {
        position: relative;
        display: inline-grid;
        grid-template-columns: 40% 50%;
        text-align: left;
        align-items: center;
        padding: 25px 45px 50px;
    }

    .desc-2 {
        padding-left: 100px;
    }

    .card-3 {
        position: relative;
        display: inline-grid;
        grid-template-columns: 50% 40%;
        text-align: left;
        align-items: center;
        padding: 25px 45px 50px;
    }

    .desc-3 {
        padding-left: 80px;
        padding-right: 20px;
    }

    .card-3 img {
        width: 110%;
        grid-column: 2/2;
        grid-row: 1/2;
    }

    .card-3 video {
        position: relative;
        top: -87px;
        left: 125px;
        width: 65%;
        height: 78%;
        grid-column: 2/2;
        grid-row: 1/2;
        z-index: -1;
    }

    .faq {
        text-align: center;
    }

    .faq h1 {
        padding-bottom: 40px;
        font-size: 3rem;
    }

    .questions {
        display: flex;
        flex-direction: column;
        flex-basis: 40%;
        align-items: center;
    }

    .questions li {
        padding: 20px 30px;
        margin: 5px;
        font-size: 1.6rem;
        background-color: #303030;
        color: white;
        text-align: left;
        width: 50%;
    }

    .faq p {
        padding-top: 60px;
        font-size: 1.2rem;
        font-weight: 200;
    }

    .input {
        display: inline-grid;
        align-items: center;
        grid-template-columns: 50% 40%;
    }

    .input input {
        width: 600px;
        height: 3rem;
    }

    .input button {
        height: 3.25rem;
        width: 320px;
        left: 20px;
        text-align: center;
        background-color: var(--primary-color);
        font-size: 1.5rem;
        padding: 15px 32px;
        border: none;
        border-radius: 2px;
        color: white;
    }

    .footer {
        max-width: 70%;
        margin: 1rem auto;
        overflow: auto;
    }

    .footer,
    .footer a {
        color: #999999;
        font-size: 0.9rem;
    }

    .footer p {
        margin-bottom: 1.5rem;
    }

    .footer .footer-cols {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 2rem;
    }

    .footer li {
        line-height: 2.4;
    }
</style>

<body>
    <header class="showcase">
        <div class="showcase-top">
            <img src="logo.png" alt="Netflix Logo">
            <a href="./login.php" class="btn btn-rounded">Sign In</a>
        </div>
        <div class="showcase-content">
            <h1>Unlimited movies, TV shows and more.</h1>
            <h3>All of Netflix, starting at just KSH 500</h3>
            <p>Ready to watch? Enter your email to create or restart your membership.</p>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Email address">
              <span class="input-group-text" id="basic-addon2"> <a href="./pricing.html" style="text-decoration:none!important; color: white !important;"> Get Started <i class="bi bi-chevron-right text-white"></i> </a> </span>
            </div>
       
        </div>
        <br><br><br><br><br>
    </header>


    <section class="style-cards">
        <div class="card-0">
            <img src="./images/2.jpg" alt="Netflix Mobile">
            <div class="desc-0">
                <h1>Create profiles for kids.</h1>
                <h3>Send kids on adventures with their favourite characters in a space made just for them—free with your membership.</h3>
            </div>
        </div>
        <div class="card-1">
            <div class="desc-1">
                <h1>Enjoy on your TV.</h1>
                <h3>Watch on smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players and more.</h3>
            </div>
            <img src="./images/tv.png" alt="Netflix TV">
            <video class="video-1" autoplay="" playsinline="" muted="" loop="">
                <source src="1.m4v" type="video/mp4">
            </video>
        </div>
        <div class="card-2">
            <img src="./images/3.jpg" alt="Netflix Mobile">
            <div class="desc-2">
                <h1>Download your shows to watch offline.</h1>
                <h3>Save your favourites easily and always have something to watch.</h3>
            </div>
        </div>
        <div class="card-3">
            <div class="desc-3">
                <h1>Watch everywhere.</h1>
                <h3>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV.</h3>
            </div>
            <img src="./images/4.png" alt="Device-Pile-In">
            <video class="video-2" autoplay="" playsinline="" muted="" loop="">
                <source src="2.m4v" type="video/mp4">
            </video>
        </div>
    </section>

    <section class="lastsec">
        <div class="faq">
            <h1>Frequently Asked Questions</h1>
            <ul class="questions">
                <li>What is Netflix?</li>
                <li>How much does Netflix cost?</li>
                <li>Where can I watch?</li>
                <li>How do I cancel?</li>
                <li>What can I watch on Netflix?</li>
                <li>Is Netflix good for kids?</li>
            </ul>
            <p>Ready to watch? Enter your Phone Number to create or restart your membership.</p>
            <div class="input">
                <input type="email" name="email" placeholder="Email Address" style="outline: none!important;">
                <a href="#" class="btn-rounded"><button>GET STARTED</button></a>
            </div>
        </div>
    </section>


    <footer class="footer">
        <p>Questions? Call 000-800-040-1843</p>
        <div class="footer-cols">
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Speed Test</a></li>
            </ul>
            <ul>
                <li><a href="#">Help Centre</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Cookie Preferences</a></li>
                <li><a href="#">Watch for Free</a></li>
            </ul>
            <ul>
                <li><a href="#">Account</a></li>
                <li><a href="#">Ways to Watch</a></li>
                <li><a href="#">Corporate Information</a></li>
                <li><a href="#">Legal Notices</a></li>
            </ul>
            <ul>
                <li><a href="#">Media Centre</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Netflix Originals</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>