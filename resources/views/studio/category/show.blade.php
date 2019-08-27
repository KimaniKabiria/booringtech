@extends('layouts.studio')

@section('title', '| View Category')

@section('content')

    <div class="st-flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-3 has-text-success is-admin">View a Category</h1>
            </div>
        </div>
        <hr style="margin-top:-15px">

        <div class="columns">
            <div class="column is-two-thirds">
                <div class="card" style="border-radius:15px">
                    <div class="card-content">
                        <div class="field">
                            <label for="title" class="label">Tile:</label>
                            <pre>{{$category->title}}</pre>
                        </div>
                        <div class="field">
                            <label for="slug" class="label">Slug:</label>
                            <pre>{{$category->slug}}</pre>
                        </div>
                        <div class="field">
                            <label for="desc" class="label">Description:</label>
                            <pre>{{$category->desc}}</pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-one-quarter-desktop is-narrow-tablet">
                <div class="card card-widget" style="border-radius:15px">
                    <div class="post-status-widget widget-area">
                        <div class="status">
                            <div class="icon is-large">
                                <i class="fa fa-pencil"></i>
                            </div>
                            <div class="status-details">
                                <h4><span class="status-emphasis">Created</span> at</h4>
                                <p>{{ date('M j, Y h:ia', strtotime($category->created_at)) }}</p>
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
                                <p>{{ date('M j, Y h:ia', strtotime($category->updated_at)) }}</p>
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
                            <a href="{{route('category.edit', $category->id)}}">
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
