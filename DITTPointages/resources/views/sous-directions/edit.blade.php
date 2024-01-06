@extends('ben')
@section('title')
formulaire de creation
@endsection
@section('content') 

<!DOCTYPE html>
<html>
<style>
body{font-family:Arial,Helvetica,sans-serif;}
{box-szing: border-box;}
input[type=text],input[type=password]{
    width:100%;
    padding: 15px;
    margin: 5px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
input[type=text]:focus, input [type=password]:focus{
    background-color:#ddd;
    outline: none;
}
button{
    background-color:white;
    padding: 14px 20px;
    margin:8px 0;
    border: none;
    cursor:pointer;
    width: 100%;
    opacity:0.9;

}
button:hover {
    opacity:1;
}
.cancelbtn {
    padding:14 px 20px;
    background-color:#f444336;
}
.cancelbtn,.signupbtn{
    float:left;
    width: 50%;
}
.container{
    padding: 16px;
}
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top:0;
    width: 100%;
    heigth: 100%;
    overflow: auto;
    background-color:#474e5d;
    padding-top: 50px;
}
.modal-content{
    background-color:#fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width:80%;
}
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;

}
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight:bold;
    color:#f1f1f1;
}
.close:hover,
.close:focus{
    color: #f44336;
    cursor: pinter;
}
.clearfix::after{
    content:"";
    clear:both;
    display: table;
}
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
        width: 100%;
    }
}
</style>
<body>
<h2>forme d'inscription</h2>





<form action="{{ url('/sous-direction/edit') }}" method="post">
    @csrf
    @if(session()->has('message'))
    <div class="text-primary"> {{  $errors->first('message') }}</div>

    @endif
    <p>acceder a une direction</p>
      <hr>
      <label>
      <b> nom de la sous-direction</b></label>
      <input type="text" placeholder="nom de la sous-Direction" name="name" required value="{{$sousDirection->name }}">
      @if ($errors->has('name'))
      <div class="text-danger"> {{  $errors->first('name') }}</div>
      @endif


      

      <div class="clearfix">
          
    
        
        <button type="submit" class="btn btn-primary">enregistrer</button>
      </div>
    </div>
  </form>
</div>

<script>

var modal = document.getElementById('id01');


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</form>
</body>
</html>



@endsection