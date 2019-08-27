@extends('layouts.studio')

@section('title', '| Tags')

@section('content')

    <div class="st-flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-4 has-text-success is-admin">Tags</h1>
            </div>
        </div>
        <hr style="margin-top:-15px">

        <div class="columns">
            <div class="column is-two-thirds-desktop is-two-thirds-tablet">
                <div class="columns">
                    <div class="column">
                        <h1 class="title is-5 has-text-info">All Tags</h1></div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <table class="table is-fullwidth is-mobile">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                    <tr>
                                        <th>{{$tag->id}}</th>
                                        <th>{{$tag->name}}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="column is-one-third-desktop is-one-third-tablet">
                <div class="card" style="border-radius:15px">
                    <div class="card-content">
                        <h4 class="title is-5">Let's Create a Tag!</h4>
                        <p>Hello there, Here we will create categories. Make your blog posts feel like they belong somewhere</p>
                        <form action="{{route('tags.store')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="columns m-t-20">
                                <div class="column">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input is-large" type="text" placeholder="Tag Name" name="name">
                                        </div>
                                    </div>
                                    <button class="button is-primary is-fullwidth" type="submit">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        {{-- {{ $categories->links() }} --}}
    </div>

@endsection
