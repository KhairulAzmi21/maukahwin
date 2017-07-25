@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
               <h1>{{ $user->profile->title }}</h1>
               <p>Tarikh: {{ $user->profile->date }}</p>
               <p>Lokasi: {{ $user->profile->location }}</p>
            </div>
            Hantarkan wish anda mau untuk {{ $user->profile->title }}
        </div>
    </div>
</div>
@endsection
