$(document).ready(function(){ 
    
    $("#formulario_categorias").submit(function(){ 

    	var nombre = $("#cname").val(); 

    	if ($.trim(nombre) === ''){ 
        	alert("Debe completar la categoria \n David "); 
        	return false; 
    	}
        else{
            return true; 
        }

    }); 

    $("#formulario_productos").submit(function(){

        var nombre = $("#prod_nombre").val();
        var descripcion = $("#desc").val();
        var precio = $("#prod_precio").val();
        var categoria = $("#prod_categoria").val();

        var errores = [];




        if($.trim(nombre) === '')
            errores.push("Ingrese el nombre del producto");

        if($.trim(descripcion) === '')
            errores.push("Ingrese la descripcion del producto");

        if($.trim(precio) === '')
            errores.push("Ingrese el precio del producto");

        if($.trim(categoria) === '')
            errores.push("Ingrese la categoria del producto");

        if(errores.length > 0){
            errores.push("David");
            alert(errores.join("\n"));
            return false;
        }

        return true;
    });
    
});

