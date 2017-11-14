<?php namespace Meminuygur\Poker;

use Meminuygur\Poker\Model as Model;

/**
 * Class PlayerModel
 * @package Meminuygur\Poker
 */

class PlayerModel extends Model
{

    public $cards;
    public $selectedValue;
    public $validCardCount;


    /**
     * @param $cards
     */
    public function setCardDeck($cards) {

        $this->set('cards', $cards);
        $this->cards = $this->get('cards');
    }

    /**
     * @return mixed
     */
    public function getCardDeck(){
        return $this->get('cards');
    }

    /**
     * @param $value
     */
    public function setSelectedValue($value) {
        $this->set('selectedValue', $value);
        $this->selectedValue = $this->get('selectedValue');
    }

    /**
     * @return mixed
     */
    public function getSelectedValue(){
        return $this->get('selectedValue');
    }


    /**
     * @param $value
     */
    public function setValidCardCount($value) {
        $this->set('validCardCount', $value);
        $this->validCardCount = $this->get('validCardCount');
    }

    /**
     * @return mixed
     */
    public function getValidCardCount(){
        return $this->get('validCardCount');
    }


    /**
     *
     */
    public function increaseValidCard(){
        $this->set('validCardCount',  $this->get('validCardCount') + 1 );
    }

    /**
     * @return mixed
     */
    public function draftCard(){
        return $this->shift('cards');
    }


}