<?php

namespace App\Giveaway\Messages;

use App\Giveaway\Contracts\Prize;
use ArtisanSDK\Server\Contracts\ServerMessage;
use ArtisanSDK\Server\Entities\Message;

class AwardWinner extends Message implements ServerMessage
{
    /**
     * Tell the winner what they won.
     *
     * @param \App\Giveaway\Contracts\Prize $prize
     */
    public function __construct(Prize $prize)
    {
        $this->prize = $prize->toArray();
    }
}
