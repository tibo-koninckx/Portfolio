<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Stijl/MijnStijl.css">
	<link rel="stylesheet" href="https://unpkg.com/awsm.css/dist/awsm.min.css" />
  <title>Gegevens Formulier</title>
</head>
<body>
  <article class="post">
  <section>
  <h1>Gegevens Formulier</h1>
  <pre>
<?php
echo
'Voornaam: ' . htmlspecialchars($_POST["Voornaam"]) . "\n" .
'Familienaam: ' . htmlspecialchars($_POST["Familienaam"]) . "\n" .
'E-mail: ' . htmlspecialchars($_POST["E-mail"]) . "\n" .
'Type vraag: ' . htmlspecialchars($_POST["Type-vraag"]) . "\n" .
'Vraag: ' . htmlspecialchars($_POST["Vraag"]);
?>
  </pre>
</section>
</article>
</body>
<footer>
  <p>Door Tibo Koninckx</p>
</footer>
</html>
