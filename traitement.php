<?php
    print_r($_POST);
    $search = $_POST['searchInput'];

    try{
        $db = new PDO('mysql:host=localhost;dbname=contacts;charset=utf8', 'root', '1234');

        $answer = $db->query('SELECT * FROM contact WHERE first_name LIKE "'.$search.'%" OR first_name LIKE "%'.$search.'" OR first_name LIKE "%'.$search.'%"');
        $data = $answer->fetch();

        while($data){
            echo '<p>'.$data['first_name'].' est de '.$data['country_code'].'</p>';
            $data = $answer->fetch();
        }

        $answer->closeCursor();


    } catch (Exception $e) {

        //verif si erreur et met un message contenu dans $e qui dévoilera moins que le message erreur de base
        die('Erreur : ' . $e->getMessage());
    
    }
?>