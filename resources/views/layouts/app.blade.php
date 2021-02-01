<!DOCTYPE html>
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
    <title>Shri Saibaba Sansthan Trust, Shirdi, Ahmednagar, Maharashtra</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   </head>
   <body>
    <form id="form1">
        <header class="main__header">
            <div class="container">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-header">
                        <h1 class="navbar-brand" style="margin: 0;"><a href="index.html">
                            <img src="img/logo.png" alt="pic"></a></h1>
                        <a href="#" class="submenu">Menus</a>
                    </div>
                    <div class="menuBar">
                        <ul class="menu">
                            <li class="active"><a href="home">Home</a></li>
                            <li><a href="about">About</a></li>
                            <li><a href="HowToReach.aspx">How to Reach</a></li>
                            <li><a href="Contact.aspx">contact us</a></li>
                            <li><a href="register">Registration</a></li>
                            <li><a href="login">Login</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </header>
        <div>
            @yield("content")

        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Daily Programme</h3>
                        <p>4:00 AM : Temple Open </p>
                        <p>4:15 AM : Bhupali</p>
                        <p>4:30 AM : Kakad Aarti (Morning)</p>
                        <p>5:00 AM : Bhajan In Saibaba Mandir</p>
                        <p>5:05 AM : Mangal Snaan In Samadhi Mandir</p>
                    </div>
                    <div class="col-md-3">
                        <h3>Recruitment</h3>
                        <p>> Selected Candidate List for different post for Shri Sainath And Shri Saibaba Hospital</p>
                        <p>> Shri Saibaba Sansthan Hospital Recruitment Advertisement</p>
                    </div>
                    <div class="col-md-3">
                        <h3>Online Services</h3>
                        <p>
                            For Online Services please do<br>
                            contact on<br>
                            02423-258956, 02423-258963
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h3>Social</h3>
                        <p>
                            Shirdi Tal. Rahata Dist. Ahmednagar State - Maharashtra India, Pin: 423109
        <br />
                            <br />
                            Phone: (02423) - 258500<br />
                            Fax: (02423) - 258870<br />
                            <br />
                        </p>
                        <div class="social__icons"><a href="#" class="socialicon socialicon-twitter"></a><a href="#" class="socialicon socialicon-facebook"></a><a href="#" class="socialicon socialicon-google"></a><a href="#" class="socialicon socialicon-mail"></a></div>
                    </div>
                </div>
            </div>
        </footer>
        <p class="text-center copyright">&copy; Copyright ABC Company. All Rights Reserved.</p>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script> 
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ URL::asset('js/jquery.mixitup.min.js') }}"></script> 
        <script src="{{ URL::asset('js/jquery.magnific-popup.js') }}"></script> 
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script> 
        <script type="text/javascript">
            $('.carousel').carousel({
                interval: 3500, // in milliseconds
                pause: 'none' // set to 'true' to pause slider on mouse hover
            })
        </script>

          <script type="text/javascript">
            $("a.submenu").click(function () {
                $(".menuBar").slideToggle("normal", function () {
                    // Animation complete.
                });
            });
            $("ul li.dropdown a").click(function () {
                $("ul li.dropdown ul").slideToggle("normal", function () {
                    // Animation complete.
                });
            $('ul li.dropdown').toggleClass('current');
            });
        </script>

    </form>

 </body>
</html>