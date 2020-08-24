@extends('layout')

@section('head')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css" integrity="sha512-pZ6G8XWT27hupxzpO+NCrm+NbOHwDeQjMT3QD33NTvIdDi9geOaH8uKndoauBByfCvLvHYmamZPO6LD+aiOVVQ==" crossorigin="anonymous" />
@endsection

@section('content')
  <div id="wrapper">
    <div id="page" class="container">
      <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

      <form action="/articles" method="POST">
        @csrf
        <div class="field">
          <label for="title" class="label">Title</label>

          <div class="controll">
            <input type="text" class="input" name="title" id="title">
          </div>
        </div>

        <div class="field">
          <label for="excerpt" class="label">Excerpt</label>

          <div class="controll">
            <textarea class="input" name="excerpt" id="excerpt"></textarea>
          </div>
        </div>

        <div class="field">
          <label for="body" class="label">Body</label>

          <div class="controll">
            <textarea class="input" name="body" id="body"></textarea>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <button type="submit" class="button is-link">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>    
@endsection