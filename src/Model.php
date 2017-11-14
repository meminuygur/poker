<?php

namespace Meminuygur\Poker;


class Model implements ModelInterface
{

    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public function get($key){
        return $_SESSION[$key];
    }

    public function count($key){
        return count($_SESSION[$key]);
    }

    public function shift($key) {
        $arr = array_shift( $_SESSION[$key] );
        return $arr;
    }

    public function add($key, $value) {
        $_SESSION[$key] += $value;
    }


}