@extends('layouts.studio')

@section('title', '| Edit a Category')

@section('content')

    <div class="st-flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-admin has-text-info">Edit this Category</h1>
            </div>
        </div>
        <hr style="margin-top:-15px">

        <form action="{{route('category.update', $category->id)}}" method="post">

            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="columns">
                <div class="column is-three-quarters-desktop is-three-quarters-tablet">
                    <div class="field">
                        <div class="control">
                            <input class="input is-large" type="text" value="{{$category->title}}" id="title" name="title">
                        </div>
                    </div>

                    {{-- <slug-widget url="{{url('/')}}" subdirectory="blog" :title="title" @copied="slugCopied" @slug-changed="updateSlug"></slug-widget>
                    <input type="hidden" v-model="slug" name="slug" /> --}}

                    <div class="field m-t-20">
                        <div class="control">
                            <input class="input is-medium" type="text" value="{{$category->desc}}" id="desc" name="desc" >
                        </div>
                    </div>
                </div>

                <div class="column is-one-quarter-desktop is-narrow-tablet">
                <div class="card card-widget">
                    <div class="publish-buttons-widget widget-area">
                    <div class="primary-action-button">
                        <button class="button is-primary is-fullwidth" type="submit">Update</button>
                    </div>
                    </div>
                </div>
                </div> <!-- end of .column.is-one-quarter -->
            </div>
        </form>

    </div>

@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        title: '',
        slug: '',
        content: '',
        subtitle: '',
        api_token: '{{Auth::user()->api_token}}'
      },
      methods: {
        updateSlug: function(val) {
          this.slug = val;
        },
        slugCopied: function(type, msg, val) {
          notifications.toast(msg, {type: `is-${type}`});
        }
      }
    });
  </script>
@endsection
