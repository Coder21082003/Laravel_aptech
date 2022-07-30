<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nobel Prize</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b0d6084e72.js" crossorigin="anonymous"></script>


</head>
<body>
    <section class="header">
        <nav>
            <a href="{{route('home')}}" style="opacity: 0%;"><img src="icon/NBicon.jpg" alt=""></a>
            <div class="nav-link" id="navLink">
                <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="@php echo route('physic') @endphp">PHYSICS</a></li>
                    <li><a href="@php echo route('chemistry') @endphp">CHEMISTRY</a></li>
                    <li><a href="@php echo route('medicine') @endphp">MEDICINE</a></li>
                    <li><a href="@php echo route('literature') @endphp">LITERATURE</a></li>
                    <li><a href="@php echo route('peace') @endphp">PEACE</a></li>
                </ul>
            </div>
                <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1>Alfred Nobel</h1>
            <h2>(1833-1896)</h2>
            <p>Was born in Stockholm, Sweden, on 21 October 1833. His family was descended from Olof Rudbeck, the best-known technical genius in Sweden in the 17th century, an era in which Sweden was a great power in northern Europe. Nobel was fluent in several languages, and wrote poetry and drama.Nobel was also very interested in social and peace-related issues, and held views that were considered radical during his time. Alfred Nobel’s interests are reflected in the prize he established. Learn more about his life and his interests . science, inventions, entrepreneurship, literature and peace work.</p>
            <a href="https://en.wikipedia.org/wiki/Alfred_Nobel" class="hero-btn">Click here to find more</a>
        </div>
    </section>

<!-- Prize -->
<section class="Prize">
    <h1>Nobel Prize</h1>
    <p>There are five separate prizes that, according to Alfred Nobel's will of 1895, are awarded to "those who, during the preceding year, have conferred the greatest benefit to Humankind."</p>    
    <div class=" row row1">
        <div class="prize-col">
            <img src="icon/physics.jpg" alt="">
            <a href="@php echo route('physic') @endphp">
                <div class="layer">
                    <h3>Physics
                        <p>The branch of science concerned with the nature and properties of matter and energy. The subject matter of physics, distinguished from that of chemistry and biology, includes mechanics, heat, light and other radiation, sound, electricity, magnetism, and the structure of atoms.</p>
                    </h3>
                </div>
            </a>
        </div>

        <div class="prize-col">
            <img src="icon/chemistry.png" alt="">
            <a href="@php echo route('chemistry') @endphp">
                <div class="layer">
                    <h3>Chemistry
                        <p>The branch of science that deals with the identification of the substances of which matter is composed; the investigation of their properties and the ways in which they interact, combine, and change; and the use of these processes to form new substances.</p>
                    </h3>
                </div>
            </a>
        </div>

        <div class="prize-col">
            <img src="icon/medicine.jpg" alt="">
            <a href="@php echo route('medicine') @endphp">
                <div class="layer">
                    <h3>Medicine
                        <p>The science and art dealing with the maintenance of health and the prevention, alleviation, or cure of disease.</p>
                    </h3>
                </div>
            </a>
        </div>
    </div>
    <div class="row row2">
        <div class="prize-col">
            <img src="icon/literature.jpg" alt="">
            <a href="@php echo route('literature') @endphp">
                <div class="layer">
                    <h3>Literature
                        <p>written works, especially those considered of superior or lasting artistic merit.</p>
                    </h3>
                </div>
            </a>
        </div>

        <div class="prize-col">
            <img src="icon/peace.jpg" alt="">
            <a href="@php echo route('peace') @endphp">
                <div class="layer">
                    <h3>peace
                        <p>is a concept of societal friendship and harmony in the absence of hostility and violence. In a social sense, peace is commonly used to mean a lack of conflict (such as war) and freedom from fear of violence between individuals or groups.</p>
                    </h3>
                </div>
            </a>
        </div>
    </div>
</section>


<!-- Feedback -->
<section class="Feedback">
    <h1>Feedbacks</h1>
    <div class="row row1">
        <div class="Feedback-col">
            <div class="img">avatar</div>
            <div>
                <h3>Randguy</h3>
                <p>this page is great</p>
            <i class="fa fa-star"></i>     
            <i class="fa fa-star"></i>  
            <i class="fa fa-star"></i>  
            <i class="fa fa-star"></i>  
            <i class="fa fa-star-o"></i>       
            </div>
        </div>
        <div class="Feedback-col">
            <div class="img">avatar</div>
            <div>
                <h3>Another user</h3>
                <p>I learned a lot when visiting this page</p>
                <i class="fa fa-star"></i>     
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>  
                <i class="fa fa-star"></i>  
                <i class="fa fa-star-half-o"></i>      
            </div>
        </div>
    </div>
</section>

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