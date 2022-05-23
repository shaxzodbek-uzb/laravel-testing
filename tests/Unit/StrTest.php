<?php

namespace Tests\Unit;

use App\Utils\Str;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_str_utils_ucfirst()
    {
        $name = 'shaxzodbek';
        $name = Str::ucfirst($name);
        $this->assertTrue($name == 'Shaxzodbek');
    }
    public function test_str_utils_ucfirst_with_upper()
    {
        $name = 'Shaxzodbek';
        $name = Str::ucfirst($name);
        $this->assertTrue($name == 'Shaxzodbek');
    }
}
