@extends('layouts.studio')

@section('title', '| Create a category')

@section('content')

    <div class="st-flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-admin has-text-info">Create a Category</h1>
            </div>
        </div>
        <hr style="margin-top:-15px">

        <form action="{{route('category.store')}}" method="post">
            {{ csrf_field() }}
            <div class="columns">
                <div class="column is-two-thirds">
                    <div class="field">
                        <div class="control">
                            <input class="input is-large" type="text" placeholder="Category title" name="title" v-model="title">
                        </div>
                    </div>

                    <slug-widget url="{{url('/')}}" subdirectory="c" :title="title" @copied="slugCopied" @slug-changed="updateSlug"></slug-widget>
                    <input type="hidden" v-model="slug" name="slug" />

                    <div class="field m-t-20">
                        <div class="control">
                            <input class="input is-medium" type="text" placeholder="Category Description" name="desc" >
                        </div>
                    </div>
                    <div class="primary-action-button">
                        <button class="button is-primary" type="submit">Create</button>
                    </div>
                    </div>
                <div class="column is-one-third">
                    <div class="card card-widget has-text-centered">
                        <div class="post-status-widget widget-area">
                            <div class="status">
                                <div class="status-details">
                                    <h4><span class="status-emphasis">Let's Create a category!</span></h4>
                                    <p>Hello there, Here we will create categories. Make your blog posts feel like they belong somewhere</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
