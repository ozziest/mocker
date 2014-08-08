<?php 


class TraitTest extends PHPUnit_Framework_TestCase {

	use \Ozziest\Mocker\TraitMocker;

	/**
	 * Argument
	 * 
	 * @test
	 */
    public function mockArgument()
    {
    	try {
    		$this->mock();		
    	} catch (Exception $e) {
			$this->assertStringStartsWith(
				'Missing argument 1 for TraitTest::mock()', 
				$e->getMessage()
			);
    	}
    }


}