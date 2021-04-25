<?php

namespace Spatie\DataTransferObject\Tests\Dummy;

use Spatie\DataTransferObject\Attributes\DefaultCast;
use Spatie\DataTransferObject\DataTransferObject;

#[DefaultCast(ComplexObjectDummy::class, ComplexObjectCasterDummy::class)]
class ComplexDtoWithCastDummy extends DataTransferObject
{
    public string $name;

    public ComplexObjectDummy $object;
}
