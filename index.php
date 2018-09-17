<!doctype html>

<html class="no-js" lang="">

<head>
  <!-- <meta http-equiv="refresh" content="5"> -->
</head>

<body>
    <form method="post" action="index.php" value="">
       <p>Pseudo:
           <input type="text" name="pseudo" value=""></p><br>
        <p>Message:
            <textarea type="text" name="message" value=""></textarea></p><br>
        <input type="submit" name="submit" value="Envoyer">
    </form>
    <?php
      // the connection of data base
    	$bdd = new PDO('mysql:host=localhost;dbname=mini_chat;charset=utf8', 'root', 'root');


    if(isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo']) AND !empty($_POST['message']))
    {

      $pseudo = htmlspecialchars($_POST['pseudo']);
      $message = htmlspecialchars($_POST['message']);

      // var_dump($pseudo);
      //     var_dump($message);
      
      //the function which excute the date and time

      $insert = $bdd->prepare("INSERT INTO mini(pseudo, message, date_create) VALUES(?,?,NOW())");
      $insert->execute(array($pseudo, $message));

    }
    $allmessages = $bdd->query('SELECT * FROM mini');
    while ($messages = $allmessages->fetch())
    {
      echo $messages['date_create'].'<br/>';
    	echo $messages['pseudo'].': ';
    	echo $messages['message'].'<br/>';
    }


    ?>

</body>

</html>
