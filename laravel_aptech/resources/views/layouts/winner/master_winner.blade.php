<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('winner_title')
    @yield('winner_css')
    <link rel="stylesheet" type="text/css" href="css/einstein.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b0d6084e72.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script src="https://code.highcharts.com/highcharts.js"></script>


</head>
<body>
    <section class="header">
        <nav>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="@php echo route('home') @endphp">HOME</a></li>
                    <li><a href="@php echo route('physic') @endphp">PHYSICS</a></li>
                    <li><a href="@php echo route('chemistry') @endphp">CHEMISTRY</a></li>
                    <li><a href="@php echo route('medicine') @endphp">MEDICINE</a></li>
                    <li><a href="@php echo route('literature') @endphp">LITERATURE</a></li>
                    <li><a href="@php echo route('peace') @endphp">PEACE</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>

        </nav>

    </div>
        <div class="text-box">
            <h1>@yield('winner_name')</h1>
            <p>@yield('winner_time')
            </p>@yield('winner_link')   
        </div>
    </section>
    <div class="mid">
    <section class="course">
        <p>@yield('winner_bio')</p>
    </section>


    <section class="education" id="education">

        <div class="max-width">
            <h2 class="title"> Education</h2>
            <div class="education-content">
                <div class="column left">
                    <p>@yield('winner_education1')</p>
                </div>
                <div class="column right">
                    <p>@yield('winner_education2')</p>
                </div>
            </div>
        </div>
    </section>


    <section class="work" id="work">
        <div class="max-width">
            <h2 class="title">Career</h2> 
            <div class="work-content">
                <div class="column left">
                    <div class="first">                    
                        <h2>@yield('theory_name1')</h2><br>
                        <p>@yield('theory_description1')</p><br>
                    </div>
                    <div class="second"> 
                        <h2>@yield('theory_name2')</h2><br>
                        <p>@yield('theory_description2')</p><br>
                    </div>   
                    <div class="third">   
                        <h2>@yield('theory_name3')</h2><br>
                        <p>@yield('theory_description3')</p>
                    </div>
                </div>
                <div class="column right">
                    @yield('career')
               </div>
            </div>
        </div>
    </section>




    <section class="relationship" id="relationship">
        <div class="max-width">
            <h2 class="title">Relationship</h2>
            <div class="relationship-content">

                        <p>@yield('relationship_img')
                            <br>@yield('relationship_des')</p>
            
            </div>
        </div>
    </section>



    <section class="death" id="death">
        <div class="max-width">
            <h2 class="title">Death</h2>
            <div class="death-content">
                <div class="column left">
                    <p>@yield('death1')</p>
                </div>
                <div class="column right">
                    <p>@yield('death2')</p>
                </div>
            </div>
        </div>
    </section>
<!-- Book -->
<section class="Book">
    <h1>Books</h1>
    <div class="row1">
        <div class="book-col">
            @yield('book_img1')
            <div class="layer">
                <h3>@yield('book_name1') 
                    <p>@yield('book_des1')</p>
                    @yield('book_link1')
                </h3>

            </div>
        </div>

        <div class="book-col">
            @yield('book_img2')
            <div class="layer">
                <h3>@yield('book_name2')
                    <p>@yield('book_des2')</p>
                    @yield('book_link2')
                </h3>
            </div>
        </div>

        <div class="book-col">
            @yield('book_img3')
            <div class="layer">
                <h3>@yield('book_name3') 
                    <p>@yield('book_des3')</p>
                    @yield('book_link3')
                </h3>
            </div>
        </div>
    </div>
</section>
<!-- Line Chart -->
<div id="my-chart" style="min-width: 1140px; height: 500px; margin: 15px auto 0;"></div>
<!-- slider section start -->
<div class="slider">
    <div class="container"> 
        <input type="radio" name="dot" id="one">
        <input type="radio" name="dot" id="two">
        <div class="main-card">
            <div class="cards">
                <div class="card">
                    <div class="content"> 
                        <div class="img">
                            @yield('other_winner_img1')                         
                        </div>
                        <div class="details">
                            <div class="name">@yield('other_winner_name1')</div>
                            <div class="job">@yield('other_winner_time1')</div>
                            @yield('other_winner_link1')
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <div class="img">
                            @yield('other_winner_img2')                        
                        </div>
                        <div class="details">
                            <div class="name">@yield('other_winner_name2')</div>
                            <div class="job">@yield('other_winner_time2')</div>
                            @yield('other_winner_link2')
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <div class="img">
                            @yield('other_winner_img3')                        
                        </div>
                        <div class="details">
                            <div class="name">@yield('other_winner_name3')</div>
                            <div class="job">@yield('other_winner_time3')</div>
                            @yield('other_winner_link3')
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <div class="img">
                            @yield('other_winner_img4')                          
                        </div>
                        <div class="details">
                            <div class="name">@yield('other_winner_name4')</div>
                            <div class="job">@yield('other_winner_time4')</div>
                            @yield('other_winner_link4')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button">
            <label for="one" class="one active-left"> 
                &lt;
            </label>
            <label for="two" class="two active-right">
                &gt;
            </label>
            
        </div>
    </div>
</div>



<!-- cta -->
<section class="cta">
    <h2>Follow our page</h2>
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


    <footer>
        <span>Created By <a href="">Group 4</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>



    <!-- ----JS Menu---- -->
    @yield('life_chart')
    
</body>
</html>