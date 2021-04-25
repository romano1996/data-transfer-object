<?php

namespace Spatie\DataTransferObject\Tests\Dummy;

use Spatie\DataTransferObject\Caster;

class ComplexObjectCasterDummy implements Caster
{
    /**
     * @param array|mixed $value
     *
     * @return mixed
     */
    public function cast(mixed $value): ComplexObjectDummy
    {
        return new ComplexObjectDummy(
            name: $value['name']
        );
    }
}
