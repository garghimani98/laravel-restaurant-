@extends('layout')

@section('content')
<h1>List page</h1>
@if(Session->get('status'))

<div class="alert alert-success" role="alert">
{{Session::get('status')}}
  <h4 class="alert-heading alert-success">Well done!</h4>
  <p>Aww yeah, you successfully entered new item. </p>
  <hr>
  
</div>

@endif

 <table class="table">
  <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">1</th>
      <td>{{$item->name}}</td>
      <td>{{$item->type}}</td>
      <td>{{$item->base}}</td>
      <td><a href="/delete/{{$item->id}}"><i class="fa fa-trash"></i></a>
      <a href="/edit/{{$item->id}}"><i class="fa fa-trash"></i></a>
      </td>
      
    </tr>
    
  
  @endforeach
  </tbody>
</table>



@stop