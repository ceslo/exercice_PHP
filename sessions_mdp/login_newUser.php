<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add_user.php" method="post" name="user" id="user">
        <label for="nom">Votre nom</label>
            <input type="text" name="nom" id="nom">
        <label for="prenom">Votre prénom</label>
            <input type="text" name="prenom" id="prenom">
        <label for="login">Votre email</label>
            <input type="text" name="login" id="login">
        <label for="mdp">Votre mot de passe</label>
            <input type="text" name="mdp" id="mdp">
        <button type=submit>Envoyer</button>
    </form>
   
</body>
</html>