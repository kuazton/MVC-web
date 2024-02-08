<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<?php require 'Model/conexion.php';?>
<body>
    <section style="width: 500px; margin:auto;">
        <h1>Clases de prueba</h1>
        <div>
            <form id="form1" class="p-4 rounded-4">
                <fieldset>
                    <legend>Log in</legend>
                    <div class="mb-3">
                        <label for="TextInput" class="form-label">Nombre</label>
                        <input type="text" id="TextInput" class="form-control" placeholder="Ej: Juan">
                    </div>
                    <div class="mb-3">
                        <label for="apeper" class="form-label">Apellido</label>
                        <input type="text" id="apeper" class="form-control" placeholder="Ej: Perez">
                    </div>
                    <div class="mb-3">
                        <label for="corrper" class="form-label">Correo</label>
                        <input type="text" id="corrper" class="form-control" placeholder="Ej: correo@gmail.com">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Hombre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Mujer</label>
                    </div>
                </fieldset>
                <div style="margin: 20px auto 0px; width: 100px;">
                    <button style="width: 100%;" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            
        </div>
    </section>

</body>
</html>