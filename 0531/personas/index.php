<?php
 include("../libs/conex.php");
 include("../libs/ciudades.lib.php");
 include("../libs/personas.lib.php");

//echo "<pre>";
// foreach($datos as $d)
// {
//  print_r($d);
// }
/*if (!$_GET["mod"] or !isset($_GET["mod"])) { 
    $_GET["mod"]="persona";
    $_GET["mod"]="lst";   }?>*/
if (!isset($_GET["mod"]) || empty($_GET["mod"])) {
    $_GET["mod"] = "persona";
} else {
        // La clave "mod" está definida en $_GET y no está vacía
        // No es necesario hacer ninguna asignación adicional
}
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
</head>
<body>
<?php
/*if ( $_GET["mod"]=="persona" & $_GET["accion"]=="lst"  )
        {
            include("list.php");
        } elseif ($_GET["mod"]=="persona" and ($_GET["accion"]=="nuevo" or $_GET["accion"]=="edit") )
        {
              include("form.php");  
        } elseif ($_GET["mod"]=="persona" & $_GET["accion"]=="borrar" )
        {
              include("borrar.php");    
        } else 
        {
           include("list.php"); 
        }*/
if ($_GET["mod"] == "persona" && (isset($_GET["accion"]) && $_GET["accion"] == "lst")) {
    include("list.php");
} elseif ($_GET["mod"] == "persona" && (isset($_GET["accion"]) && ($_GET["accion"] == "nuevo" || $_GET["accion"] == "edit"))) {
    include("form.php");
} elseif ($_GET["mod"] == "persona" && (isset($_GET["accion"]) && $_GET["accion"] == "borrar")) {
    include("borrar.php");
} else {
    include("list.php");
}
/*$errores = validarPersonas($_POST);
if (!empty($errores)) {
    echo '<script>alert("' . $errores . '");</script>';
}*/
?>
</body>
</html>