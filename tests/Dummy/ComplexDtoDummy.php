<?php

namespace Spatie\DataTransferObject\Tests\Dummy;

use Spatie\DataTransferObject\DataTransferObject;

class ComplexDtoDummy extends DataTransferObject
{
    public string $name;

    public BasicDtoDummy $other;
}
