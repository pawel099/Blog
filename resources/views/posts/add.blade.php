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
                              <form class="md-form" method="POST" action="{{route('add')}}" enctype="multipart/form-data">
                                  @csrf

                                  <div class="form-group row">
                                      <label for="name" class="col-md-4 col-form-label text-md-right"> nick</label>

                                      <div class="col-md-6">
                                          <input id="nick" type="text" maxlength="100" class="form-control @error('nick') is-invalid @enderror" name="nick" value="{{ old('nick')}}" required autocomplete="nick" autofocus>

                                          @error('name')
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
                       <label for="tytul" class="col-md-4 col-form-label text-md-right"> tytuł</label>

                                       <div class="col-md-6">
                                           <input id="tytul" type="text" class="form-control @error('tytul') is-invalid @enderror" name="tytul" value="{{ old('tytul') }}" required autocomplete="tytul">

                                           @error('tytul')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                       </div>
                                   </div>



                       <div class="form-group row">

                                     <label for="naglowek " class="col-md-4 col-form-label text-md-right">naglowek </label>
                           <div class="col-md-6">
                        <input id="naglowek " type="text"  class="form-control @error('naglowek ') is-invalid @enderror" name="naglowek" value="{{ old('naglowek')}}" required autocomplete="email" autofocus>

                           @error('naglowek')
                               <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>

             </span>
         @enderror
       </div>
  </div>


            <div class="form-group row">

                     <input id="user_id" type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{$dane->id}}">


                                     <label for="tresc" class="col-md-4 col-form-label text-md-right">tresc</label>

                                      <div class="col-md-6">
                                          <textarea id="tresc" maxlength="1500" class="form-control @error('tresc') is-invalid @enderror" name="tresc" required autofocus>{{ old('tresc') }}</textarea>

                                          @error('tresc')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>




                       <div class="form-group row">
                                      <label for="category" class="col-md-4 col-form-label text-md-right"> categoria</label>

                                      <div class="col-md-6">
                                          <select id="price" class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                              <option value="">Brak</option>
                                                // foreach
                                                  <option value=" "> </option>
                                              // endforeach
                                          </select>

                                          @error('category_id')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>



                                  <div class="form-group row">

                                      <label for="image" class="col-md-4 col-form-label text-md-right"> </label>
                                      <div class="col-md-6">

              <div class="file-field">
              <input id="image" style="border:0px;" type="file" class="form-control @error('image') is-invalid @enderror" name="image">


              </div>



                                          @error('image')
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






























