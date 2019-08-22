@extends('layouts.studio')

@section('content')

    <div class="st-flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-4 has-text-info">Manage Users</h1>
            </div>
            <div class="column">
                <a href="{{route('posts.create')}}" class="button is-primary is-pulled-right">
                    <i class="fa fa-user-plus" style="margin-right: 20px"></i>New User
                </a>
            </div>
        </div>
        <hr style="margin-top:-15px">

    </div>

@endsection
