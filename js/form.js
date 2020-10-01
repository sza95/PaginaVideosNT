function form() {
    let primerNombre = document.getElementById('PrimerNombre').value;
    let segundoNombre = document.getElementById('SegundoNombre').value;
    let primerApellido = document.getElementById('PrimerApellido').value;
    let segundoApellido = document.getElementById('SegundoApellido').value;
    let emailPersona = document.getElementById('Email').value;
    let direccionPersona = document.getElementById('Direccion').value;
    let paisPersona = document.getElementById('countryId').value;
    let estadoPersona = document.getElementById('stateId').value;
    let ciudadPersona = document.getElementById('cityId').value;


    let mensaje =
        `
    Nombre completo: ${primerNombre} ${segundoNombre} ${primerApellido} ${segundoApellido} \n
    Email: ${emailPersona} \n
    Dirección: ${direccionPersona} \n
    País: ${paisPersona} \n
    Departamento/Estado: ${estadoPersona} \n
    Ciudad: ${ciudadPersona}
    `

    alert(mensaje);
}