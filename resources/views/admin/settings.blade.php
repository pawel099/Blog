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
                                @foreach ($wyniki as $wynik )
                                posty:# {{$wynik->id}}
                                  <form method="POST" action=" " enctype="multipart/form-data">


                                      @csrf

                                      <div class="form-group row">
                                          <label for="name" class="col-md-4 col-form-label text-md-right">nick</label>

                                          <div class="col-md-6">
                                              <input id="nick" type="text" maxlength="500" class="form-control @error('nick') is-invalid @enderror" name="nick" value="{{$wynik->nick}}" required autocomplete="nick" autofocus disabled>

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
                                                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$wynik->email}}" required autocomplete="amount" disabled/>

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
                                                   <input id="tytul" type="text" class="form-control @error('tytul') is-invalid @enderror" name="tytul" value="{{$wynik->tytul}}" required autocomplete="amount" autofocus disabled>

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
                   <input id="naglowek" type="text" class="form-control @error('naglowek') is-invalid @enderror" name="naglowek" value="{{$wynik->naglowek}} " required autocomplete="amount" disabled/>

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
                                              <textarea id="tresc" maxlength="1500" class="form-control @error('tresc') is-invalid @enderror" name="tresc" disabled> {{$wynik->tresc}}</textarea>

                                              @error('tresc')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                          </div>
                                      </div>
                                   <p>

@endforeach


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




















                     <br>
                     <br>
                     <br>






</x-app-layout>




