<?php

namespace Monorepo\Vegetable;
// THIS IS A TEST! HALLOWEEN IS COMING!!

class Vegetable
{
    var $edible;
    var $color;

    function __construct($edible, $color = "green")
    {
        $this->edible = $edible == true ? 'Yes' : 'No';;
        $this->color = $color;
    }

    function is_edible()
    {
        echo "YO: " . $this->edible;
        return $this->edible;
    }

    function what_color()
    {
        return $this->color;
    }
}
