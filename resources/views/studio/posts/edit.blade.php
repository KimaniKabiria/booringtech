@extends('layouts.studio')

@section('title', '| Write A Post')

@section('content')

    <div class="st-flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-admin has-text-info">Edit this Post</h1>
            </div>
        </div>
        <hr style="margin-top:-15px">

        <form action="{{route('posts.update', $post->id)}}" method="post">

            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="columns">
                <div class="column is-three-quarters-desktop is-three-quarters-tablet">
                    <div class="field">
                        <div class="control">
                            <input class="input is-large" type="text" value="{{$post->title}}" id="title" name="title">
                        </div>
                    </div>

                    {{-- <slug-widget url="{{url('/')}}" subdirectory="blog" :title="title" @copied="slugCopied" @slug-changed="updateSlug"></slug-widget>
                    <input type="hidden" v-model="slug" name="slug" /> --}}

                    <div class="field m-t-20">
                        <div class="control">
                            <input class="input is-medium" type="text" value="{{$post->subtitle}}" id="subtitle" name="subtitle" >
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <textarea class="textarea " id="content" name="content" rows="20">{{$post->content}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="column is-one-quarter-desktop is-narrow-tablet">
                <div class="card card-widget">
                    <div class="author-widget widget-area">
                    <div class="selected-author">
                        <img src="https://placehold.it/50x50"/>
                        <div class="author">
                        <h4>Alex Curtis</h4>
                        <p class="subtitle">
                            (jacurtis)
                        </p>
                        </div>
                    </div>
                    </div>
                    <div class="post-status-widget widget-area">
                    <div class="status">
                        <div class="status-icon">
                        <b-icon icon="assignment" size="is-medium"></b-icon>
                        </div>
                        <div class="status-details">
                        <h4><span class="status-emphasis">Draft</span> Saved</h4>
                        <p>A Few Minutes Ago</p>
                        </div>
                    </div>
                    </div>
                    <div class="publish-buttons-widget widget-area">
                    {{-- <div class="secondary-action-button">
                        <button class="button is-info is-outlined is-fullwidth">Save Draft</button>
                    </div> --}}
                    <div class="primary-action-button">
                        <button class="button is-primary is-fullwidth" type="submit">Publish</button>
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
