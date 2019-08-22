@extends('layouts.manage')

@section('title', '| All Permissions')

@section('content')
  <div class="flex-container">
    <div class="columns">
      <div class="column">
        <h1 class="title is-4 has-text-info">Manage Permissions</h1>
      </div>
      <div class="column">
        <a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right">
            <i class="fa fa-plus" style="margin-right: 10px"></i>
            Create New Permission
        </a>
      </div>
    </div>
    <hr style="margin-top:-10px">

    <div class="card">
      <div class="card-content">
        <table class="table is-fullwidth">
          <thead>
            <tr>
              <th>Name</th>
              <th>Slug</th>
              <th>Description</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            @foreach ($permissions as $permission)
              <tr>
                <th>{{$permission->display_name}}</th>
                <td>{{$permission->name}}</td>
                <td>{{$permission->description}}</td>
                <td class="has-text-right"><a class="button is-outlined is-small m-r-5" href="{{route('permissions.show', $permission->id)}}">View</a><a class="button is-outlined is-small" href="{{route('permissions.edit', $permission->id)}}">Edit</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
