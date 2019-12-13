<?php
    // try{
    //     $db = new PDO('mysql:host=localhost;dbname=contacts;charset=utf8', 'root', '1234');

    //     $answer = $db->query('SELECT * FROM contact WHERE first_name LIKE "A%" OR first_name LIKE "%A" OR first_name LIKE "%A%"');
    //     $data = $answer->fetch();

    //     while($data){
    //         echo '<p>'.$data['first_name'].' est de '.$data['country_code'].'</p>';
    //         $data = $answer->fetch();
    //     }

    //     $answer->closeCursor();


    // } catch (Exception $e) {

    //     //verif si erreur et met un message contenu dans $e qui dévoilera moins que le message erreur de base
    //     die('Erreur : ' . $e->getMessage());
    
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href= style.css rel= stylesheet>
</head>
<body>
    <h1><span>&#161;</span>Hola! El gooG!</h1>
    <form action="#">
        <input type="text" name="searchInput">
        <button type="submit" id="submit"><span>&#161;</span>El gooG it!</button>
    </form>

    <script src="script.js"></script>
</body>
</html>