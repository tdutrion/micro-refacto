<?php

declare(strict_types=1);

include_once __DIR__.'/Script.php';

use PHPUnit\Framework\TestCase;

final class ScriptTest extends TestCase
{
    private const PARAM_NAME_PDF = ['test', 'demo', '1'];
    private const EXPECTED_RESULT = '1-demo-test';

    public function testScript()
    {
        $result = (new Script)->test(self::PARAM_NAME_PDF);
        $this->assertEquals(self::EXPECTED_RESULT, $result);
    }
}

