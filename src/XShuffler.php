<?php

namespace Meminuygur\Poker;

class XShuffler implements Shuffler
{

    public function shuffle($cards)
    {
        shuffle($cards);
        return $cards;
    }

}