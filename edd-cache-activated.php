<?php

/**
 * Plugin Name: Easy Digital Downloads - Cache Plugin Active
 * Description: A simple plugin that tells EDD that a caching plugin is activated.
 * Version: 1.0.0
 * Author: Daan from FFW.Press
 * Author URI: https://ffw.press
 * Text Domain: edd-cache-activated
 * GitHub Plugin URI: https://github.com/Dan0sz/edd-cache-activated
 */

add_filter('edd_is_caching_plugin_active', __return_true());
