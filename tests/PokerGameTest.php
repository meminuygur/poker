<?php 

/**
*  Corresponding Class to test YourClass class
*
*  For each class in your library, there should be a corresponding Unit-Test for it
*  Unit-Tests should be as much as possible independent from other test going on.
*
*  @author yourname
*/
class PokerGameTest extends PHPUnit_Framework_TestCase{

  public function __construct()
  {
      parent::__construct();

  }


    public function testIsChanceValid(){

      $cards = Meminuygur\Poker\PokerGame::createCards();

      $shuffler = new Meminuygur\Poker\XShuffler();
      $shuffler->shuffle($cards);

      $game = new Meminuygur\Poker\PokerGame();
      $game->start($cards, "A");
      $game->getChance();

      $this->assertTrue($game->getChance() == '7.69%');
      unset($game);
  }

    public function testIsValidCardDeck()
    {

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
        foreach ($suits as $key => $suit) {

            foreach ($values as $key2 => $value) {
                $cards[] = array(
                    'suit' => $key,
                    'value' => $key2,
                );
            }
        }

        $this->assertTrue(Meminuygur\Poker\PokerGame::createCards() == $cards);
        unset($game);

    }
  
}