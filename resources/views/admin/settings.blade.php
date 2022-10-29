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
                              <form class="md-form" method="POST" action=" " enctype="multipart/form-data">
                                  @csrf

                                  <div class="form-group row">
                                      <label for="name" class="col-md-4 col-form-label text-md-right"> nazwa uzytkownika </label>

                                      <div class="col-md-6">
                                          <input id="name" type="text" maxlength="100" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name')}}" required autocomplete="nick" autofocus>

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
                       <label for="role" class="col-md-4 col-form-label text-md-right"> </label>

                                       <div class="col-md-6">
                                           <input id="role" type="hidden" class="form-control @error('role') is-invalid @enderror" name="tytul" value="{{ old('role') }}" required autocomplete="role">

                                           @error('role')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                       </div>
                                   </div>



                       <div class="form-group row">

                                     <label for="password " class="col-md-4 col-form-label text-md-right">  </label>
                           <div class="col-md-6">
                        <input id="password " type="hidden"  class="form-control @error('password ') is-invalid @enderror" name="password" value="{{ old('password')}}" value="password" required autocomplete="password" autofocus>

                           @error('naglowek')
                               <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>

             </span>
         @enderror
       </div>
  </div>


            <div class="form-group row">

                     <input id="user_id" type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value=" }">



                                      </div>
                                  </div>




                       <div class="form-group row">
                                      <label for="category" class="col-md-4 col-form-label text-md-right"> </label>

                                      <div class="col-md-6">

                                          @error('category_id')

                                          @enderror
                                      </div>
                                  </div>



                                  <div class="form-group row">

                                      <label for="image" class="col-md-4 col-form-label text-md-right"> dodaj swoje zdjecie </label>
                                      <div class="col-md-6">

              <div class="file-field">

              <input id="avatar" style="border:0px;" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">


              </div>
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






























