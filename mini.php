
<?php
	$bdd = new PDO('mysql:host=localhost;dbname=mini_chat;charset=utf8', 'root', 'root');
	
	if(isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo']) AND !empty($_POST['message']))
	{
        $pseudo = htmlspecialchars($_POST['pseudo']);
    $message = htmlspecialchars($_POST['message']);

$insert = $bdd->prepare("INSERT INTO mini(pseudo, message) VALUES(?,?)");
    $insert->execute(array($pseudo, $message));

}
$allmessages = $bdd->query('select*FROM mini');
while ($messages = $allmessages->fetch())
{
	echo $messages['pseudo'].': ';
	echo $messages['message'].'<br/>';

}

?>
