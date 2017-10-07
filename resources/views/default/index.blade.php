@extends('layouts.default')
@section('title', 'Dashboard')
@section('content')
<div class="row">
  <div class="col-lg-8 col-lg-offset-2">

   <form action="/savepost" method="post">
     {{ csrf_field() }}
    <div class="input-group">
      <input type="text" name="name" value="{{ ($getpost)? $getpost->name : '' }}"class="form-control" placeholder="Enter Name">
      <input type="hidden" name="id" value="{{ ($getpost)? $getpost->id : '' }}">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Save</button>
      </span>
    </div><!-- /input-group -->
  </form>

  </div><!-- /.col-lg-6 -->
 </div><!-- /.row -->



<br>
<div class="panel panel-default col-lg-8 col-lg-offset-2">
<!-- Default panel contents -->
<!-- Table -->
<table class="table">
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Action</th>
  </tr>

  @foreach($posts as $post)
  <tr>
    <td> {{ $post->id }} </td>
    <td> {{ $post->name }} </td>
    <td>
      <a href="/edit/{{ $post->id }}">Edit</a> | <a href="/delete/{{ $post->id }}">Delete</a>
    </td>
  </tr>
  @endforeach


</table>
</div>
@endsection
