@extends('layouts.manage')

@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-4 has-text-link">User Details</h1>
            </div>
            <div class="column">
                <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right">
                    <i class="fa fa-user-plus" style="margin-right: 20px"></i>Edit
                </a>
            </div>
        </div>
        <hr style="margin-top:-15px">

        <div class="columns">
            <div class="column">
                <div class="field">
                    <label for="name" class="label">Name:</label>
                    <pre>{{$user->name}}</pre>
                </div>
                <div class="field">
                    <label for="email" class="label">Email Address:</label>
                    <pre>{{$user->email}}</pre>
                </div>
            </div>
        </div>
    </div>

@endsection
