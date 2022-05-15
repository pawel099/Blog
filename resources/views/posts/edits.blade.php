<x-app-layout>
    <x-slot name="header">
        <h5 class="m-0"> </h5>
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active"> </li>
    </x-slot>

<div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-8">
                      <div class="card">


                          <div class="card-header"> </div>
                            <div style="background-color:#f5f5f5" class="card-body">
                              <form method="POST" action="{{route('UpdatesPost',$posts->id)}}" enctype="multipart/form-data">


                                  @csrf

                                  <div class="form-group row">
                                      <label for="name" class="col-md-4 col-form-label text-md-right">nick</label>

                                      <div class="col-md-6">
                                          <input id="nick" type="text" maxlength="500" class="form-control @error('nick') is-invalid @enderror" name="nick" value="{{$posts->nick}}" required autocomplete="nick" autofocus>

                                          @error('name')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>




                             <div class="form-group row">
                                           <label for="email" class="col-md-4 col-form-label text-md-right"> email</label>

                                           <div class="col-md-6">
                                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$posts->email}}" required autocomplete="amount"/>

                                               @error('email')
                                                   <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                   </span>
                                               @enderror
                                           </div>
                                  </div>





                                  <div class="form-group row">
                                           <label for="tytul" class="col-md-4 col-form-label text-md-right"> tytul</label>

                                           <div class="col-md-6">
                                               <input id="tytul" type="text" class="form-control @error('tytul') is-invalid @enderror" name="tytul" value="{{$posts->tytul}} " required autocomplete="amount" autofocus>

                                               @error('tytul')
                                                   <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                   </span>
                                               @enderror
                                           </div>
                                  </div>



                      <div class="form-group row">

                      <label for="naglowek" class="col-md-4 col-form-label text-md-right"> naglowek</label>

                      <div class="col-md-6">
               <input id="naglowek" type="text" class="form-control @error('naglowek') is-invalid @enderror" name="naglowek" value="{{$posts->naglowek}}" required autocomplete="amount"/>

              @error('naglowek')
              <span class="invalid-feedback" role="alert">
                                                                                                                                       <strong>{{ $message }}</strong>
              </span>
           @enderror
            </div>
   </div>

                <div class="form-group row">
                                      <label for="description" class="col-md-4 col-form-label text-md-right"> treść </label>

                                      <div class="col-md-6">
                                          <textarea id="tresc" maxlength="1500" class="form-control @error('tresc') is-invalid @enderror" name="tresc" > {{$posts->tresc}}</textarea>

                                          @error('tresc')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>


                       <div class="form-group row">
                                      <label for="image" class="col-md-4 col-form-label text-md-right">wybierz plik</label>

                                      <div class="col-md-6">
                                          <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                                          @error('image')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>

                    <div class="form-group row">
                 <div class="offset-md-4 col-md-6">
                          <a href="">
                    <img src="" alt="">
                        </a>

                  </div>
               </div>

                                  <div class="form-group row mb-0 float-right">
                                      <div class="col-md-6">

                                          <button type="submit" class="btn btn-primary">zapisz
                                          </button>

                                      </div>
                                  </div>
                              </form>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
     </div>



</x-app-layout>





























