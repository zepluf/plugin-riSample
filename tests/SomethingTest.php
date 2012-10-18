<?php
/**
 * Created by RubikIntegration Team.
 *
 * Date: 10/15/12
 * Time: 11:53 AM
 * Question? Come to our website at http://rubikin.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code or refer to the LICENSE
 * file of ZePLUF framework
 */

namespace plugins\riSample\tests;

use \plugins\riSample\lib\Something;

class SomethingTest extends \UnitTestCase
{
    protected $something;

    public function setUp(){
        $this->something = new Something();
    }

    public function testSet(){
        // not a very cool test, but you get the point :)
        $this->assertEqual($this->something->coolMethod(), ri("I'm cool"));
    }
}