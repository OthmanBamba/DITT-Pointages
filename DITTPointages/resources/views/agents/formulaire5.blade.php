@extends('ben')
@section('title')
formulaire agent
@endsection
@section('content') 

<!DOCTYPE html>
<html>
<style>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 3px;
  background-color: #f2f2f2;
  padding: 10px;
}
</style>
<body>

<p>Remplissez la forme pour creer un compte.</p>
<div class="container">
  <form action="/action_page.php">
    <label for="fname">nom</label>
    <input type="text" id="fname" name="firstname" placeholder="votre nom ..">

    <label for="lname">prenom</label>
    <input type="text" id="lname" name="lastname" placeholder="votre nom...">


    <label for="contact">contact</label>
    <input type="integer" id="lname" name="lastname" placeholder="votre contact..">

    <label for="number">mecano</label>
    <input type="integer" id="lname" name="lastname" placeholder="vote num....">

    <label for="number">matricule</label>
    <input type="integer" id="lname" name="lastname" placeholder="votre matricule..">
    
    
    
    <div class="clearfix">
        <button type="submit" class="signupbtn">enregistrer</button>
      </div>
    
  </form>

    
      

      
<script>

var modal = document.getElementById('id01');


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>




@endsection