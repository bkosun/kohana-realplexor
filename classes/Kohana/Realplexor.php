<?php defined('SYSPATH') or die('No direct script access.');

/**
 * DkLab Realplexor wrapper
 *
 * @package    Kohana/Realplexor
 * @version    1.0
 * @author     Borislav Kosun
 * @copyright  (c) 2016 Borislav Kosun
 * @license    MIT
 */
class Kohana_Realplexor {
    /**
     * DkLab Realplexor instances
     * @var null
     */
    protected static $_instance = NULL;

    /**
     * Get DkLab Realplexor instances
     *
     * @return Dklab_Realplexor
     */
    public static function instance()
    {
        if (is_null(self::$_instance)) {
            require_once Kohana::find_file('vendor/dklab_realplexor/api/php/Dklab/', 'Realplexor');

            $config = Kohana::$config->load('realplexor');

            self::$_instance = new Dklab_Realplexor(
                $config['host'],
                $config['port'],
                $config['namespace']
            );
        }

        return self::$_instance;
    }

} // End Realplexor