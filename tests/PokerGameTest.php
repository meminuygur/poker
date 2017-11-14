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
      session_start();

  }

    public function testIsChanceValid(){

      $cards = Meminuygur\Poker\PokerGame::createCards();

      $shuffler = new Meminuygur\Poker\XShuffler();
      $shuffler->shuffle($cards);


      $game = new Meminuygur\Poker\PokerGame();

      $game->start($cards, "A");
      //$game->play();
      $game->getChance();


      $this->assertTrue($game->getChance() == '7.69%');
      unset($game);
  }
  
}