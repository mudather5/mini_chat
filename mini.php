
<?php
	$bdd = new PDO('mysql:host=localhost;dbname=mini_chat;charset=utf8', 'root', 'root');

    $pseudo = htmlspecialchars($_POST['pseudo']);
    $message = htmlspecialchars($_POST['message']);

if(isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo']) AND !empty($_POST['message']))
{
    $insert = $bdd->exec("INSERT INTO mini(pseudo, message) VALUES($pseudo,$message)");
    $insert->execute(array($pseudo, $message));
}
?>
