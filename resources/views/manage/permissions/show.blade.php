@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns">
      <div class="column">
        <h1 class="title is-4 has-text-info">View Permission Details</h1>
      </div>

      <div class="column">
        <a href="{{route('permissions.edit', $permission->id)}}" class="button is-primary is-pulled-right">
            <i class="fa fa-edit" style="margin-right:10px"></i> Edit Permission
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
                <p>
                  <strong>{{$permission->display_name}}</strong> <small>{{$permission->name}}</small>
                  <br>
                  {{$permission->description}}
                </p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
@endsection
