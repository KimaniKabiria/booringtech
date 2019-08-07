@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="notification is-success">
        {{ session('status') }}
    </div>
@endif

<div class="columns">
    <div class="column is-one-third is-offset-one-third">
        <img src="{{asset('images/reset.jpg')}}" class="image">
        <div class="card" style="border-radius:25px">
            <div class="card-header" style="border-radius:25px 25px 0px 0px">
                <div class="card-header-title is-centered">
                    <h1 class="title is-4">Forgot Password</h1>
                </div>
            </div>
            <div class="card-content">
                <form action="{{ route('password.email') }}" method="POST" role="form">
                    @csrf
                    <div class="field">
                        <label for="email" class="label">Email:</label>
                        <p class="control">
                            <input class="input @error('email') is-danger @enderror" type="text" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </p>
                        @error('email')
                            <p class="help is-danger" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                    <button class="button is-primary is-outlined is-fullwidth" style="margin-top:30px" type="submit">Send Password Reset Link</button>
                </form>

            </div>
            <div class="card-footer">
                <div class="card-footer-item">
                    <h5 class="has-text centered">
                        <a href="{{route('login')}}" class="is-muted">Go Back to Log In</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
