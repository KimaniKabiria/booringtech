@extends('layouts.studio')

@section('content')

    <div class="st-flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-4 has-text-info">All Posts</h1>
            </div>
            <div class="column">
                <a href="{{route('posts.create')}}" class="button is-primary is-pulled-right">
                    <i class="fa fa-pencil" style="margin-right: 20px"></i>Write a Post
                </a>
            </div>
        </div>
        <hr style="margin-top:-15px">

    </div>

@endsection
