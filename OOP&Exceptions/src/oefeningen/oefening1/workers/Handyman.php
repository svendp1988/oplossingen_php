<?php

namespace workers;

use \tools\Tool;

class Handyman implements Worker
{
    private $tool;

    public function __construct(Tool $tool)
    {
        $this->tool = $tool;
    }

    function work(): void
    {
        $this->tool->doSomething();
    }
}