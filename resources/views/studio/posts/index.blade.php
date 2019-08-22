@extends('layouts.studio')

@section('title', '| All Posts')

@section('content')

    <div class="st-flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-4 has-text-success is-admin">All Posts</h1>
            </div>
            <div class="column">
                <a href="{{route('posts.create')}}" class="button is-primary is-pulled-right">
                    <i class="fa fa-pencil" style="margin-right: 20px"></i>Write a Post
                </a>
            </div>
        </div>
        <hr style="margin-top:-15px">

        <div class="card">
            <div class="card-content">
                <table class="table is-fullwidth is-mobile">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Content</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th>{{$post->id}}</th>
                                <th>{{$post->title}}</th>
                                <th>{{$post->subtitle}}</th>
                                <th>{{ substr(strip_tags($post->content), 0, 50) }}{{ strlen(strip_tags($post->content)) > 50 ? "..." : "" }}</th>
                                <th>{{$post->created_at->toFormattedDateString()}}</th>
                                <th>
                                    <div class="dropdown is-hoverable is-up">
                                        <div class="dropdown-trigger">
                                            <button class="button is-link is-outlined">
                                            <span><h1 class="title is-7">More</h1></span>
                                            <span class="icon is-small">
                                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                            <div class="dropdown-content">
                                                <a href="{{route('posts.show', $post->id)}}" class="dropdown-item">
                                                    View
                                                </a>
                                                <a href="{{route('posts.edit', $post->id)}}" class="dropdown-item">
                                                    Edit
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{ $posts->links() }}
    </div>

@endsection
