<?php

namespace core;

class App
{


    private static bool|object $instance = false;
    protected Router|null $router  = null;


    public static function getInstance(): App
    {
        // If we have no instance, create one.
        if (!self::$instance) {
            self::$instance = new static();
        }

        // Late Static Binding,
        // Allows Pattern to be Re-used
        return self::$instance;
    }

    protected function __construct()
    {
    }
}
