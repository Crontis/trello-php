<?php
declare(strict_types=1);
namespace TrelloPhp\Requests\Boards;

use GuzzleHttp\Psr7\Request;

class GetListsOnABoard extends Request
{
    public function __construct(string $boardId = '')
    {
        parent::__construct('GET', 'boards/' . $boardId . '/lists');
    }
}
