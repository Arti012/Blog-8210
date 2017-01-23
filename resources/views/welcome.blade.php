@extends('app')
@section('content')
<div class ="container">
     <div class="row">
          <div class="col-md-12">
             <div class="jumbotron">
                 <h1>Welcome to my Blog</h1>
                     <p>Encouraging sharing and learning</p>
              <p><a class="btn btn-success" href="{{url('/posts/create')}}" role="button">create post</a></p>
            </div>
           <!-- <div class="col-md-3 col-md-0ffset-1">
               <h2> Sidebar </h2>
               <p1>About me here i am arti mukati</p1>
             </div>-->  


  @endsection