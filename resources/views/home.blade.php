@extends("layouts.app")
@section("content")


 <section class="slider">
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img data-src="img/slider/image_1.jpg" alt="first slide" src="img/slider/image_1.jpg"></div>
                <div class="item">
                    <img data-src="img/slider/image_2.jpg" alt="second slide" src="img/slider/image_2.jpg"></div>
                <div class="item">
                    <img data-src="img/slider/image_3.jpg" alt="third slide" src="img/slider/image_3.jpg"></div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon carousel-control-left"></span></a><a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon carousel-control-right"></span></a>
        </div>
    </section>
    <section class="main__middle__container homepage">
        <div class="row text-center headings no-margin nothing">
            <div class="container">
                <h1 class="page_title">Welcome to our site!</h1>
                <p>Shri Saibaba Sansthan Trust, Shirdi, is the Governing and Administrative body of Shri Saibaba's Samadhi Temple and all others temples in this premises,<br>
                    and devoted towards development of Shirdi village.</p>
                <p><a class="btn btn-default btn-lg" href="#" role="button">Tell me more</a></p>
            </div>
        </div>
        <div class="row three__blocks no_padding no-margin">
            <div class="container">
                <h2 class="page__title text-center"><span>Digital Services</span></h2>
                <div class="col-md-4">
                    <h3><a href="#">Seva Services</a></h3>
                    <p>Srivari Seva Quota for July 16, 2019 will be released on April 17, 2019 00:00 Hrs. You can book for Seva well in advance through Seva.</p>
                    <p>
                        <a class="btn btn-primary btn-md" href="#" role="button">Learn more</a>
                </div>
                <div class="col-md-4 middle">
                    <h3><a href="#">Online Booking</a></h3>
                    <p>registration with valid e-mail ID is a prerequisite for booking of Seva / Accommodation / Darshanam / Donation.</p>
                    <p>
                        <a class="btn btn-primary btn-md" href="#" role="button">Learn more</a>
                </div>
                <div class="col-md-4">
                    <h3><a href="#">Accommodation</a></h3>
                    <p>Devasthanams has brought some amendments with effect from more transparency in allotment of accommodation to pilgrims.</p>
                    <p>
                        <a class="btn btn-primary btn-md" href="#" role="button">Learn more</a>
                </div>
            </div>
        </div>
    </section>
@endsection