<?php


namespace Meminuygur\Poker;
use Meminuygur\Poker\Model as Model;

class PlayerModel extends Model
{

    public $cards;
    public $selectedValue;
    public $validCardCount;


    public function setCardDeck($cards) {

        $this->set('cards', $cards);
        $this->cards = $this->get('cards');
    }

    public function getCardDeck(){
        return $this->get('cards');
    }

    public function setSelectedValue($value) {
        $this->set('selectedValue', $value);
        $this->selectedValue = $this->get('selectedValue');
    }

    public function getSelectedValue(){
        return $this->get('selectedValue');
    }


    public function setValidCardCount($value) {
        $this->set('validCardCount', $value);
        $this->validCardCount = $this->get('validCardCount');
    }

    public function getValidCardCount(){
        return $this->get('validCardCount');
    }


    public function increaseValidCard(){
        $this->set('validCardCount',  $this->get('validCardCount') + 1 );
    }

    public function draftCard(){
        return $this->shift('cards');
    }


}