@extends('layouts/master')

@section('content')

<h1> Create post </h1>

<form method="POST" action="/posts">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="textInputTitle">Title</label>
    <input type="text" class="form-control" id="textInputTitle", name="title">
  </div>

  <div class="form-group">
    <label for="textInputBody">Body</label>
    <textarea id="body" name="body" class="form-control"></textarea>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
