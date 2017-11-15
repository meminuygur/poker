<?php namespace Meminuygur\Poker;

use Meminuygur\Poker\PlayerModel as PlayerModel;

/**
 * Class PokerGame
 * @package Meminuygur\Poker
 */

class PokerGame
{
    public $player_model;
    public static $cards;


    /**
     * PokerGame constructor.
     */
    public function __construct()
    {
        $this->player_model = new PlayerModel();
    }


    /**
     * @param $cards
     * @param $selectedValue
     */
    public function start($cards, $selectedValue,$selectedSuit) {

        $this->player_model->setCardDeck($cards);
        $this->player_model->setSelectedValue($selectedValue);
        $this->player_model->setSelectedSuit($selectedSuit);

        $this->countValidCards();

    }

    /**
     * Draft a card from card deck.
     * return @boolean
     */
    public function play(){

        $card = $this->player_model->draftCard();
        $this->countValidCards();

        return ($card['value'] == $this->player_model->getSelectedValue());

    }


    /**
     * Calculates and returns chance of getting desired card
     * @return string
     */
    public function getChance() {

        return  number_format(
            $this->player_model->getValidCardCount() / count( $this->player_model->getCardDeck() ) * 100,
            2)
            . "%";
    }

    /**
     * Generates main card array
     * @return array
     */
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

    /**
     * Checks and counts for suitable card values.
     */
    private function countValidCards(){

        $this->player_model->setValidCardCount(0);

        foreach ($this->player_model->getCardDeck() as $card) {

            if ( $card['value'] == $this->player_model->getSelectedValue() ) {
                $this->player_model->increaseValidCard();
            }
        }

    }

}