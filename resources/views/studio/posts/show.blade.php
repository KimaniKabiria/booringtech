@extends('layouts.studio')

@section('title', '| View Post')

@section('content')

    <div class="st-flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-3 has-text-success is-admin">{{ $post->title }}</h1>
                <h3 class="title has-text-info is-5" style="margin-top:-15px" >{{ $post->subtitle }}</h3>
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
                <div class="card card-widget" style="border-radius:15px">
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
                    <div class="post-status-widget widget-area">
                        <div class="status">
                            <div class="field m-l-15">
                                <label for="categories" class="title is-5 has-text-info">Category:</label>
                                <p>{{ $post->category->title }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="publish-buttons-widget widget-area">
                        <div class="secondary-action-button">
                            <a href="#">
                                <button class="button is-danger is-outlined is-fullwidth">
                                    <i class="fa fa-trash" style="margin-right: 20px"></i>
                                    Trash
                                </button>
                            </a>
                        </div>
                        <div class="primary-action-button">
                            <a href="{{route('posts.edit', $post->id)}}">
                                <button class="button is-primary is-fullwidth">
                                    <i class="fa fa-edit" style="margin-right: 20px"></i>
                                    Edit
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
