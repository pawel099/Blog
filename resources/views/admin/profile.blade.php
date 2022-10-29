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

                          <div class="card-body">
                              <form class="md-form" method="POST" action="{{route('Editprofil')}}" enctype="multipart/form-data">
                                  @csrf

                                  <div class="form-group row">
                                      <label for="imie" class="col-md-4 col-form-label text-md-right"> imie</label>


                                      <div class="col-md-6">
                                          <input id="imie" type="text" maxlength="100" class="form-control @error('nick') is-invalid @enderror" name="imie" value="{{ old('imie')}}" required autocomplete="imie" autofocus>

                                          @error('imie')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">email </label>
                                     <div class="col-md-6">
                                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                 @error('email')
                               <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                       </span>
                              @enderror
                                 </div>
                              </div>




                       <div class="form-group row">
                       <label for="nick" class="col-md-4 col-form-label text-md-right"> nick</label>

                                       <div class="col-md-6">
                                           <input id="nick" type="text" class="form-control @error('nick') is-invalid @enderror" name="nick" value="{{ old('nick') }}" required autocomplete="nick">

                                           @error('tytul')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                       </div>
                                   </div>


                         <div class="form-group row">
                                                       <label for="avatar" class="col-md-4 col-form-label text-md-right">wybierz plik</label>

                                                       <div class="col-md-6">
                                                                   <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">

                                                                   @error('avatar')
                                                                       <span class="invalid-feedback" role="alert">
                                                                           <strong>{{ $message }}</strong>
                                                                       </span>
                                                                   @enderror
                                                               </div>
                                                           </div>

         <div class="form-group row mb-0 float-right">
                                  <div class="col-md-6">
                                         <button type="submit" class="btn btn-primary">
                                                 zapisz
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
