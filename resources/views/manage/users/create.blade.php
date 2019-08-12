@extends('layouts.manage')

@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-4 has-text-primary">Create a User</h1>
            </div>
        </div>
        <hr style="margin-top:-15px">

        <div class="columns">
            <div class="column is-one-third is-offset-one-third">
                <form action="{{route('users.store')}}" method="POST">
                    @csrf
                    <div class="field">
                        <label for="name" class="label">Name:</label>
                        <p class="control">
                            <input class="input" type="text" name="name" id="name" >
                        </p>
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email Address:</label>
                        <p class="control">
                            <input class="input" type="text" name="email" id="email">
                        </p>
                    </div>
                    <div class="field">
                        <label for="password" class="label">Password:</label>
                        <p class="control">
                            <input class="input" type="text" name="password" id="password">
                            {{-- <b-checkbox name="auto_generate" style="margin-top:20px" v-model="auto_password">Auto Generate Password</b-checkbox> --}}
                        </p>
                    </div>
                    <button class="button is-primary is-outlined is-fullwidth" style="margin-top:30px" type="submit">Create User</button>
                </form>
            </div>
        </div>

    </div>

@endsection

@section('scripts')

    <script>
        var app = new Vue({
            el:'#app',
            data: {
                auto_password: true
            }
        });
    </script>

@endsection
