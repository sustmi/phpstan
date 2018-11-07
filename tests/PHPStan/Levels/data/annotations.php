<?php

namespace Levels\Annotations;

use Levels\Casts\SingletonTrait;

class Bar
{
    use SingletonTrait;

    public $someReadOnlyProperty;

    /**
     * @return Bar
     */
    public static function getInstance()
    {
    }
}

/**
 * @method static Baz getInstance()
 */
class Baz
{
    use SingletonTrait;

    public $someReadOnlyProperty;
}

class Foo
{
    public function doFoo()
    {
        $a = Bar::getInstance();
        $a->someReadOnlyProperty;
        $a->undefinedProperty;

        $b = Baz::getInstance();
        $b->someReadOnlyProperty;
        $b->undefinedProperty;
    }
}
