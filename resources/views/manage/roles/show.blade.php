@extends('layouts.manage')

@section('title', '| View Roles')

@section('content')
  <div class="flex-container">
    <div class="columns">
      <div class="column">
        <h1 class="title is-4 has-text-info">{{$role->display_name}}<small class="m-l-25"><em>({{$role->name}})</em></small></h1>
        <h5 style="margin-top:-20px">{{$role->description}}</h5>
      </div>
      <div class="column">
        <a href="{{route('roles.edit', $role->id)}}" class="button is-primary is-pulled-right">
            <i class="fa fa-edit" style="margin-right: 10px"></i> Edit this Role
        </a>
      </div>
    </div>
    <hr style="margin-top:-10px">

    <div class="columns">
      <div class="column">
        <div class="box">
          <article class="media">
            <div class="media-content">
              <div class="content">
                <h2 class="title">Permissions:</h1>
                <ul>
                  @foreach ($role->permissions as $r)
                    <li>{{$r->display_name}} <em class="m-l-15">({{$r->description}})</em></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
@endsection
