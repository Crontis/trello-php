# trello-php-api
Simple PHP Trello API Request wrapper using Guzzle. This package currently doesn't contain many requests but a basis to build on.

## Example
Get cards of specified board in list "Doing".
```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new \TrelloPhpApi\Client('[your api key]', 'your api token');

$lists = $client->send(new \TrelloPhpApi\Requests\Boards\GetListsOnABoard('id of board, can be seen in board url'));

$doingList = [];
foreach ($lists as $list) {
    if ($list['name'] === 'Doing') {
        $doingList = $list;
        break;
    }
}

$cards = $client->send(new \TrelloPhpApi\Requests\Lists\GetCardsInAList($doingList['id']));
```