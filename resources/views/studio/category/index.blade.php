@extends('layouts.studio')

@section('title', '| All Categories')

@section('content')

    <div class="st-flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-4 has-text-success is-admin">All Categories</h1>
            </div>
            <div class="column">
                <a href="{{route('category.create')}}" class="button is-primary is-pulled-right">
                    <i class="fa fa-pencil" style="margin-right: 20px"></i>Create
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
                            <th>Desc</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th>{{$category->id}}</th>
                                <th>{{$category->title}}</th>
                                <th>{{$category->desc}}</th>
                                <th>{{$category->created_at->toFormattedDateString()}}</th>
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
                                                <a href="{{route('category.show', $category->id)}}" class="dropdown-item">
                                                    View
                                                </a>
                                                <a href="{{route('category.edit', $category->id)}}" class="dropdown-item">
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

        {{-- {{ $categories->links() }} --}}
    </div>

@endsection
