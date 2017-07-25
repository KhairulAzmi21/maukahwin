@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{ route('profile.update', $profile->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                  <label for="title">Title:</label>
                  <input type="text" class="form-control" id="title" placeholder="Enter title" value="{{ $profile->title or ''}}" name="title">
                </div>
                <div class="form-group">
                  <label for="location">Location:</label>
                  <input type="text" class="form-control" id="location" placeholder="Enter location" value="{{ $profile->location or ''}}" name="location">
                </div>
                <div class="form-group">
                  <label for="date">Date:</label>
                  <input type="date" class="form-control" id="date" placeholder="Enter date"  value="{{ $profile->date or ''}}" name="date">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
             </form>
        </div>
    </div>
</div>
@endsection
