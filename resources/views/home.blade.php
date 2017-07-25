@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <a href="{{ route('profile.edit',auth()->user()->profile->id)}}"/>Edit Your Profile</a>

                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{ $profile->id }}</td>
                            <td>{{ $profile->title }}</td>
                            <td>{{ $profile->location }}</td>
                            <td>{{ $profile->date }}</td>
                          </tr>
                        </tbody>
                      </table>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
