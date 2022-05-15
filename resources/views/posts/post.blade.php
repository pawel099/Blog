<x-app-layout>

<x-slot name="header">
        <h5 class="m-0">{{ __('Dashboard') }}</h5>
    </x-slot>

     <x-slot name="breadcrumb">
            <li class="breadcrumb-item active">Dashboard</li>
        </x-slot>

 <div class="middles_table">

 <table class="table">

    <thead class="table-active">
          <tr>

            <th  scope="col"> </th>
            <th scope="col">image</th>
            <th scope="col">nick</th>
            <th scope="col">email</th>
            <th scope="col">tytul</th>
            <th scope="col">data</th>
            <th scope="col">action</th>
            </tr>

        </thead>
      <tbody>

      <i class="fa-regular fa-location-pen"></i>


          <tr>
              @foreach ($dane as $posts)
            <td><input type="checkbox"></td>
            <td><img src="{{asset('storage/'.$posts->image_path)}}" width="60" height="60" alt="image"/></td>

            <td>{{$posts->nick}}</td>
            <td>{{$posts->email}}</td>
            <td>{{$posts->tytul}}</td>
            <td>{{$posts->created_at}}</td>
            <td> <a href="#" class="btn btn-primary  btn-sm enabled" role="button" aria-disabled="true">

            <i class="fa-solid fa fa-eye"></i></a>
                        <a href="{{route('edit',$posts->id)}}" class="btn btn-success btn-sm enabled" role="button" aria-disabled="true">
                        <i class="fa-regular fa-pen-to-square"> </i></a>
                        <form action="{{route('deletePost',$posts->id)}}" method="post" style="display: inline-block">
                        @csrf @method('DELETE')
                        <button class="btn btn-success btn-danger btn-sm" type="submit">
                        <i class="fa-solid fa-trash"> </i></button>
                  </form>
               </td>
            </tr>
          @endforeach


</tbody>

</table>
<div style="position:relative;left:55x;top:40px;">
<table>

<thead>
<tr>
             <td><label for="pet-select">select from list </label>

              <select name="pets" id="pet-select">
                  <option value="">--Please choose an option--</option>
              <option value="delete">delete</option>

     </td>
          </tr>

</thead>
</tbody>
</table>

</div>
</div>


</x-app-layout>




















