<?php

namespace Spatie\DataTransferObject\Tests\Dummy;

use Spatie\DataTransferObject\Caster;

class ComplexObjectWithCasterCasterDummy implements Caster
{
    /**
     * @param array|mixed $value
     *
     * @return mixed
     */
    public function cast(mixed $value): ComplexObjectWithCasterDummy
    {
        return new ComplexObjectWithCasterDummy(
            name: $value['name']
        );
    }
}
