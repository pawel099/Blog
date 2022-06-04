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
            <th scope="col">nickcomentarza</th>
            <th scope="col">adresemail</th>
            <th scope="col">zatwierdzone</th>
            <th scope="col">contents</th>
            <th scope="col">created_at</th>

            <th scope="col">action</th>
            </tr>

  </thead>
      <tbody>

      <i class="fa-regular fa-location-pen"></i>

     <tr>
         @foreach ($comments as $coment)
            <td><input type="checkbox"></td>


            <td>{{$coment->nickcomentarza}}</td>
            <td>{{$coment->adresemail}}</td>
            <td>{{$coment->status}}</td>
            <td>{{$coment->contents}}</td>
            <td>{{$coment->created_at}}</td>


<td>

<form action="{{route('delete_comments',$coment->id)}}" method="post" style="display: inline-block">

           @csrf @method('DELETE')
           <button class="btn btn-success btn-danger btn-sm" type="submit" title="usuń">
           X</button>
          @endforeach
             </form>
           </td
         </tr>



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

