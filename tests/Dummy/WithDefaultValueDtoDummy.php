<?php

namespace Spatie\DataTransferObject\Tests\Dummy;

use Spatie\DataTransferObject\DataTransferObject;

class WithDefaultValueDtoDummy extends DataTransferObject
{
    public string $name = 'John';
}
