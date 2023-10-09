<?php
// Conexión a la base de datos
$servername = "nombre del servidor";
$username = "nombre de usuario (suele ser root)";
$password = "(suele ser vacía)";
$database = "ventas";

$conn = new mysqli($servername, $username, $password, $database); //creamos la variable de la conexión

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Código para CRUD aquí



//Create o insert
$sql = "INSERT INTO pueblos (codigo, nombre, categoria) VALUES ('07766', 'Burriana', '12')"; //creamos la sentencia sql para agregar registros estáticos a nuestra tabla
if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error; //en caso de un error a la hora de agregar un registro se mostrará este mensaje, el cual incluye la descripción del error
}

//Read o leer
$sql = "SELECT * FROM pueblos"; //creamos la sentencia sql para seleccionar
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Iterar a través de los resultados y mostrar cada registro
    while($row = $result->fetch_assoc()) {
        echo "Código: " . $row["codigo"]. " - Nombre: " . $row["nombre"]. " - Categoría: " . $row["categoria"]. "<br>"; //mostrar los registros obtenidos 
    }
} else {
    echo "No se encontró el registro";//en caso de no encontrar los registrosa
}


//Update o actualizar
$sql = "UPDATE pueblos SET nombre='Nuevo Nombre' WHERE codigo='07766'"; //creamos la sentencia sql para actualizar los registros de nuestra tabla

if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado con éxito";//en caso de que el registro se actualice con éxito, se mostrará este mensaje
} else {
    echo "Error al actualizar: " . $conn->error;
}

//Delete o eliminar
$sql = "DELETE FROM pueblos WHERE codigo='07766'"; //creamos la sentencia sql para eliminar los registros de la tabla

if ($conn->query($sql) === TRUE) {
    echo "Registro eliminado"; //en caso de eliminarse el registro, se mostrará este mensaje
} else {
    echo "Error al eliminar: " . $conn->error; //en caso de un error a la hora de eliminar un registro se mostrará este mensaje, el cual incluye la descripción del error
}

// Cerrar la conexión con la base de datos
$conn->close();

?>