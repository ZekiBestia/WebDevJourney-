<?php
// Obtén la URL del parámetro de consulta 'url'
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Verifica si la URL es válida
if (filter_var($url, FILTER_VALIDATE_URL)) {
    // Configura los encabezados para permitir la carga en un iframe
    header('X-Frame-Options: ALLOW-FROM ' . $url);
    
    // Imprime el contenido de la página
    echo file_get_contents($url);
} else {
    // URL no válida, devuelve un mensaje de error
    echo 'URL no válida';
}
?>
