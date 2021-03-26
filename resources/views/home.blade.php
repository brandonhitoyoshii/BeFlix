@extends('layouts.layout')

@section('content')
<div class="myNav">
    <nav class="navbar fixed-top navbar-expand-lg">
        <a class="navbar-brand mb-0 h1" href="/Home" style="color: #ff0035; font-weight: bold;font-size: 25px;">BeeFlix</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link mb-0" href="{{ URL::previous() }}" style="color: #ffcc00;">	&#8592;</a>
            </div>
        </div>
        <a class="nav-link mb-0" href="/home" style="font-size: 40px;color: #ffcc00 ">&#8962; <span class="sr-only">(current)</span></a>
    </nav>
</div>

<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
        <li data-target="#carousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Cheese in the Trap</h4>
                    <p>Park Hae Jin, Kim Go Eun, Seo Kang Joon, Lee Syung Kyung, Nam Joo Hyuk, ....</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Daredevil</h4>
                    <p>Charlie Cox, Deborah Ann Woll, Vincent D'Onofrio, Jon Bernthal, ....</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>It's Okay to Not Be Okay</h4>
                    <p>Seo Ye Ji, Kim Soo Hyun, Oh Jung Se, Park Gyu Young, Kwak Dong Yeon, ....</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Bernard</h4>
                    <p>A curious polar bear named Bernard, whose bumbling slapstick antics and clumsiness ...</p>
                </div>
            </div>
    </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<nav class="navbar bar"></nav>

<div class="container">
    @foreach($genres as $genre)
        <h2 class="pt-5"><a href="/Home/Genre/{{$genre->name}}" class="genreName">{{$genre->name}}</a></h2>
        <div class="row py-3 cardLeft" style="min-width: 25rem;">
        @foreach($genre->movies as $movie)
            <div class="card-group" style="min-width: 25rem; flex-wrap: nowrap;">
            <div class="col-md-3 mx-3 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top" src="/images/{{$movie->photo}}.jpg" alt="Card image cap" style="height:25rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <a href="/Home/Movie/{{$movie->title}}" class="btn btn-outline-dark w-100">VIEW DETAILS</a>
                    </div>
                </div>
            </div>
            </div>
        @endforeach
        </div>
    @endforeach
</div>
@endsection

@section('footer')
    <footer class="page-footer">
        <div class="footer-copyright text-center py-4 pt-5", style="color: grey;">
            <p class="my-auto">© 2020 Brandon Hitoyoshi, 2201740376</p>
        </div>
    </footer>
@endsection


