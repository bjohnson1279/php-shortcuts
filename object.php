<?php

/**
 * Shortcut alias for is_object
 * @param $obj
 * @return bool
 */
function isObj($obj) {
    return is_object($obj);
}

/**
 * Shortcut alias for property_exists
 * @param $prop - property name to find
 * @param $obj - object to search
 * @return bool
 */
function propXist($prop, $obj) {
    if (isObj($obj)) {
        return property_exists($obj, $prop);
    } else {
        return false;
    }
}
