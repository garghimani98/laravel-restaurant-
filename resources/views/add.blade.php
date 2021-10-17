@extends('layout')

@section('content')
<h1>Add page</h1>
<div class="col-sm-6">
<form method="post" action="/add">
@csrf
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
    <div id="nameHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputType" class="form-label">Type</label>
    <input type="text" class="form-control" id="exampleInputType">
    <div id="typeHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputBase" class="form-label">Base</label>
    <input type="text" class="form-control" id="exampleInputBase">
    <div id="baseHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop