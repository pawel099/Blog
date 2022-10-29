@extends('layouts.appf')
@section('content')

<div style="margin:0 auto; width:1000px;">
<section class="pt-5 pb-5">
  <div class="container">
    <article class="row card  border-0 flex-md-row justify-content-between align-items-center card-top">
        <a class="col-md-5  order-md-2 order-1 w-md-25" href="#">
            <img class="img-fluid" src="https://via.placeholder.com/1100x1000/5fa9f8/ffffff" srcset="{{asset('storage/'.$viewposts->image_path)}}" alt="Pic 8">
        </a>
        <div class="card-body order-2 order-md-1 col-md-7">
            <div class=" text-uppercase font-weight-bold mb-4 text-warning">Featured Article</div>
            <h2 class="card-title display-4 font-weight-bold">
                {{$viewposts->tytul}}
              </h2>
            <div class="card-text mb-4">
                <p class="lead">{{$viewposts->naglowek}}

				</p>

            </div>
            <div class="mt-auto d-flex align-items-center pt-2">

                <div class="mr-3">
                    <img class="d-block img-fluid rounded-circle" src=" " srcset="https://via.placeholder.com/120x120/5fa9f8/ffffff 2x" alt="user">
                </div>
                <div class="d-block">
                    <div class="font-weight-bold">User Name</div>
                    <div style="font-family:arial; font-size:11px;" class="text-grey">dodano {{$viewposts->created_at}} 4 min czytania</div>
                </div>
            </div>
        </div>
    </article>
</div>
</section>

<div style="padding:10px 10px 10px 10px;">



                 <h3><a href="blog-details.html"> </a></h3>
                 <p><h1></h1></p>
                 <p><h5></h5></p>
                 <p><p style="text-align:justify;">{{$viewposts->tresc}}</p> </p>



                 @foreach($viewposts->Comments as $coment)
                                <ul class="comment-reply list-unstyled">
                                         <li class="row clearfix">
                 @if ($coment->status=='T')
                      <div class="icon-box col-md-2 col-4">
                        <p><img class="img-fluid img-small" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Awesome Image"></div>
                            <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                 <h5 class="m-b-0">{{$coment->nickcomentarza}}</h5>

                                 <p>{{$coment->contents}}</p>

                                 <ul class="list-inline">
                                 <li><a href="javascript:void(0);">{{$coment->created_at}}</a></li>
                                 <li><a href="javascript:void(0);">Reply</a></li>

                                  </ul>
                              </li>
         @endif
               @endforeach


</div>

<div class="card">
               <div class="header">
                     </div>

                        <div class="body">
                            <div class="comment-form">
                               <form method="POST" action="{{route('add_coment',$viewposts->id)}}" class="row clearfix">
                                   @csrf

                          <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="comments_id" value="{{$viewposts->id}}">
                                          <input type="text" class="form-control" name="nickcomentarza" placeholder="Your Name"></div>
                                               </div>


                            <div class="col-sm-6">
                                   <div class="form-group">
                                         <input type="text" class="form-control" name="adresemail" placeholder="Email Address">
                              </div>
                           </div>

							 <div class="col-sm-12">
                                 <div class="form-group">
                                 <textarea rows="4" class="form-control no-resize" name="contents" placeholder="Please type what you want..."></textarea></div>
                                 <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                             </div>
                          </form>
                        </div>
                      </div>
					</div>
              @endsection















