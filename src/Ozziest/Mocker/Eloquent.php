<?php namespace Ozziest\Mocker;

use Mockery;

class Eloquent {

	/**
	 * Save
	 *
	 * @param  integer 		$count 	(optional)
	 * @return array 		$array 	(optional)
	 * @return Object
	 */
	public function save($count = 1, $array = array())
	{
		$this->mock = Mockery::mock('Eloquent');
        $this->mock->shouldReceive('save')
        	 	   ->times($count)
        	 	   ->andReturn($array);
       	return $this;
	}

	/**
	 * Find
	 *
	 * @param  integer 		$count 	(optional)
	 * @return array 		$array 	(optional)
	 * @return Object
	 */
	public function find($count = 1, $array = array())
	{
		$this->mock = Mockery::mock('Eloquent');
        $this->mock->shouldReceive('find')
        	 	   ->times($count)
        	 	   ->andReturn($array);
       	return $this;
	}

	/**
	 * All
	 *
	 * @return array 		$array 	(optional)
	 * @return Object
	 */
	public function all($array = array())
	{
		$this->mock = Mockery::mock('Eloquent');
        $this->mock->shouldReceive('all')
        	 	   ->andReturn($array);
       	return $this;
	}

	/**
	 * Get 
	 *
	 * @return Mockery
	 */
	public function get()
	{
		return $this->mock;
	}

}