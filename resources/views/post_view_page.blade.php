@extends('index')
@section('body')

<section class="pt-5 pb-5">
  <div class="container">
    <article class="row card  border-0 flex-md-row justify-content-between align-items-center card-top">
        <a class="col-md-5  order-md-2 order-1 w-md-25" href="#">
            
        </a>
        <div class="card-body order-2 order-md-1 col-md-7">
            <div class=" text-uppercase font-weight-bold mb-4 text-warning">Featured Article</div>
            <h2 class="card-title display-4 font-weight-bold">
                <a href="#" class="text-dark" title="Blog title">{{$viewposts->tytul}}</a>
              </h2>
            <div class="card-text mb-4">
                <p style="text-align:justify" class="lead"> {{$viewposts->tresc}} </p>
            </div>
            <div class="mt-auto d-flex align-items-center pt-2">
                <div class="mr-3">
                    <img class="d-block img-fluid rounded-circle" src="https://via.placeholder.com/40x40/5fa9f8/ffffff " srcset="https://via.placeholder.com/120x120/5fa9f8/ffffff 2x" alt="user">
                </div>
                <div class="d-block">
                    <div class="font-weight-bold"><span>added by user</span></div>
                    <div class="text-grey"><span style="font-size:11px">{{$viewposts->updated_at}}</span></div>
                </div>
            </div>
        </div>
    </article>
</div>
</section>



<div style="padding-bottom:50px;" class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="d-flex flex-column comment-section">
                <div class="bg-white p-2">
                    <div class="d-flex flex-row user-info"> 
                    @foreach ($viewposts->comments as $coment)

                    @if ($coment->status==1)
                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">{{$coment->nick}}</span><span class="date text-black-50">Shared publicly - {{$coment->updated_at}}</span></div>
                    </div>
                    <div class="mt-2">
                        <p class="comment-text"> 
                            
                            {{$coment->contents}}
                            @endif
                            @endforeach
                            
                        </p>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="d-flex flex-row fs-12">
                        <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
                        <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment ({{$viewposts->comments->count()}})
                    </span></div>
                  
                        <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>
                    </div>
                </div>
                <div class="bg-light p-2">
                    <form  method="POST" action="{{route('comment',$viewposts->id)}}">
                    @csrf
                    <div class="d-flex flex-row align-items-start"> <input type="text" name="nick" class="form-control ml-1 " placeholder="podaj nick"></div><p>
                    <div class="d-flex flex-row align-items-start"> <input type="text" name="email" class="form-control ml-1" placeholder="podaj email"></div><p>
                    
                    <div class="d-flex flex-row align-items-start"> <textarea name="contents" class="form-control ml-1 shadow-none textarea"></textarea></div>
                    <div class="d-flex flex-row align-items-start"> <input type="hidden" name="comments_id" value="{{$viewposts->id}}"> </div>
                    <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="Submit">Post comment</button><button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection          