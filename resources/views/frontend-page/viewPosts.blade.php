 @extends('layouts.appf')
 @section('content')

<div class="card">
  <div class="card-header">
   {{$viewposts->tytul}}
  </div>
  <div class="card-body">
    <blockquote style="border-style:none;">

      <footer class="blockquote-footer" >Someone famous in <cite title="Source Title"><h3> {{$viewposts->naglowek}}</h3></cite></footer>
      <p style="text-align:justify;text-indent:2px;word-spacing:1px;font-size:16px;"> {{$viewposts->tresc}}</p>
    </blockquote>
  </div>
</div>



<div class="col-lg-8 col-md-12">

                       <div class="header">
                        <P><h5>comment {{$viewposts->Comments->count()}}</h5></P>
                </div>

    <div class="body">
    <div style="margin:0 auto; ;padding:12px 12px 12px 12px;width:1000px;
              text-align:left;text-align:justify;text-indent:20px;letter-spacing:1px;">
        @foreach($viewposts->Comments as $coment)
               <ul class="comment-reply list-unstyled">
                        <li class="row clearfix">

     <div class="icon-box col-md-2 col-4">
       <img class="img-fluid img-small" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Awesome Image"></div>
           <div class="text-box col-md-10 col-8 p-l-0 p-r0">
             <h5 class="m-b-0">{{$coment->nickcomentarza}}</h5>
                <p>{{$coment->contents}}</p>

                <ul class="list-inline">
                <li><a href="javascript:void(0);">{{$coment->created_at}}</a></li>
                <li><a href="javascript:void(0);">Reply</a></li>

             </ul>
         </div>
      </li>
    @endforeach

	        <div class="card">
               <div class="header">
                    <h2>Leave a reply <small>Your email address will not be published. Required fields are marked*</small></h</div>
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
