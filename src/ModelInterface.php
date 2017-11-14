<?php namespace Meminuygur\Poker;

/**
 * Interface ModelInterface
 * @package Meminuygur\Poker
 */

interface ModelInterface
{

    public function get($key);
    public function set($key,$value);
    public function count($key);

}