@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third" style="margin-top:75px;margin-left:15px">
        <div class="card" style="border-radius:25px">
            <div class="card-header" style="border-radius:25px 25px 0px 0px">
                <div class="card-header-title is-centered">
                    <h1 class="title is-4">Welcome Back, Log In!</h1>
                </div>
            </div>
            <div class="card-content">
                <form action="{{route('login')}}" method="POST" role="form">
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
                    <div class="field">
                        <label for="password" class="label">Password:</label>
                        <p class="control">
                            <input class="input @error('password') is-danger @enderror" type="password" name="password" id="password" required autocomplete="current-password">
                        </p>
                        @error('password')
                            <p class="help is-danger" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                        <b-checkbox name="remember" class="m-t-20" v-model="remember" native-value="remember">Remember Me</b-checkbox>
                    <button class="button is-primary is-outlined is-fullwidth" style="margin-top:30px" type="submit">Log In</button>
                </form>

            </div>
            <div class="card-footer">
                <div class="card-footer-item">
                    <h5 class="has-text centered">
                        <a href="{{route('password.request')}}" class="is-muted">Forgot Password</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('images/login.png')}}" class="image" width="875px" height="50%">
</div>

@endsection

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {}
        });
    </script>
@endsection
