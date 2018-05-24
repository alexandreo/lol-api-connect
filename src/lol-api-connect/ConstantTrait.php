<?php

namespace Alexandreo\LolApiConnect;


/**
 * Trait ConstantTrait
 * @package Alexandreo\LolApiConnect
 */
trait ConstantTrait
{

    /**
     * @return array
     */
    static function getConstants() {
        $reflect = new \ReflectionClass(__CLASS__);
        return $reflect->getConstants();
    }

}