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

    function insert($info) {
        $string = '';

        global $informatie;

        if($info == 'th') {
            foreach($informatie as $th => $td){
                $string .= "<th>$th</th>";
            }
        } elseif($info == 'td'){
            foreach($informatie as $th => $td){
                $string .= "<th>$td</th>";
            }
        }

        echo($string);

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php insert();?>
</body>
</html>