<?php

namespace Idane\GuessNumber\Model;

function generateNumber()
{
    return mt_rand(1, MAX_VALUE);
}