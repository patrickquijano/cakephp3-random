<?php

namespace Random\Test\TestCase\Controller\Component;

use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;
use Random\Controller\Component\RandomComponent;

class RandomComponentTest extends TestCase {

    /**
     * @var \Random\Controller\Component\RandomComponent
     */
    public $Random;

    /**
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Random = new RandomComponent($registry);
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
