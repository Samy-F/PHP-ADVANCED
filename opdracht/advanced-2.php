<?php 
    $kleuren = array("red", "blue", "green", "black", "brown");
    $informatie = [
        "naam" => "Samy",
        "leeftijd" => "17",
        "woonplaats" => "Amstelveen",
        "hobby" => "programmeren",
        "kleur" => "blauw"
    ];

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $padding = htmlspecialchars($_POST['padding']);
      $border = htmlspecialchars($_POST['border']);
      $background = htmlspecialchars($_POST['background']);
      echo $background;

      if(empty($padding)) {
        $padding = "auto";
      }

      if(empty($border)) {
        $border = "auto";
      }

      if(empty($background)) {
        $background = "rgba(0, 0, 0, 0.555)";
      }

      echo $border. " " . $padding . " " . $background;
    };
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
  <link rel="stylesheet" href="style.css">
  <style>
  
  .info {
    background-color: <?=$background?>;
    border-radius: 10px;
    padding: 20px;
    margin-top: 40px;
    color: white;
}

    
  td, th, tr{
    padding: <?=$padding?>;
    border: <?=$border?> solid white;
  }
</style>
</head>
<body class="light-blue darken-2">
  <nav>
    <nav class="wrapper">
      <a href="" class="brand-logo center">PHP Advanced - eindopdracht</a>
    </nav>
  </nav>
  <div class="container center" id="table-cont">
    <div class="info">
    <h1 id="">information Table</h1>
    <table class="white-text">
        <thead>
          <tr>
            <?php foreach($informatie as $info => $antwoord):?>
              <th><?=$info?></th>
            <?php endforeach;?>
          </tr>
        </thead>
        <tbody>
          <tr>
          <?php foreach($informatie as $info => $antwoord):?>
            <td class="grey-text lighten-5"><?=$antwoord?></td>
            <?php endforeach;?>
          </tr>
        </tbody>
      </table>
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