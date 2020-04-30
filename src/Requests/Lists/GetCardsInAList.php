<?php
declare(strict_types=1);
namespace TrelloPhpApi\Requests\Lists;

use GuzzleHttp\Psr7\Request;

class GetCardsInAList extends Request
{
    public function __construct(string $listId = '')
    {
        parent::__construct('GET', 'lists/' . $listId . '/cards');
    }
}
