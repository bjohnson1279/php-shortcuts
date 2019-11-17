<?php
/**
 * Alias shortcut for is_array
 * @param $arr
 * @return bool
 */
function isArr($arr) {
    return is_array($arr);
}

/**
 * Alias shortcut for in_array
 * @param $needle - value to search for
 * @param $haystack - array to find value within
 * @return bool
 */
function inArr($needle, $haystack) {
    if (isArr($haystack)) {
        return in_array($needle, $haystack);
    } else {
        return false;
    }
}

/**
 * Alias shortcut for array_key_exists
 * @param $key - array key to find
 * @param $arr - array to be searched within
 * @return bool
 */
function arrKeyXist($key, $arr) {
    if (isArr($arr)) {
        return array_key_exists($key, $arr);
    } else {
        return false;
    }
}
