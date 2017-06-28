<?php

/*
Plugin Name: Shortcode - Gets Server Info (get, post, server)
Description: Shortcode - Gets Server Info (get, post, server)
Version:     1.0.0
Author URI:  http://www.travisfont.com
*/

namespace
{
    // don't load directly
    defined('ABSPATH') || exit;
    defined('WPINC')   || exit;

    if (!class_exists('GetServerInfoShortcode'))
    {
        abstract class GetServerInfoShortcodeParameters
        {
            // Defined Shortcode Tag
            const SHORTCODE = 'get-server-info';

            // Available Shortcode Attributes (defaults)
            const PARAMETERS = array
            (
                'ids'   => NULL,
                'class' => NULL,
                'col'   => 'col-md-2'
            );

            const POST_TYPE = NULL;
        }

        final class GetServerInfoShortcode extends \GetServerInfoShortcodeParameters
        {
            public function __construct()
            {
                add_action('init', array($this, 'init'), 1);
            }

            public static function init()
            {
                // Apply the shortcode
                add_shortcode(self::SHORTCODE, function ($attributes)
                {
                    return self::output($attributes);
                });
            }

            private static function output($attributes = NULL)
            {
                // Return output data (HTML text within a span)
                switch (preg_replace('/[^A-Z]+/', '', strtoupper(trim($attributes[0]))))
                {
                    case 'SERVER':
                        $data = $_SERVER;
                        break;
                    case 'GET':
                        $data = $_GET;
                        break;
                    case 'POST':
                        $data = $_POST;
                        break;
                }

                // SERVER, GET, or POST exist
                if (isset($data))
                {
                    // if type parameter exist
                    if (isset($attributes['type']) && !empty($attributes['type']))
                    {
                        // clean format the type parameter + look for matching value
                        switch (preg_replace('/[^A-Z_]+/', '', strtoupper(trim($attributes['type']))))
                        {
                            case 'VAR_DUMP':

                                var_dump($data);

                                break;

                            case 'PRE_PRINT_R':

                                echo '<pre>';
                                print_r($data);
                                echo '</pre>';

                                break;

                            case 'PRINT_R':
                            default:

                                print_r($data);
                        }
                    }
                    else
                    {
                        // no type parameter exist - default print_r is used
                        print_r($data);
                    }
                }
            }
        }
    }

    (new \GetServerInfoShortcode);
}
