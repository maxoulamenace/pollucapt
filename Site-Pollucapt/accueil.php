<html>
<head>
<link rel="stylesheet" href="form.css" />
<link rel="icon" type="image/png" href="logo.png" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />    
<title>Connexion</title>
<meta name="robots" content="noindex, nofollow">
</head>
<body>
<div class="form">
<form action="connexion.php" method="post">
<div class="title">Bonjour</div>
<div class="subtitle">Connectez-vous à votre compt.</div>
<div class="input-container ic1">
<input id="login" class="input" type="text" name="login" value="" placeholder=" "><br />
<div class="cut"></div>
<label for="login" class="placeholder">Identifiant</label>
</div>
<div class="input-container ic2">
<input id="pwd" class="input" type="password" name="pwd" value="" placeholder=" "><br />
<div class="cut"></div>
<label for="pwd" class="placeholder">Mot de passe</label>
</div>
<input class="submit" type="submit" name="connexion" value="Connexion">
</form>

<div class="subtitle"><a href="inscription.php">S'inscrire</a></div>
</div>
</body>
</html>
