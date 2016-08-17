# DkLab Realplexor wrapper for Kohana 3.3
This module is simple wrapper [DkLab Realplexor](http://www.dklab.ru/lib/dklab_realplexor/) for [Kohana PHP Framework](https://github.com/kohana)

## Getting Started
1. Download the module into your modules subdirectory.
2. Enable the module in your bootstrap file:

  ```php
  /**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
// ...
    'realplexor'       => MODPATH . 'realplexor',
));
  ```
3. Make sure the settings in `config/realplexor.php` are correct for your environment. If not, copy the file to `application/config/realplexor.php` and change the values accordingly.

## Usage
```php
// Instantiate a DkLab Realplexor:
$rpl = Realplexor::instance();

// Send data to one channel.
$rpl->send('Alpha', array('here' => 'is', 'any' => array('structured', 'data'));

// Send data to multiple channels at once.
$rpl->send(array('Alpha', 'Beta'), 'any data');

// Send data limiting receivers.
$rpl->send('Alpha', 'any data', array($id1, $id2, ...));

// Send data with manual cursor specification (10 and 20).
$rpl->send(array('Alpha' => 10, 'Beta' => 20), 'any data');

// Get the list of all listened channels.
$list = $rpl->cmdOnline();

// Get the list of online channels which names are started with 'id_' only.
$list = $rpl->cmdOnline(array('id_'));

$pos = 0;
while (1) {
     echo "Watching status changes for channels 'id_***' from $pos...\n";
     foreach ($rpl->cmdWatch($pos, 'id_') as $event) {
         echo "Received: {$event['event']} - {$event['id']}\n";
         $pos = $event['pos'];
     }
     usleep(300000);
}
```

## License
This package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)