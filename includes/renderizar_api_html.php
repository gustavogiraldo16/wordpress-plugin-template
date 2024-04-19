<?php
// Función para hacer la llamada a la API y renderizar la respuesta como HTML
function renderizar_api_html() {
    // URL de la API
    $api_url = 'https://api.ejemplo.com/data';

    // Realizar la llamada GET a la API
    $response = wp_remote_get( $api_url );

    // Verificar si la llamada fue exitosa
    if ( is_wp_error( $response ) ) {
        // Si hay un error, mostrar un mensaje de error
        echo '<p>Ocurrió un error al obtener los datos de la API.</p>';
    } else {
        // Si la llamada fue exitosa, obtener el cuerpo de la respuesta
        $body = wp_remote_retrieve_body( $response );

        // Decodificar el JSON de la respuesta
        $data = json_decode( $body );

        // Verificar si la decodificación fue exitosa
        if ( $data ) {
            // Si hay datos, renderizarlos como HTML
            echo $data;
        } else {
            // Si no se pudieron decodificar los datos, mostrar un mensaje de error
            echo '<p>No se pudieron obtener los datos de la API.</p>';
        }
    }
}

// Agregar un shortcode para mostrar los datos de la API
add_shortcode( 'template', 'renderizar_api_html' );