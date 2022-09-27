<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <style>
        td {
            max-width: 200px;
            padding: 10px;
        }
    </style>


    <h1>Crear Usuario con correo</h1>

    <form action="server.php" method="POST">


        <table>
            <tr>
                <td><label for="name">Nombre:</label></td>
                <td><input type="text" name="name" id="name"><br></td>
            </tr>

            <tr>
                <td> <label for="lastname">Primer apellido</label></td>
                <td><input type="text" name="lastname" id="lastname"></td>
            </tr>

            <tr>
                <td> <label for="secondLastname">Segundo apellido</label></td>
                <td> <input type="text" name="secondLastname" id="secondLastname"><br></td>
            </tr>

            <tr>
                <td> <label for="id">Introduzca su DNI:</label> </td>
                <td>
                    <select name="idType" id="idType">

                        <option value="NIE">NIE</option>
                        <option value="NIF">NIF</option>

                    </select>
                    <input style=" max-width: 115px;" type="text" name="id" id="id"><br>
                </td>
            </tr>

            <tr>
                <td><label for="birthdate">Introduzca su fecha de nacimiento:</label></td>
                <td><input type="date" name="birthdate" id="birthdate" value="2000-01-01"><br></td>
            </tr>

            <tr>
                <td colspan="2"><label for="hombre">Genero:</label><br>

                    <input type="radio" name="gender" value="hombre" id="hombre" checked="checked"><label for="hombre">hombre</label> <br>
                    <input type="radio" name="gender" value="mujer" id="mujer"><label for="mujer">Mujer</label><br>
                    <input type="radio" name="gender" value="otro" id="otro"><label for="otro">Otro</label><br>
                </td>
            </tr>


            <tr>
                <td colspan="2"> <input type="checkbox" name="notificationCheck" id="notificationCheck"><label for="notificationCheck">¿Quieres que te enviemos notificaciones al
                        correo?</label><br>
                    <input type="checkbox" name="accept" id="accept" required><label for="accept">¿Acpetas los terminos y
                        condiciones de uso?</label>
                </td>
            </tr>
            <tr>
                <td colspan="2"><label for="profile">Suba una imagen para finalizar su perfil, solo se admiten: png, gif y jpeg.</label> </td>
            </tr>
            <tr>
                <td colspan="2"><input type="file" name="profile" accept="image/png, image/gif, image/jpeg" /></td>
            </tr>

        </table>


        <br><input type="submit" value="Crear usuario">


    </form>
</body>

</html>