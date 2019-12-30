<?php

namespace Random\Model\Behavior;

use Cake\ORM\Behavior;
use RandomLib\Factory;

/**
 * Behavior that generates random string.
 */
class RandomBehavior extends Behavior {

    /**
     * Default config.
     * 
     * @var array
     */
    protected $_defaultConfig = [
        'upper' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'lower' => 'abcdefghijklmnopqrstuvwxyz',
        'digit' => '0123456789',
        'special' => '~!@#$%^&*()_+-={}[]',
    ];

    /**
     * Generates random string that is good for token use.
     *
     * @param int $length
     * @return string
     */
    public function generateToken($length = 40) {
        $characters = $this->getConfig('upper') . $this->getConfig('lower') . $this->getConfig('digit');
        $factory = new Factory();
        return $factory->getMediumStrengthGenerator()->generateString($length, $characters);
    }

    /**
     * Generates random string that contains numbers only.
     *
     * @param int $length
     * @return string
     */
    public function generateNumbers($length = 30) {
        $factory = new Factory();
        return $factory->getMediumStrengthGenerator()->generateString($length, $this->getConfig('digit'));
    }

    /**
     * Generates random string that is good for password use.
     *
     * @param int $length
     * @return string
     */
    public function generatePassword($length = 20) {
        $characters = $this->getConfig('upper') . $this->getConfig('lower') . $this->getConfig('digit') . $this->getConfig('special');
        $factory = new Factory();
        return $factory->getMediumStrengthGenerator()->generateString($length, $characters);
    }

}
