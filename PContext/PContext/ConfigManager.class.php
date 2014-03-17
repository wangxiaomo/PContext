<?php

namespace PContext;

class ConfigManager {

    private static $_config = array();

    public static function get($k, $default=null){
        if(isset(ConfigManager::$_config[strtoupper($k)])){
            return ConfigManager::$_config[strtoupper($k)];
        }
        return $default;
    }

    public static function set($k, $v){
        return ConfigManager::$_config[strtoupper($k)] = $v;
    }

    public static function merge($configurations){
        ConfigManager::$_config = array_merge(
            ConfigManager::$_config, array_change_key_case($configurations, CASE_UPPER));
    }
}
