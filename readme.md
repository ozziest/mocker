# Mocker

Mocket is a simple mock creator for Eloquent Models under Laravel workbench.

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
    "require": {
        "ozziest/defencers": "dev-master",
    }
}
```

## Usage

```php
use \Ozziest\Mocker\Eloquent

class SampleTest extends PHPUnit_Framework_TestCase {
	
	public function testSample() 
	{
    	$mock = new Eloquent();
    	$mock = $mock->save(1, 123)->get();		
	}

}
```

## Properties

* `save`, `find`, `all`: Simple Eloquent methods
* `get`: Return mock object

## Licence

[MIT](http://opensource.org/licenses/MIT)

