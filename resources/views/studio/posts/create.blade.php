@extends('layouts.studio')

@section('content')

    <div class="st-flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-admin has-text-info">Write a Post</h1>
            </div>
        </div>
        <hr style="margin-top:-15px">

        <form action="{{route('posts.store')}}" method="post">
                {{ csrf_field() }}
                <div class="columns">
                  <div class="column is-three-quarters-desktop is-three-quarters-tablet">
                    <b-field>
                      <b-input type="text" placeholder="Post Title" size="is-large" v-model="title">
                      </b-input>
                    </b-field>

                    <slug-widget url="{{url('/')}}" subdirectory="blog" :title="title" @copied="slugCopied" @slug-changed="updateSlug"></slug-widget>
                    <input type="hidden" v-model="slug" name="slug" />

                    <b-field class="m-t-40">
                      <b-input type="textarea"
                          placeholder="Compose your masterpiece..." rows="20">
                      </b-input>
                    </b-field>
                  </div> <!-- end of .column.is-three-quarters -->

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
                        <div class="secondary-action-button">
                          <button class="button is-info is-outlined is-fullwidth">Save Draft</button>
                        </div>
                        <div class="primary-action-button">
                          <button class="button is-primary is-fullwidth">Publish</button>
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
