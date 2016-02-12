<?php
require __DIR__ . "/../../vendor/autoload.php";
/** @file
 * @brief Empty unit testing template
 * @cond
 * @brief Unit tests for the class
 */
class ModelTest extends \PHPUnit_Framework_TestCase{
	const SEED = 1422668587;

	public function test_construct() {
		$Model = new Models\Model(self::SEED);
		$this->assertInstanceOf('Model\Model', $Model);

		// Ensure size 20x20, 10x10 6x6
		for() {
			
		}

		// Ensure player 1 start, end and player 2 start, end
	
		$this->player_test(p1);
		$this->player_test(p1);
	}

	private function connect_test($p) {
		$st = $model->getst($p);
		$end = $model->getend($p);
		$this->assertTrue(in_array($st, $end));
	}

	public function test_hover() {
	  $model = new Models\Model(self::SEED);
		$this->assertEquals(array(2,1), $model->hover(array(2,1)));
	}

	public function test_place() {
		$model = new Models\Model(self::SEED);

		// no connection 
		$this->assertfalse(place(type,loc));
	}
}

/// @endcond
?>
