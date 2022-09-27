<?php 
    $notificationCheck = 'no';
    $name = $_GET['name'];
    $lastname = $_GET['lastname'];
    $secondLastname = $_GET['secondLastname'];
    $idType = $_GET['idType'];
    $id = $_GET['id'];
    $birthdate = $_GET['birthdate'];
    $gender = $_GET['gender'];

    if (isset($_GET['notificationCheck'])) {
        $notificationCheck = 'sí';
    }
    
    


   
    echo "<p><strong>Nombre completo:</strong> $name $lastname $secondLastname.</p>";
    echo "<p><strong>$idType:</strong> $id</p>";

    echo"<p><strong>Fecha de nacimiento: </strong> $birthdate</p>";

    echo" <p><strong>Genero:</strong> $gender</p>";

    echo "<p>¿Quiere el usuario recibir notificacione al correo?:$notificationCheck</p> ";

?>