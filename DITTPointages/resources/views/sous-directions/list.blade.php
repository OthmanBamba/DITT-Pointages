@extends('ben')
@section('title')
liste des services
@endsection
@section('content') 

<div class="row">
<div class="col-md-6" >

        
<h1>LISTE SOUS DIRECTIONS</h1>



</div>

<div class="col-md-6 d-flex align-items-center justify-content-end ">
<a class="btn btn-primary" href="{{ url('formulaire')}}">nouveau</a>
</div>
<form method="get">
            <div class="form-group">
                <input type="text" name="search" placeholder="Rechercher">
                <input type="submit" class="btn btn-primary" value="Rechercher">
            </div>
        </form>


<table class="table">
<thead class="thead-dark">
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom de sous-directions</th>
      <th scope="col">cree le</th>
      
      <th scope="col">modifier le</th>
      <th scope="col">actions</th>
      
      
      
      </thead> 
    </tr>
    
 
  <tbody>
    @foreach($datas as $data)
    <tr>
      <th scope="row">1</th>
      <td>{{ $data->id}}</td>
      <td>{{ $data->name}}</td>
      <td>{{$data->created_at}}</td>
      <td>{{$data->updated_at}}</td>
<td><a href=" {{ url('sous-directions/'.$data->id.'/edit') }}" class="btn btn-primary">modifier</a>
<a href="#" class=" btn btn-danger">supprimer</a>
</td>
      </tr>
      @endforeach
  
    <tr>
      <th scope="row">2</th>
      <td>-----</td>
      <td>-----</td>
      <td>-----</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>-----</td>
      <td>----</td>
      <td>-----</td>
      
    </tr>
  </tbody>
</table>
<div>{{ $datas->render()}}</div>


@endsection
