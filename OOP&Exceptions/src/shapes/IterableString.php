<?php


class IterableString implements Iterator
{
    private $index;
    private $contents;

    public function __construct($contents)
    {
        $this->contents = $contents;
        $this->index = 0;
    }

    public function current()
    {
        return $this->contents[$this->index];
    }

    public function key()
    {
        return $this->index;
    }

    public function next()
    {
        $this->index++;
    }

    public function rewind()
    {
        $this->index = 0;
    }

    public function valid()
    {
        return strlen($this->contents) > $this->index;
    }
}