


$("#formulario_categorias").submit(function(){
    
    var nombre = $("#cname").val();
    
    if ($.trim(nombre) === ''){
        alert("Ingrese nombre de categoria");
        return false;
    }
    return true;
});

