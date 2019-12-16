<?php

namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\RandomBehavior;
use Cake\TestSuite\TestCase;

class RandomBehaviorTest extends TestCase {

    /**
     * @var \App\Model\Behavior\RandomBehavior
     */
    public $Random;

    /**
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $this->Random = new RandomBehavior();
    }

    /**
     * @return void
     */
    public function tearDown() {
        unset($this->Random);
        parent::tearDown();
    }

    /**
     * @return void
     */
    public function testInitialization() {
        $this->markTestIncomplete('Not implemented yet.');
    }

}
