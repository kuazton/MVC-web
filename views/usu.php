<?php include 'controller/cper.php';?>
<section style="width: 500px; margin:auto;">
        <h1>Clases de prueba</h1>
        <div>
            <!--
                <?= $mensaje?>
            -->
            <form for="index.php" id="form1" class="p-4 rounded-4" method="POST" id="frmins">
                    <legend>Log in</legend>
                    <div class="mb-3">
                        <label for="TextInput" class="form-label">Nombre</label>
                        <input type="text" id="TextInput" class="form-control" placeholder="Ej: Juan" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apeper" class="form-label">Apellido</label>
                        <input type="text" id="apeper" class="form-control" placeholder="Ej: Perez" name="apellido">
                    </div>
                    <div class="mb-3">
                        <label for="corrper" class="form-label">Correo</label>
                        <input type="text" id="corrper" class="form-control" placeholder="Ej: correo@gmail.com" name="correo">
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">Hombre</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="2">
                            <label class="form-check-label" for="inlineRadio2">Mujer</label>
                        </div>
                    </div>
                <div style="margin: 20px auto 0px; width: 100px;">
                    <button style="width: 100%;" type="submit" class="btn btn-primary">Submit</button>
                    
                </div>
            </form>
            
        </div>
    </section>