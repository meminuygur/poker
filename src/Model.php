<?php

namespace Meminuygur\Poker;

/*
 * Implements modelInterface and used for general data proccess
 *
 */


class Model implements ModelInterface
{


    /**
     * @param $key
     * @param $value
     */
    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }


    /**
     * @param $key
     * @return mixed
     */
    public function get($key){
        return $_SESSION[$key];
    }


    /**
     * @param $key
     * @return int
     */
    public function count($key){
        return count($_SESSION[$key]);
    }


    /**
     * @param $key
     * @return mixed
     */
    public function shift($key) {
        $arr = array_shift( $_SESSION[$key] );
        return $arr;
    }


    /**
     * @param $key
     * @param $value
     */
    public function add($key, $value) {
        $_SESSION[$key] += $value;
    }


}