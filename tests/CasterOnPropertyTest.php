<?php

namespace Spatie\DataTransferObject\Tests;

use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\Tests\Dummy\ComplexObjectDummy;
use Spatie\DataTransferObject\Tests\Dummy\ComplexObjectCasterDummy;

class CasterOnPropertyTest extends TestCase
{
    /** @test */
    public function property_is_casted()
    {
        $dto = new class(complexObject: [ 'name' => 'test' ]) extends DataTransferObject {
            #[CastWith(ComplexObjectCasterDummy::class)]
            public ComplexObjectDummy $complexObject;
        };

        $this->assertEquals('test', $dto->complexObject->name);
    }
}
