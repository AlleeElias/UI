<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post resultaat</title>
</head>
<body>
  <h1>Je post data</h1>
  <p>Normaal sla je die op in een databank of verstuur je ze in een e-mail, maar als demo ben ik gewoon een echo.</p>
  <pre>
<?php
echo
'Voornaam: ' . htmlspecialchars($_POST["Voornaam"]) . "\n" .
'Familienaam: ' . htmlspecialchars($_POST["Familienaam"]) . "\n" .
'E-mail: ' . htmlspecialchars($_POST["E-mail"]) . "\n" .
'Type vraag: ' . htmlspecialchars($_POST["Type-vraag"]) . "\n" .
'Vraag: ' . htmlspecialchars($_POST["Vraag"]) . "\n" .
'Nieuwbrief: ' . htmlspecialchars($_POST["Nieuwsbrief"]);
?>
  </pre>
</body>
</html>
