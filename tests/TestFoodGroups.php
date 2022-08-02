<?php
namespace Absortian\BedcaAPI\Tests;

use PHPUnit_Framework_TestCase;
use Absortian\BedcaAPI\BedcaClient;

/**
 * @property BedcaClient api
 */
class TestFoodGroups extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->api = new BedcaClient();
    }
}