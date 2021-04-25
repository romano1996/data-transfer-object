<?php

namespace Spatie\DataTransferObject\Tests\Dummy;

use Spatie\DataTransferObject\Attributes\CastWith;

#[CastWith(ComplexObjectWithCasterCasterDummy::class)]
class ComplexObjectWithCasterDummy
{
    public function __construct(
        public string $name,
    ) {
    }
}
