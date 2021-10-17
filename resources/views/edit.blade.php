@extends('layout')

@section('content')

<h1>Edit page</h1>

<div class="col-sm-6">
<form method="post" action="/edit">
@csrf
  <div class="mb-3">
    <label >Name</label>
    <input type="text" class="form-control" id="exampleInputName" value="{{$data->name}">
    <div id="nameHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label >Type</label>
    <input type="text" class="form-control" id="exampleInputType" value="{{$data->type}">
    <div id="typeHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label>Base</label>
    <input type="text" class="form-control" id="exampleInputBase" value="{{$data->base}">
    <div id="baseHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>

@end