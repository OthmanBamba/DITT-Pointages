@extends('ben')
@section('title')
formulaire pointage
@endsection
@section('content') 

<!DOCTYPE html>
<html>
<style>
<label for="site-search">rechercher:</label>
<input type="search" id="site-search" name="q"
       aria-label="Search through site content">

<button>recherch</button>



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


    <label for="date">date d'arrivee</label>
    <input type="text" name="input" placeholder="YYYY-MM-DD" required 
pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
title="Enter a date in this format YYYY-MM-DD"/>
 

    <label for="date"> date de depart</label>
    <input type="datetime" name="input" placeholder="YYYY-MM-DD" required 
pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
title="Enter a date in this format YYYY-MM-DD"/>
 
    
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