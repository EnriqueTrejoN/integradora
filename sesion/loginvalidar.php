<?php
session_start();
include_once '../conexion/conexion.php';

// Validar los datos recibidos
if (!isset($_POST['correo']) || !isset($_POST['password'])) {
    echo json_encode(array('error' => 'El correo y la contraseña son datos obligatorios'));
    exit;
}

$username = $_POST['correo'];
print_r($username);
$password = $_POST['password'];
print_r($password);
$usuario = 'Administrador';
print_r($usuario);

// Preparar la consulta para evitar inyecciones SQL
// $sql = "SELECT * FROM usuario WHERE correo_electronico = ? and Id_tipo_de_usuario = ?";
// $sql = "SELECT * FROM usuario, tipo_de_usuario 
$sql = "SELECT * FROM usuario INNER JOIN tipo_de_usuario ON tipo_de_usuario.Id_tipo_de_usuario = usuario.Id_tipo_de_usuario 
        WHERE correo_electronico = ? and tipo_de_usuario.tipo_de_usuario = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $username, $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // if (password_verify($password, $user['password'])) {
        print_r($user);
        print_r("User password", $user['contra']);
        print_r("User password", $password );
        if ($password == $user['contra']) {
            print_r($_SESSION['correo'] = $username);
        // Agregar la variable de sesión y redirigir
        $_SESSION['correo'] = $username;
        header("Location: ../index.php");
        exit;
    } else {
        echo json_encode(array("error" => "Contraseña incorrecta"));

        header("Location: iniciar_sesion.php");
        exit;
    }
} else {
    echo json_encode(array("error" => "Usuario no encontrado"));
    header("Location: ../index.php");
    exit;
}
?>
