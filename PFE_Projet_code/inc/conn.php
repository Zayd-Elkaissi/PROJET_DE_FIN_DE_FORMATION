
<!-- CONNEXION AU SERVEUR -->
<?php
    $connect = new mysqli ('localhost', 'root', '', 'hunting');

    if(!$connect){
        // die(mysqli_error($con)); 
        echo "T'es pas connecté 3awed !";  
    }
?>