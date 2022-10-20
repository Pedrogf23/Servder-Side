<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body>
        <p>
        <form
            name="expresiones"
            id="expresiones"
            action="diw.php"
            method="post"
        >
            <fieldset>
                <legend>Introduce la expresión regular.</legend>
                <p>
                    <label for="exp1">Codigo postal</label>
                    <input
                        type="text"
                        name="exp1"
                        id="exp1"
                        size="6"
                        maxlength="6"
                        pattern="(([0-4][0-9])|(5[0-2]))[0-9]{3}"
                    />
                </p>
                <p>
                    <label for="exp2">DNI</label>
                    <input
                        type="text"
                        name="exp2"
                        id="exp2"
                        size="12"
                        maxlength="12"
                        pattern="[0-9]{8}(-)?(([TRWAGMYFPDXBNJZSQVHLCKE])|([trwagmyfpdxbnjzsqvhlcke]))"
                    />
                </p>
                <p>
                    <label for="exp3">IPv4</label>
                    <input
                        type="text"
                        name="exp3"
                        id="exp3"
                        size="50"
                        maxlength="20"
                        pattern="((([01][0-9]{2})|(2[0-4][0-9])|(25[0-5]))\.){3}(([01][0-9]{2})|(2[0-4][0-9])|(25[0-5]))"
                    />
                </p>
                <p>
                    <label for="exp4">Contraseña</label>
                    <input
                        type="text"
                        name="exp4"
                        id="exp4"
                        size="50"
                        maxlength="30"
                        pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(.{6,})"
                        placeholder="Una mayús, una minús, un número y 6 caracteres como minimo"
                    />
                </p>
                <p>
                    <label for="exp5">Campo personalizado 1</label>
                    <input
                        type="text"
                        name="exp5"
                        id="exp5"
                        size="50"
                        maxlength="20"
                        pattern="(?=.*[A-Z]{2}[a-z])[A-Z].{4,8}[a-z]"
                        placeholder="Una mayus, seguida de entre 4 y 8 caracteres, acabado en minus."
                    />
                </p>
                <p>
                    <label for="exp6">Campo personalizado 2</label>
                    <input
                        type="text"
                        name="exp6"
                        id="exp6"
                        size="50"
                        maxlength="20"
                        pattern="(?!0.+)(?!.*(00|11|22|33|44|55|66|77|88|99))(\d{6})"
                        placeholder="Un número de al menos 6 digitos, que no empiece por 0 ni aparezcan digitos repetidos consecutivos."
                    />
                </p>
                <p>
                    <label for="exp7">Campo personalizado 3</label>
                    <input
                        type="text"
                        name="exp7"
                        id="exp7"
                        size="50"
                        maxlength="20"
                        pattern="(?!.*\d\d)(?!.*\d[a-z])([a-zA-Z0-9@]{6})"
                        placeholder="Cadena de al menos 6 caracteres, donde no hayan 2 numeros seguidos, ni numeros seguidos de minusculas."
                    />
                </p>
                <p>
                    <label for="exp8">Campo personalizado 4</label>
                    <input
                        type="text"
                        name="exp8"
                        id="exp8"
                        size="50"
                        maxlength="20"
                        pattern="(?!.*[aeiou]{2,})(?!.*[^aeiou]{3})(?!.*[aeiou]$)([a-z]{4,8})"
                        placeholder="Cadena de minus, longitud 4-8, vocal siempre seguida de consonante, no acaba en vocal, sin 3 consonantes consecutivas"
                    />
                </p>
            </fieldset>
            <input type="submit" name="enviar" id="enviar" value="Enviar" />
        </form>

        </p>
        <?php
        
        if(isset($_POST['enviar'])){
            echo "<table border=1>";
            for($i = 1; $i <= 8; $i++){
                echo "<tr><td>".$_POST['exp'.$i]."</td></tr>";
            }
            echo "</table>";
        }

        ?>
    </body>
</html>
