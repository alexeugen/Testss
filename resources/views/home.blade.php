@extends('master')

@section('content')
<!--Content Starts-->
<!--Notifications Start-->
<br><br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            
            <h2>
                Ultimele Notificari
            </h2>
            @foreach ($notifications as $notification)
                <div class="alert alert-danger" role="alert">
                    <h4>{{ $notification->title }}</h4>
                    <p>{{ $notification->content }}</p>
                </div>
            @endforeach
            <div class="alert alert-danger" role="alert">
                A simple danger alert—check it out!
            </div>
            <div class="alert alert-warning" role="alert">
                A simple warning alert—check it out!
            </div>
            <div class="alert alert-info" role="alert">
                A simple info alert—check it out!
            </div>
        </div>
        <!--Notifications End-->
        <!--Articles Start-->
        <div class="col-md-4">
            <h2>
                Articole de interes
            </h2>
            <div class="card">
                <div class="card-body">
                    <!--Articol 1-->
                    <h5 class="card-title">Imunitatea copilului tau</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Citeste articolul</a>
                    <!--Articol 2-->
                    <p></p>
                    <h5 class="card-title">Cum depistezi cancerul mamar</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Citeste articolul</a>
                    <p></p>
                    <!--Artciol 3-->
                    <h5 class="card-title">Vaccinul antigripal</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Citeste articolul</a>
                </div>
            </div>
        </div>
        <!--Articles End-->
    </div>
</div>


<!--Content Ends-->
@endsection
