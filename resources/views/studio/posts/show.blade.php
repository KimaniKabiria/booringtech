@extends('layouts.studio')

@section('title', '| View Post')

@section('content')

    <div class="st-flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-3 has-text-success is-admin">{{ $post->title }}</h1>
                <p class="has-text-warning" style="margin-top:-15px" >{{ $post->subtitle }}</p>
            </div>
            <div class="column">
                <a href="{{route('posts.edit', $post->id)}}" class="button is-primary is-pulled-right">
                    <i class="fa fa-pencil" style="margin-right: 20px"></i>Edit this Post
                </a>
            </div>
        </div>
        <hr style="margin-top:-15px">

        <div class="columns">
            <div class="column is-three-quarters-desktop is-three-quarters-tablet">
                <div class="card" style="border-radius:15px">
                    <div class="card-content">
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
            </div>
            <div class="column is-one-quarter-desktop is-narrow-tablet">
                <div class="card card-widget">
                    <div class="author-widget widget-area">
                        <div class="selected-author">
                            <img src="https://placehold.it/50x50"/>
                            <div class="author">
                                <h4>Alex Curtis</h4>
                            <p class="subtitle">
                                (jacurtis)
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="post-status-widget widget-area">
                        <div class="status">
                            <div class="icon is-large">
                                <i class="fa fa-pencil"></i>
                            </div>
                            <div class="status-details">
                                <h4><span class="status-emphasis">Created</span> at</h4>
                                <p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="post-status-widget widget-area">
                        <div class="status">
                            <div class="icon is-large">
                                <i class="fa fa-edit"></i>
                            </div>
                            <div class="status-details">
                                <h4><span class="status-emphasis">Updated</span> at</h4>
                                <p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
