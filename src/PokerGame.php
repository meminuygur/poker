<?php


namespace Meminuygur\Poker;

use Meminuygur\Poker\PlayerModel as PlayerModel;

class PokerGame
{
    public $player_model;
    public static $cards;

    public function __construct()
    {
        $this->player_model = new PlayerModel();
    }


    public function start($cards, $selectedValue) {

        $this->player_model->setCardDeck($cards);
        $this->player_model->setSelectedValue($selectedValue);

        $this->countValidCards();

    }

    public function play(){

        $card = $this->player_model->draftCard();
        $this->countValidCards();

        if ($card['value'] == $this->player_model->getSelectedValue() ) {
            echo "ok ";
        }

    }

    public function getChance() {

        return  number_format(
            $this->player_model->getValidCardCount() / count( $this->player_model->getCardDeck() ) * 100,
            2)
            . "%";
    }

    public static function createCards() {

        $suits = array(
            'H' => 'Hearts',
            'C' => 'Clubs',
            'D' => 'Diamonds',
            'S' => 'Spades'
        );
        $values = array(
            'A' => 'Ace',
            '2' => 'Two',
            '3' => 'Three',
            '4' => 'Four',
            '5' => 'Five',
            '6' => 'Six',
            '7' => 'Seven',
            '8' => 'Eight',
            '9' => 'Nine',
            '10' => 'Ten',
            'J' => 'Jack',
            'Q' => 'Queen',
            'K' => 'King'
        );

        // 2 dim. card array
        $cards = array();

        // create card array as 2 dim. array
        foreach ($suits as $key=>$suit){

            foreach ($values as $key2=>$value){
                $cards[] = array(
                    'suit' => $key,
                    'value' => $key2,
                );
            }
        }

        self::$cards = $cards;
        return $cards;

    }

    private function countValidCards(){

        $this->player_model->setValidCardCount(0);

        foreach ($this->player_model->getCardDeck() as $card) {

            if ( $card['value'] == $this->player_model->getSelectedValue() ) {
                $this->player_model->increaseValidCard();
            }
        }

    }

}