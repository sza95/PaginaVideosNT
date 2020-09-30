<?php include 'layouts/header.php'; ?>
<div class="container">
    <h3 class="text-center">Contacto</h3>
    <br>
    <form onsubmit="form()">
        <div class="form-row text">
            <div class="form-group col-md-6">
                <label for="PrimerNombre">Primer Nombre</label>
                <input type="text" class="form-control" id="PrimerNombre" required>
            </div>
            <div class="form-group col-md-6">
                <label for="SegundoNombre">Segundo Nombre</label>
                <input type="text" class="form-control" id="SegundoNombre">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="PrimerApellido">Primer Apellido</label>
                <input type="text" class="form-control" id="PrimerApellido" required>
            </div>
            <div class="form-group col-md-6">
                <label for="SegundoApellido">Segundo Apellido</label>
                <input type="text" class="form-control" id="SegundoApellido">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Email">Email</label>
                <input type="email" class="form-control" id="Email" required>
            </div>
            <div class="form-group col-md-6">
                <label for="Direccion">Dirección</label>
                <input type="text" class="form-control" id="Direccion">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="Pais">Pais</label>
                <select name="country" class="countries form-control" id="countryId">
                    <option value="">Seleccione su País</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="Estado">Departamento / Estado</label>
                <select name="state" class="states form-control" id="stateId">
                    <option value="">Seleccione su Departamento o Estado</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="Ciudad">Ciudad</label>
                <select name="city" class="cities form-control" id="cityId">
                    <option value="">Seleccione su Ciudad</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
<?php include 'layouts/footer.php'; ?>