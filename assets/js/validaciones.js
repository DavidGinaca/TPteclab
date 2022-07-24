
/*$(document).ready(function(){
    
    alert("listo");
   
    
 });*/
 
 $("#formulario_productos").submit(function() {
     
        var nombre = $("#pnombre").val();
        var descripcion = $("#descripcion").val();
        var precio = $("#precio").val();
        var categoria = $("#categorias").val();

        var errores = [];
        
        if($.trim(nombre) === '')
            errores.push("ingrese nombre del producto");

        if($.trim(descripcion) === '')
            errores.push("ingrese descripcion del producto");

        if($.trim(precio) === '')
            errores.push("ingrese precio del producto");

        if($.trim(categoria) === '')
            errores.push("ingrese la categoria del producto");

        if(errores.length > 0){
            errores.push("David");
            alert(errores.join("\n"));
            return false;}
        
        return true;
    

 } );

 $("#formulario_categorias").submit(function() {
     
        var nombre= $("#listaCategoria").val();
        
        if ($.trim(nombre)===''){
            alert("ingrese categoria del producto \n David");
        return false;
        }
        return true;
 } );
 
