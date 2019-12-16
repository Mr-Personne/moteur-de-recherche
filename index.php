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
    <link href='https://fonts.googleapis.com/css?family=Amethysta' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Caesar+Dressing' rel='stylesheet' type='text/css'>
    <!-- source : https://codepen.io/atnyman/pen/cgGuL -->
</head>
<body>
    <div class="container-fluid mt-200px">
        <div class="container">
            <div class="row">
                <div class="col">

                <!-- <h1><span>&#161;</span>Hola! <span id='font'>El gooG!</span></h1> -->
                <h1><span>&#161;</span>Hola! <span class="fire">E</span><span class="burn">l</span> <span class="burn">g</span><span class="fire">o</span><span class="burn">o</span><span class="fire">G</span><span class="burn">!</span></h1>
                <h2>A totaly original search engine</h2>
                <form action="#" class="form-flex">
                    <input type="text" name="searchInput" autocomplet="off">
                    <!-- <button type="submit" id="submit"><span>&#161;</span>El gooG it!</button> -->
                    <div class="magnifying-glass"></div>
                </form>

                <div id="search-result"> </div>

                </div>
            </div>
        </div>
    </div>
    

    <script src="script.js"></script>
</body>
</html>