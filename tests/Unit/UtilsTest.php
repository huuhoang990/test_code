<?php

namespace Tests\Unit\Helpers;

use Mockery;
use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use App\Helpers\Utils;
use function PHPUnit\Framework\assertEquals;

class UtilsTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close(); // Ensures Mockery expectations are cleared after each test.
        parent::tearDown();
    }

    public function testConvertFileToArr()
    {
        $fileName = 'file.txt';
        $fileContents = "2\n 1 3 -2\n 4 -2 1";

        Storage::shouldReceive('get')
            ->once()
            ->with($fileName)
            ->andReturn($fileContents);

        $result = Utils::convertFileToArr($fileName);
        assertEquals(count($result), 2);
        assertEquals($result[0][0], 1);
        assertEquals($result[0][1], 3);
        assertEquals($result[0][2], -2);
        assertEquals($result[1][0], 4);
        assertEquals($result[1][1], -2);
        assertEquals($result[1][2], 1);
    }

    /**
     * Test finalHeightOfTheDrone with an empty array from convertFileToArr.
     *
     * @test
     * @runInSeparateProcess // <--- THÊM DÒNG NÀY
     */
    public function testFinalHeightOfTheDrone() {
        $fileName = 'file.txt';
        $fileContents = "2\n 1 3 -2\n 4 -2 1";

        Storage::shouldReceive('get')
            ->once()
            ->with($fileName)
            ->andReturn($fileContents);

        $result = Utils::finalHeightOfTheDrone($fileName);
        assertEquals($result, "2<br>3<br>");
    }
}
