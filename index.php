<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <section style="width: 500px; margin:auto;">
        <h1>Clases de prueba</h1>
        <div>
            <form style="background-color: grey;">
                <fieldset >
                    <legend>Log in</legend>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Nombre</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Ej: Juan">
                    </div>
                    <div class="mb-3">
                        <label for="apeper" class="form-label">Apellido</label>
                        <input type="text" id="apeper" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="corrper" class="form-label">Correo</label>
                        <input type="text" id="corrper" class="form-control">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                        <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                    </div>
                </fieldset>
                <div style="margin: auto; width: 100px;">
                <button style="margin: auto; width: 100%;" type="submit" class="btn btn-primary">Submit</button>
                </div>
                <button style="margin: auto; width: 100px;" type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </section>
</body>
</html>