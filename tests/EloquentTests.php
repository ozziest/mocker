<?php 

use \Ozziest\Mocker\Eloquent;

class EloquentTests extends PHPUnit_Framework_TestCase {

	/**
	 * Save
	 * 
	 * @test
	 */
    public function save()
    {
    	$mock = new Eloquent();
    	$mock = $mock->save(1, 123)
    				 ->get();
        $this->assertEquals($mock->save(1), 123);
    }

	/**
	 * Find
	 * 
	 * @test
	 */
    public function find()
    {
    	$mock = new Eloquent();
    	$mock = $mock->find(1, array(
    						'id' => 1, 
    						'name' => 'Özgür', 
    						'surname' => 'Işıklı'
    					))
    				 ->get();
    	$result = $mock->find(1);
        $this->assertEquals($result['name'], 'Özgür');
    }

	/**
	 * All
	 * 
	 * @test
	 */
    public function all()
    {
    	$mock = new Eloquent();
    	$mock = $mock->all(array(
    						array(
    							'id' => 1,
    							'name' => 'Özgür'
    						),
    						array(
    							'id' => 2,
    							'name' => 'Adem'
    						),
    					))
    				 ->get();
    	$result = $mock->all();
        $this->assertEquals($result[1]['name'], 'Adem');
    }

}