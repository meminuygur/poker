<?php namespace Meminuygur\Poker;

/**
 * Sample Shuffler Class
 * Class XShuffler
 * @package Meminuygur\Poker
 */
class XShuffler implements Shuffler
{

    /**
     * @param $cards
     * @return mixed
     */
    public function shuffle($cards)
    {
        shuffle($cards);
        return $cards;
    }

}