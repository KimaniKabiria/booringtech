@extends('layouts.app')

@section('content')


<div class="columns">
    <img src="{{asset('images/joinus.png')}}" class="image" width="900px" height="50%">
    <div class="column is-one-third" style="margin-top:75px">
        <div class="card" style="border-radius:25px">
            <div class="card-header" style="border-radius:25px 25px 0px 0px">
                <div class="card-header-title is-centered">
                    <h1 class="title is-4">Hello There, Join Us!</h1>
                </div>
            </div>
            <div class="card-content">
                <form action="{{route('register')}}" method="POST" role="form">
                    @csrf
                    <div class="field">
                        <label for="name" class="label">Name:</label>
                        <p class="control">
                            <input class="input @error('name') is-danger @enderror" type="text" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </p>
                        @error('name')
                            <p class="help is-danger" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email Address:</label>
                        <p class="control">
                            <input class="input @error('email') is-danger @enderror" type="text" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </p>
                        @error('email')
                            <p class="help is-danger" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="password" class="label">Password:</label>
                        <p class="control">
                            <input class="input @error('password') is-danger @enderror" type="password" name="password" id="password" required autocomplete="new-password">
                        </p>
                        @error('password')
                            <p class="help is-danger" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="password" class="label">Confirm Password:</label>
                        <p class="control">
                            <input class="input " type="password" name="password-confirmation" id="password-confirm" required autocomplete="new-password">
                        </p>
                    </div>
                    <button class="button is-primary is-outlined is-fullwidth" style="margin-top:30px" type="submit">Register</button>
                </form>

            </div>
            <div class="card-footer">
                <div class="card-footer-item">
                    <h5 class="has-text centered">
                        <a href="{{route('login')}}" class="is-muted">Already a member?</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
