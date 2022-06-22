
<!-- insert data of contact -->
<?php
include '../inc/conn.php';
@$nom = $_POST["nom"];
@$email = $_POST["email"];
@$message = $_POST["message"];
if (isset($_POST['submit'])) {
    $coc = "INSERT INTO contact(namCont, emailCont, messaCont)
                VALUES ( '$nom' , ' $email' , ' $message' )";

    if (empty($nom)) {
        echo 'votre nom svp';
    } elseif (empty($email)) {
        echo 'votre email svp ';
    } elseif (empty($message)) {
        echo 'votre message svp ';
    } else {
        header('Location: contact.php');
        //  $lawa = (
        mysqli_query($connect, $coc);
        // );


    }
}
