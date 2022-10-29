@extends('layouts.appf')
@section('content')



<section class="pt-5 pb-5">
    <div class="container">
	
	
	
            <div class="row">
            <div class="col-lg-7 mb-4">
			@foreach ($program as $posts)
			<h2>{{$posts->tytul}}</h2> 
            <img class="img-fluid rounded mb-3" src="{{asset('storage/'.$posts->image_path)}}" alt="A guide to building your online presence">
			<a href="#" class="mt-4 h2 text-dark"> </a>
			  
<p class="mt-4">{{$posts->naglowek}}.</p>

<div class="d-flex text-small">
                    
                    <p><span class="text-muted ml-1">dodano {{$posts->created_at}}</span></p>
					&nbsp &nbsp <a href="{{route('coments',$posts->id)}}">czytaj wiecej</a>
					<span class="text-muted ml-1"> </span> 
                    </div>
				  
	<! –posts –>			  
				  
				  
@endforeach				  
				  
</div>

    <div class="col-lg-5 ">
	<p><h5>wiadomości:</h5>
	
	
  @foreach ($program as $posts)			  
			  
			  
			 
              <ul class="list-unstyled">
			  
              <li class="row mb-4">
                <a href="#" class="col-3">
                  <img src="{{asset('storage/'.$posts->image_path)}}" alt="Image" class="rounded img-fluid"> 
                </a>
				<p>
                <div class="col-9">
                  <a href="#">
                    <span style="font-family:arial;font-size:12px;" class="mb-3 h5 text-dark">{{$posts->tytul}}</span>
                  </a>
                  <div class="d-flex text-small">
                    <a href="#"> </a>
                    <span class="text-muted ml-1">  </span>
                  </div>
                </div>
				
              </li>
			  
			  
			  
		 
			  
@endforeach		  
			  
			  
             </div>
          </div>
        </div>
		
		
      </section>

 @endsection






