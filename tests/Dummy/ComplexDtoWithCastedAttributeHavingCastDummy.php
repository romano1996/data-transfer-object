<?php

namespace Spatie\DataTransferObject\Tests\Dummy;

use Spatie\DataTransferObject\DataTransferObject;

class ComplexDtoWithCastedAttributeHavingCastDummy extends DataTransferObject
{
    public string $name;

    public ComplexDtoWithCastDummy $other;
}
