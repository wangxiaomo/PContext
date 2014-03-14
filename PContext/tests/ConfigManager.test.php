<?php

class ConfigManagerTest extends PHPUnit_Framework_TestCase {

    public function testBasicMethods(){
        $this->assertEquals(
            ConfigManager::get('m1', 'default'), 'default');
        $this->assertNull(ConfigManager::get('m1'));

        $k1 = 'u will not use this key!!!';
        $k2 = 'u will not use this key, either!!!';
        ConfigManager::set($k1, 3);
        $this->assertEquals(
            ConfigManager::get($k1, 'default'), 3);
        $this->assertNull(ConfigManager::get($k2));

        ConfigManager::merge(
            array(
                $k1 =>  4,
                $k2 =>  5,
            )
        );
        $this->assertFalse(ConfigManager::get($k1) == 3);
        $this->assertEquals(ConfigManager::get($k1), 4);
        $this->assertEquals(ConfigManager::get($k2), 5);
    }
}
