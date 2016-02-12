<?php
require __DIR__ . "/../../vendor/autoload.php";
/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */
class ViewTest extends \PHPUnit_Framework_TestCase{
	const SEED = 1422668587;

	public function test_construct() {
		$model = new model\model(self::SEED);
		$view = new model\View($model);

		$this->assertInstanceOf('model\View', $view);
	}
	public function test_parts() {
		$model = new model\model(self::SEED);
		$view = new model\View($model);
	}
  public function test_buttons() {
		$model = new model\model(self::SEED);
		$view = new model\View($model);
	}
	public function test_player() {
		$model = new model\model(self::SEED);
		$view = new model\View($model);
	}
	public function test_model() {
		$model = new model\model(self::SEED);
		$view = new model\View($model);
	}
}

/// @endcond
?>
