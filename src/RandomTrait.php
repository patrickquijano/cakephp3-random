<?php

namespace Random;

use RandomLib\Factory;

/**
 * Trait that generates random string.
 */
trait RandomTrait {

    /**
     * Characters for generating random string.
     *
     * @var array
     */
    protected $_characters = [
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
        $characters = $this->_characters['upper'] . $this->_characters['lower'] . $this->_characters['digit'];
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
        return $factory->getMediumStrengthGenerator()->generateString($length, $this->_characters['digit']);
    }

    /**
     * Generates random string that is good for password use.
     *
     * @param int $length
     * @return string
     */
    public function generatePassword($length = 20) {
        $characters = $this->_characters['upper'] . $this->_characters['lower'] . $this->_characters['digit'] . $this->_characters['special'];
        $factory = new Factory();
        return $factory->getMediumStrengthGenerator()->generateString($length, $characters);
    }

}
