@extends('master')




@section('title')
    CONTACT
@endsection


@section('content')
      <h1>pagina de contact</h1>  

      <ul>
@foreach ($fructe as $fruct)
    
        <li>{{ $fruct }}</li>
    
@endforeach
        
      </ul>        

@endsection

@push('styles')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endpush