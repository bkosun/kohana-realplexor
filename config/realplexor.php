<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
    'default' => array(
        /**
         * Default config for DkLab Realplexor
         *
         * string   host            Host of IN line.
         * string   port            Port of IN line (if 443, SSL is used).
         * string   namespace       Namespace to use.
         * string   identifier      Use this "identifier" marker instead of the default one.
         */
        'host' => '127.0.0.1',
        'port' => '10010',
        'namespace' => NULL,
        'identifier' => 'identifier',
    ),
);