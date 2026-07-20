<?php

declare(strict_types=1);

namespace Tests;

use CodeIgniter\Settings\Handlers\ArrayHandler;
use CodeIgniter\Settings\Handlers\BaseHandler;
use ReflectionMethod;
use Tests\Support\TestCase;

/**
 * @internal
 */
final class BaseHandlerTest extends TestCase
{
    public function testPrepareValueSerializesBooleansAsStrings(): void
    {
        $method = new ReflectionMethod(BaseHandler::class, 'prepareValue');

        $this->assertSame('1', $method->invoke(new ArrayHandler(), true));
        $this->assertSame('0', $method->invoke(new ArrayHandler(), false));
    }
}
