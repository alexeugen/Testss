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
            @php
                $count = 100;    
            @endphp
            @foreach ($notifications as $notification)
                @if($notification->type == 1)
                <div class="alert alert-danger" id="{{$count}}" role="alert">
                    <button type="button" data-id="{{ $notification->id }}" data-url="{{ route('deleteNotification') }}"  data-alert={{$count}} class="btn btn-success btn-sm" style="float:right;">Facut</button>
                    <h4>{{ $notification->title }}</h4>
                    <p>{{ $notification->content }}</p>
                    @php
                        $count++;
                    @endphp
                </div>
                @endif
                @if($notification->type == 2)
                <div class="alert alert-warning" role="alert">
                    <button type="button" data-id="{{ $notification->id }}" data-url="{{ route('deleteNotification') }}"  data-alert={{$count}} class="btn btn-success btn-sm" style="float:right;">Facut</button>
                    <h4>{{ $notification->title }}</h4>
                    <p>{{ $notification->content }}</p>
                </div>
                @endif
                @if($notification->type == 3)
                <div class="alert alert-info" role="alert">
                    <button type="button" data-id="{{ $notification->id }}" data-url="{{ route('deleteNotification') }}"  data-alert={{$count}} class="btn btn-success btn-sm" style="float:right;">Facut</button>
                    <h4>{{ $notification->title }}</h4>
                    <p>{{ $notification->content }}</p>
                </div>
                @endif
            @endforeach
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


<script>



$( ".btn" ).click(function() {
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $.ajax({
        method: "POST",
        url: this.getAttribute("data-url"),
        data: { data_id: this.getAttribute("data-id") }
      })
        .done(function( msg ) {
            location.reload();
        });
});


</script>

<!--Content Ends-->
@endsection
