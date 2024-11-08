@extends('index')
@section('body')

<section class="py-5"><div class="container">
          
<div class="row d-flex">
            
<div class="col-12">
              
<h3 class="mb-2 text-center h2">Recent Blog Posts</h3>
<p class="mb-5 text-center">Sub-title - Equal height cards grid</p></div>


       <div class="col-sm-6 col-md-4  d-flex ">

            
        @foreach ($posts as $post)

        <article class="card mb-4 border-right-0 border-left-0 border-top-0 border-bottom-0">
        <header class="py-md-3 px-md-4">
                  
        <p class="mb-2">
        <a href="#" class="text-dark"> 3 years ago </a> in
        <a href="#" class="text-dark">Deals</a>
        </p>
                  
                <a href="#">
                <h4 class="card-title text-dark">{{$post->tytul}}</h4>
                </a>
                </header>
                 
                {{$post->getFirstMedia('image_path')}}
                
                
                <div class="card-body">
                <p style="margin-right:12px; width:750px;" class="card-text">{{$post->naglowek}}<a href="{{route('view_article',$post->id)}}">  read more  </a><br></p>
                  
                 </div>
                 @endforeach
                </article>
                
             </section>
 
 
@endsection