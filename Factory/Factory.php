<?php

/**
 * factory()->create();
 *
 * @param $class
 * @param array $attributes
 * @param null $times
 * @return mixed
 */
function create($class, $attributes = [], $times = null) {

    return factory($class, $times)->create($attributes);

}

/**
 * factory()->make();
 *
 * @param $class
 * @param array $attributes
 * @param null $times
 * @return mixed
 */
function make($class, $attributes = [], $times = null) {

    return factory($class, $times)->make($attributes);

}