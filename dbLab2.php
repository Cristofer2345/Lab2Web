<?php
function getMateria()
 {
    $dataBase = new PDO('mysql:host=localhost;dbname=dbsistemaweb;charset=utf8', 'root', '');   
    $sentence = $dataBase-> prepare("select * from materia");
    $sentence->execute();
    $materia = $sentence-> fetchAll(PDO::FETCH_OBJ);
    return $materia;
}
function getSearch($search){
    $dataBase = new PDO('mysql:host=localhost;dbname=dbsistemaweb;charset=utf8', 'root', '');   
    $sentence = $dataBase-> prepare("SELECT * FROM materia WHERE nombre LIKE '%$search%'");
    $sentence->execute();
    $materia = $sentence-> fetchAll(PDO::FETCH_OBJ);
    return $materia;
}
function insertPago($name,$Profesor)  {
    $dataBase = new PDO('mysql:host=localhost;dbname=dbsistemaweb;charset=utf8', 'root', '');  
    $sentence = $dataBase->prepare("INSERT INTO materia (nombre,profesor) VALUES (?,?)");
   $ValueInsert = $sentence->execute([$name,$Profesor]); 
 if ($ValueInsert) {
    $Exitoso = "Datos insertados correctamente.";
     return $Exitoso;
} else {
    $fallo = "Error al insertar datos.";
    return $fallo;
  
}
}
?>