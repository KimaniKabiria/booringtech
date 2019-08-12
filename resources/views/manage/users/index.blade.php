@extends('layouts.manage')

@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-4 has-text-info">Manage Users</h1>
            </div>
            <div class="column">
                <a href="{{route('users.create')}}" class="button is-primary is-pulled-right">
                    <i class="fa fa-user-plus" style="margin-right: 20px"></i>New User
                </a>
            </div>
        </div>
        <hr style="margin-top:-15px">

        <div class="card">
            <div class="card-content">
                <table class="table is-fullwidth">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th>{{$user->id}}</th>
                                <th>{{$user->name}}</th>
                                <th>{{$user->email}}</th>
                                <th>{{$user->created_at->toFormattedDateString()}}</th>
                                <th><div class="dropdown is-hoverable">
                                    <div class="dropdown-trigger">
                                        <button class="button is-link is-outlined">
                                        <span><h1 class="title is-7">More</h1></span>
                                        <span class="icon is-small">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span>
                                        </button>
                                    </div>
                                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                        <div class="dropdown-content">
                                            <a href="{{route('users.show', $user->id)}}" class="dropdown-item">
                                                View
                                            </a>
                                            <a href="{{route('users.edit', $user->id)}}" class="dropdown-item">
                                                Edit
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{ $users->links() }}
    </div>

@endsection
