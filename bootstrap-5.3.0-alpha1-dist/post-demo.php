<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Stijl/MijnStijl.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <title>Gegevens Formulier</title>
</head>


<body>


<div class="container-fluid">
  <div class="row mt-5 mx-3">
    <div id="content" class="col-12">
      


    <div class="post">
  <h1>Gegevens Formulier</h1>
  <pre>
<?php
echo
'Voornaam: ' . htmlspecialchars($_POST["naam"]) . "\n" .
'Familienaam: ' . htmlspecialchars($_POST["fmNaam"]) . "\n" .
'E-mail: ' . htmlspecialchars($_POST["email"]) . "\n" .
'Type vraag: ' . htmlspecialchars($_POST["type-vraag"]) . "\n" .
'Vraag: ' . htmlspecialchars($_POST["vraag"]);
?>
  </pre>
</div>


    </div>
  </div>
</div>

</body>


<div class="container">
  <footer class="py-3 my-4">
    <p class="text-center text-muted">&copy; Door Tibo Koninckx</p>
	<a class="github" href="https://github.com/tibo-koninckx" target="_blank"><img src="./Afbeelding/github-mark.png" class="github-fluid" alt="github-mark"></a>
  </footer>
  </div>
</html>
