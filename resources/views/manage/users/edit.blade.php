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
                <form action="{{route('users.update', $user->id)}}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="field">
                        <label for="name" class="label">Name:</label>
                        <p class="control">
                            <input class="input" type="text" name="name" id="name" value="{{$user->name}}">
                        </p>
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email Address:</label>
                        <p class="control">
                            <input class="input" type="text" name="email" id="email" value="{{$user->email}}">
                        </p>
                    </div>
                    <div class="field">
                        <label for="password" class="label">Password:</label>
                        <div class="block">
                            <b-radio v-model="passwordOptions"
                                name="password_options"
                                native-value="Keep">
                                Don't Change
                            </b-radio>
                            <b-radio v-model="passwordOptions"
                                name="password_options"
                                native-value="change">
                                Change
                            </b-radio>
                        </div>
                        <p class="control">
                            <input class="input" type="text" name="password" id="password" v-if="passwordOptions == 'change'">
                        </p>
                    </div>
                    <button class="button is-primary is-outlined is-fullwidth" style="margin-top:30px" type="submit">Edit</button>
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
                passwordOptions: 'keep'
            }
        });
    </script>

@endsection
