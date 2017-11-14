<?php


namespace Meminuygur\Poker;


interface ModelInterface
{

    public function get($key);
    public function set($key,$value);
    public function count($key);

}