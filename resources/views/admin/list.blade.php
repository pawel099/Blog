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
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">role</th>
            <th scope="col">email_verified_at</th>
            <th scope="col">data</th>
            <th scope="col">action</th>
            </tr>

  </thead>
      <tbody>

      <i class="fa-regular fa-location-pen"></i>


          <tr>
              @foreach ($wynik as $list)
            <td><input type="checkbox"></td>


            <td>{{$list->name}} </td>
            <td>{{$list->email}} </td>
            <td>{{$list->role}}</td>
            <td>

			 @if ($list->email_verified_at==true)
				 zweryfikowany
			  @else
				  niezweryfikowany
			 @endif
			</td>
			<td>{{$list->data}}</td>



<td>
<a href="{{route('uprawnienia')}}" class="btn btn-primary  btn-sm enabled" role="button" aria-disabled="true" title="edytuj">E</a>
<form action="{{route('deleteuser',$list->id)}}" method="post" style="display: inline-block">

    @csrf @method('DELETE')
    <button class="btn btn-success btn-danger btn-sm" type="submit" title="usuń">X</button>

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




















