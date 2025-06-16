<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/signin">
    <input name="email" type="email" placeholder="Email" required />
    <input name="password" type="password" placeholder="Mot de passe" required />
    <button type="submit">Se connecter</button>
    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</form>

</body>
</html>

