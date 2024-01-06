@extends('ben')
@section('title')
liste des services
@endsection
@section('content') 
<div class ="row">
<div class="col-md-6" >
  <h1>LISTE SERVICES</h1>

</div>
<div class="col-md-6 d-flex align-items-center justify-content-end ">
<a class="btn btn-primary" href=" {{ url('formulaire3') }}  "     >nouveau</a>
</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom de service</th>
      <th scope="col">sous-direction</th>
      <th scope="col">cree le </th>
      <th scope="col">Actions </th>
    </tr>
    <tbody>
                @foreach($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->sousDirection->name }}</td>
                    <td>{{ $service->created_at }}</td>
                    <td>
                        <a href="{{ url('sous-directions/'.$data->id.'/edit') }}" class="btn btn-primary">Modifier</a>
                        <a href="#" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
  </thead>
</table>
<div>
            {{ $services->appends(request()->except('page'))->links() }}
        </div>
</div>
@endsection