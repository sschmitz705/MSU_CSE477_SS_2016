<?php
require __DIR__ . "/../../vendor/autoload.php";
class ControllerTest extends \PHPUnit_Framework_TestCase{
	const SEED = 1422668587;

	public function test_construct() {
		$wumpus = new game\game(self::SEED);
		$controller = new game\Controller($game, array());

		$this->assertInstanceOf('game/Controller', $controller);
		$this->assertFalse($controller->isReset());
		$this->assertEquals('game.php', $controller->getPage());
	}
	public function test_rotate() {
		$wumpus = new game\game(self::SEED);
		$controller = new game\Controller($game, array());

		$this->assertFalse($controller->isReset());
		$this->assertEquals('game.php', $controller->getPage());

		$this->assertEquals(11, $wumpus->getCurrent()->getNdx());
	}
}
?>
