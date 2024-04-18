<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) die;

// Delete option
delete_option( 'template_version' );