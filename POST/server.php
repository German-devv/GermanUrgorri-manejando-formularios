<?php 
    $notificationCheck = 'no';
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $secondLastname = $_POST['secondLastname'];
    $idType = $_POST['idType'];
    $id = $_POST['id'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];

    if (isset($_POST['notificationCheck'])) {
        $notificationCheck = 'sí';
    }
    

   
    echo "<p><strong>Nombre completo:</strong> $name $lastname $secondLastname.</p>";
    echo "<p><strong>$idType:</strong> $id</p>";
    echo"<p><strong>Fecha de nacimiento: </strong> $birthdate</p>";
    echo" <p><strong>Genero:</strong> $gender</p>";
    echo "<p>¿Quiere el usuario recibir notificacione al correo?:$notificationCheck</p> ";

?>