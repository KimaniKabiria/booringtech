@extends('layouts.manage')

@section('title', '| Edit Permissions')

@section('content')
  <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-4 has-text-info">Edit Permission Details</h1>
            </div>
        </div>
        <hr style="margin-top:-10px">

    <form action="{{route('permissions.update', $permission->id)}}" method="POST">
      {{csrf_field()}}
      {{method_field('PUT')}}

      <div class="field">
        <label for="display_name" class="label">Name (Display Name)</label>
        <p class="control">
          <input type="text" class="input" name="display_name" id="display_name" value="{{$permission->display_name}}">
        </p>
      </div>

      <div class="field">
        <label for="name" class="label">Slug <small>(Cannot be changed)</small></label>
        <p class="control">
          <input type="text" class="input" name="name" id="name" value="{{$permission->name}}" disabled>
        </p>
      </div>

      <div class="field">
        <label for="description" class="label">Description</label>
        <p class="control">
          <input type="text" class="input" name="description" id="description" placeholder="Describe what this permission does" value="{{$permission->description}}">
        </p>
      </div>

      <button class="button is-primary">Save Changes</button>
    </form>
  </div>
@endsection
