<?php


namespace workers;


interface Worker
{
    function work() :void;
}