@extends('layouts.manage')

@section('title', '| Edit User')

@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-4 has-text-primary">Edit User</h1>
            </div>
        </div>
        <hr style="margin-top:-15px">

        <form action="{{route('users.update', $user->id)}}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="columns">
                <div class="column">
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
                </div>
                <div class="column">
                    <label for="roles" class="label">Roles:</label>
                    <input type="hidden" name="roles" :value="rolesSelected" />

                    @foreach ($roles as $role)
                    <div class="field">
                        <b-checkbox v-model="rolesSelected" :native-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
                    </div>
                    @endforeach
                </div>
            </div>
            <hr style="margin-bottom:10px">
            <div class="columns">
                <div class="column">
                    <button class="button is-primary is-outlined is-pulled-right" style="width:250px" type="submit">Edit</button>
                </div>
            </div>
        </form>

    </div>

@endsection

@section('scripts')

    <script>
        var app = new Vue({
            el:'#app',
            data: {
                passwordOptions: 'keep',
                rolesSelected: {!! $user->roles->pluck('id') !!}
            }
        });
    </script>

@endsection
