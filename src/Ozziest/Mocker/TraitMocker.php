<?php namespace Ozziest\Mocker;

trait TraitMocker {

    public function mock($model)
    {
    	if (\App::environment() === 'testing') {
    		$this->repository->model = $model;    		
    	} else {
    		throw new RuntimeException('Mock can not use out of test environment.');
    	}
    }

}