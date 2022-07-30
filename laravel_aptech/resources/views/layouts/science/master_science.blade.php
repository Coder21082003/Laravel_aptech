<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('science_title')
    @yield('science_picture')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b0d6084e72.js" crossorigin="anonymous"></script>


</head>
<body>
    <section class="header">
        <nav>
            <div class="nav-link" id="navLink">
                <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="<?php echo route('home')?>">HOME <i class="fa fa-house"></i></a></li>
                    <li><a href="@php echo route('physic') @endphp">PHYSICS <i class="fa fa-atom"></i></a></li>
                    <li><a href="@php echo route('chemistry') @endphp">CHEMISTRY <i class="fa fa-prescription-bottle"></i></a></li>
                    <li><a href="@php echo route('medicine') @endphp">MEDICINE <i class="fa fa-capsules"></i></a></li>
                    <li><a href="@php echo route('literature') @endphp">LITERATURE <i class="fa fa-book-open"></i></a></li>
                    <li><a href="@php echo route('peace') @endphp">PEACE <i class="fa fa-peace"></i></a></li>
                </ul>
            </div>
                <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </nav> 

        <div class="text-box">
            <h1>THE NOBEL PRIZE IN @yield('science_name')</h1>
            <p>@yield('science_describe')</p>
            <a href="https://en.wikipedia.org/wiki/Alfred_Nobel" class="hero-btn">Click here to find more</a>
        </div>
    </section>
<!-- laureates -->

    <section class="laureates">
        <h3>Laureates</h3>
        <div class="laureates-row">
            <div class="img img1">
                <!-- <img src="icon/PierreCurie-potrait.jpg" alt=""> -->
            </div>

            <div class="intro">
                <h3>@yield('winner1')</h3>
                <p>@yield('winner1_intro')</p>
                @yield('winner1_link')
            </div>
        </div>
        
        <div class="laureates-row">
            <div class="img img2">
                <!-- <img src="icon/Einstein.jpg" alt=""> -->
            </div>

            <div class="intro">
                <h3>@yield('winner2')</h3>
                <p>@yield('winner2_intro')</p>
                @yield('winner2_link')
            </div>
        </div>

        <div class="laureates-row">
            <div class="img img3">
                <!-- <img src="icon/Lorentz.jpg" alt=""> -->
            </div>

            <div class="intro">
                <h3>@yield('winner3')</h3>
                <p>@yield('winner3_intro')</p>
                @yield('winner3_link')
            </div>
        </div>

        <div class="laureates-row">
            <div class="img img4">
                <!-- <img src="icon/lippmann-career.jpg" alt=""> -->
            </div>

            <div class="intro">
                <h3>@yield('winner4')</h3>
                <p>@yield('winner4_intro')</p>
                @yield('winner4_link')
            </div>
        </div>

        <div class="laureates-row">
            <div class="img img5">
                <!-- <img src="icon/schrodinger-potrait.jpg" alt=""> -->
            </div>

            <div class="intro">
                <h3>@yield('winner5')</h3>
                <p>@yield('winner5_intro')</p>
                @yield('winner5_link')
            </div>
        </div>
    </section>

        <!-- contact -->
        <section class="cta">
            <h1>Follow our page</h1>
            <a href="" class="hero-btn">CONTACT US</a>
        </section>
<!-- footer -->

<footer>
    <h4>About us</h4>
    <div class="icon">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-youtube"></i>
        <i class="fa fa-linkedin"></i>
    </div>
    <p>Made width <i class="fa fa-heart-o"></i> by Group 4</p>
</footer>








<script>
    var navLink = document.getElementById("navLink");

    function showMenu(){
        navLink.style.right = "0px";
    }
    function hideMenu(){
        navLink.style.right = "-200px";
    }
</script>
</body>
</html>