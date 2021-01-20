<?php 
  $kleuren = array("red", "blue", "green", "black", "brown", "transparent");
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
</head>
<style>
  #lab {
    color: white;
  }

</style>
<body class="light-blue darken-2">
  <nav>
    <nav class="wrapper">
      <a href="" class="brand-logo center">PHP Advanced - eindopdracht</a>
    </nav>
  </nav>
  <div class="container">
    <h1>information form</h1>
    <div class="row">
      <div class="col s5">
      <form action="advanced-2.php" method="POST">
      <div class="input-field col s12">
      <select name="background">
        <option value="" disabled selected>Choose background color</option>
        <?php foreach($kleuren as $kleur): ?>
          <option value="<?=$kleur?>"><?=$kleur?></option>
        <?php endforeach; ?>
      </select>
      <label id="lab">Background-Color</label>
      </div>
      <div class="input-field col s6">
          <input placeholder="example: 10" id="border" name="border" type="number" class="validate">
          <label id="lab" for="border">Border in px</label>
      </div>
      <div class="input-field col s6">
          <input placeholder="example: 10" id="padding" name="padding" type="number" class="validate">
          <label id="lab" for="padding">padding in px</label>
      </div>
      <div class="row">
        <button class="btn indigo waves-effect waves-light col s12 sub" type="submit"
          name="action">Create table
          <i class="material-icons right">send</i>
        </button>
      </div>
      </form>
      </div>
  </div>
    
  <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $('select').formSelect();
    });
  </script>
</body>
</html>