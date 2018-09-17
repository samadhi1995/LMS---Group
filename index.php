<?php
session_start();

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == "student") {
        include 'include/nav-bar(student).php';
    } else if ($_SESSION['role'] == "lectuer") {
        include 'include/nav-bar(lectuer).php';
    } else {
        include 'include/nav-bar(guest).php';
        echo "Error Loging";
    }
} else {
    include 'include/nav-bar(guest).php';
}
?>


<!doctype html>
<html lang="en">
<head>
    <?php include 'include/head.php'; ?>
    <link rel="stylesheet" href="./css/mainStyle.css">
    <link rel="stylesheet" href="./css/styleSlide.css">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
</head>

<body background="img/SignBack.jpg">


<div class="layout">

<div class="slideshow-container">

            <div class="mySlides fade">
                <img src="./img/1.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="./img/2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="./img/3.jpg" style="width:100%">
            </div>

        </div>
        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 6000); // Change image every 6 seconds
            }



            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
            }
        }
        </script>
            
        </div>
</div>
        
<div>
    <h2 >Events</h2>
    <p> enter your event hear</p>
</div>

<div>
    <h2 >Calander</h2>
    <center>
        <script src="script/calandar.js"></script>
    </center>
</div> 
<<?php 
    include 'include/foot.php';
 ?>
</div>

</body>
</html>