<?php

namespace Random\Controller\Component;

use Cake\Controller\Component;
use RandomLib\Factory;

class RandomComponent extends Component {

    /**
     * @var \RandomLib\Factory
     */
    private $_factory;

    /**
     * @var array
     */
    protected $_defaultConfig = [
        'upper' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'lower' => 'abcdefghijklmnopqrstuvwxyz',
        'digit' => '0123456789',
    ];

    /**
     * @param array $config
     * @return void
     */
    public function initialize(array $config): void {
        parent::initialize($config);
        $this->_factory = new Factory();
    }

    /**
     * @param int $length
     */
    public function generateToken($length = 40) {
        $characters = $this->getConfig('upper') . $this->getConfig('lower') . $this->getConfig('digit');
        return $this->_factory->getMediumStrengthGenerator()->generateString($length, $characters);
    }

    /**
     * @param int $length
     */
    public function generateNumbers($length = 30) {
        $characters = $this->getConfig('digit');
        return $this->_factory->getMediumStrengthGenerator()->generateString($length, $characters);
    }

}
