<html>
<head>
    <title>Formulario para Agregar estudiantes</title>
</head>

<style>
input:not([type="submit", type="file"]){
    border: 0;
    border-bottom: 1px solid #000;
}
input{
    padding: 5px;
    font-size: 16px
}

select{
    margin-top: 20px;
    padding: 5px;
    font-size: 16px;
}
input:focus{
    border: 0;
}

/*.input-gruop{*/
/*    display: flex;*/
/*    flex-direction: column;*/
/*}*/
    </style>
<body>
<form action="guardar.php" method="POST" enctype="multipart/form-data">
    <div class="input-group">
        <label for="numero_cuenta">Número de Cuenta</label>
        <input type="text" maxlength="13" name="numero_cuenta" id="numero_cuenta">
    </div>
    <div style="display: flex">
        <div class="input-gruop">
            <label for="primer_nombre">Primer Nombre</label>
            <input type="text" maxlength="20" name="primer_nombre" id="primer_nombre">
        </div>
        <div class="input-gruop">
            <label for="apellido">Apellido</label>
            <input type="text" maxlength="20" name="apellido" id="apellido">
        </div>
    </div>
    <div class="input-gruop">
        <label for="correo">Correo</label>
        <input type="text" maxlength="20" name="correo" id="correo">
    </div>
    <div style="display: flex">
        <div class="input-group">
            <select class="" name="dia">
                <option>Día</option>
                <?php for ($i = 1; $i<= 31; $i++): ?>
                    <option value="<?php echo $i?>"><?php echo $i ?></option>
                <?php endfor; ?>
            </select>
            <select class="" name="mes">
                <option>Mes</option>
                <?php for ($i = 1; $i<= 12; $i++): ?>
                    <option value="<?php echo $i?>"><?php echo $i ?></option>
                <?php endfor; ?>
            </select>
            <select class="" name="year">
                <option>Año</option>
                <?php for ($i = 1980; $i<= 2000; $i++): ?>
                    <option value="<?php echo $i?>"><?php echo $i ?></option>
                <?php endfor; ?>
            </select>
        </div>
    </div>
    <div class="input-gruop">
        <label for="imagen">Foto de Perfil</label>
        <input type="file" name="imagen[]" id="imagen" accept="image/*" multiple>
    </div>
    <input type="submit" value="Enviar">
</form>
</body>
</html>
