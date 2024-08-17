<?php
// require('../conexion/conexion.php');
// include '../fpdf/table.php';

// $pdf = new PDF_MC_Table();
// $pdf->AddPage();
// $pdf->SetFont('Arial', '', 14);

// // Establece los anchos de las columnas
// $pdf->SetWidths(array(10, 70, 50, 40));

// $sql = "SELECT paquetes.Id_paquete, eventos.Nom_evento, tipo_paquete.tipo_de_paquete 
//         FROM paquetes
//         JOIN eventos ON paquetes.Id_eventos = eventos.Id_eventos
//         JOIN tipo_paquete ON paquetes.Id_tipo_de_paquetes = tipo_paquete.Id_Tipo_de_paquetes
//         ORDER BY paquetes.Id_paquete ASC, eventos.Nom_evento, tipo_paquete.tipo_de_paquete";
// $productos = $conn->query($sql);

// // Verifica si hay datos para mostrar
// if ($productos->num_rows > 0) {
//     // Itera sobre cada fila de resultados y agrega una fila al PDF
//     while ($row = $productos->fetch_assoc()) {
//         $pdf->Row(array(
//             $row["Id_paquete"],
//             $row["tipo_de_paquete"],
//             $row["Nom_evento"],
//         ));
//     }
// } else {
//     $pdf->Row(array('No hay datos disponibles', '', '', ''));
// }

// // Cerrar la conexión
// $conn->close();

// // Salida del PDF
// $pdf->Output();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadro Comparativo: Conceptos de la función isFormValid(formName)</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            font-weight: bold;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Cuadro Comparativo: Conceptos de la función isFormValid(formName)</h1>
    <table>
        <thead>
            <tr>
                <th>Concepto</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>formName</td>
                <td>El nombre del formulario, que corresponde al atributo id del formulario en HTML.</td>
            </tr>
            <tr>
                <td>was-validated</td>
                <td>Clase de Bootstrap que se añade al formulario para mostrar los estilos de validación.</td>
            </tr>
            <tr>
                <td>checkValidity()</td>
                <td>Método nativo de JavaScript que comprueba si todos los campos del formulario cumplen con las reglas de validación.</td>
            </tr>
            <tr>
                <td>invalid-feedback</td>
                <td>Clase de Bootstrap utilizada para mostrar mensajes de error en los campos de formulario que no cumplen las reglas de validación.</td>
            </tr>
            <tr>
                <td>offsetParent</td>
                <td>Propiedad de un elemento en el DOM que indica si el elemento es visible. Se utiliza para determinar si un mensaje de error es visible.</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
