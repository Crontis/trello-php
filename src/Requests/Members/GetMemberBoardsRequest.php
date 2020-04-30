<?php
declare(strict_types=1);
namespace TrelloPhpApi\Requests\Members;

use GuzzleHttp\Psr7\Request;

class GetMemberBoardsRequest extends Request
{
    public function __construct(string $memberId = '')
    {
        if (!$memberId) {
            $memberId = 'me';
        }

        parent::__construct('GET', 'members/' . $memberId . '/boards');
    }
}
