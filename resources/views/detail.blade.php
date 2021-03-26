@extends('layouts.layout')

@section('content')
<div class="myNav">
    <nav class="navbar navbar-expand-lg" style="background-color: black;">
        <a class="navbar-brand mb-0 h1" href="/Home" style="color: #ff0035; font-weight: bold;font-size: 25px;">BeeFlix</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link mb-0" href="{{ URL::previous() }}">	&#8592;</a>
            </div>
        </div>
        <a class="nav-link mb-0" href="/Home" style="font-size: 40px;">&#8962; <span class="sr-only">(current)</span></a>
    </nav>
</div>

<div class="container py-5">
    <div class="row py-5 cardLeft justify-content-center" style="min-width: 25rem;">
    <div class="col-2 py-5">
        <img class="card-img-top" src="/images/{{$movies->photo}}.jpg" alt="Card image cap" style="height:25rem;">
    </div>
    <div class="col-4 py-5 mr-5">
        <h5 class="mt-0 h3 mb-4" style="color: #FAD4C0;">{{$movies->title}}</h5>
        <p class="text-light"> Rating: {{$movies->rating}} out of 5.00
                <div class="Stars" style="--rating: {{$movies->rating}};"></div>
        </p>
        <p class="text-light">{{$movies->description}}</p>
        <p class="text-light">Genre: <a href="/Home/Genre/{{$movies->genre->name}}" class="genreLink">{{$movies->genre->name}}</a></p>
    </div>
    <div class="col py-5 ml-5">
        <table class="table text-light mb-5 w-50">
            <h4 class="mb-3 text-light">Episode List</h4>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                @foreach($episodes as $episode)
                <tr>
                    <td>{{$episode->episode}}</td>
                    <td>{{$episode->title}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $episodes->withQueryString()->links() }}
    </div>
</div>

<div class="space">
    <br class="py-5">
    <br class="py-5">
    <br class="py-5">
    <br class="py-1">
</div>
@endsection

@section('footer')
    <footer class="page-footer">
        <div class="footer-copyright text-center pt-5", style="color: grey;">
            <p class="my-auto">© 2020 Brandon Hitoyoshi, 2201740376</p>
        </div>
    </footer>
@endsection


