@extends('ben')
@section('title')
liste des pointages
@endsection
@section('content') 

<div class="row">
<div class ="col-md-6">


<h1>LISTE DES POINTAGES<h1>

</div>

<div class="col-md-6 d-flex align-items-center justify-content-end ">
<a class="btn btn-primary" href="{{ url('formulaire4') }}">nouveau</a>
</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom et prenom</th>
      <th scope="col">arrivee</th>
      <th scope="col">Depart</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>-------</td>
      <td>------</td>
      <td>------</td>
    </tr>
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
@endsection