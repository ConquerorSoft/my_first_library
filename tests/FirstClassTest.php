<?php

namespace conquerorsoft\my_first_library;

class FirstClassTest extends \PHPUnit\Framework\TestCase
{
    public function testEncodeStringString()
    {
        $firstclass=new FirstClass();
        $encoded=$firstclass->encodeString("string");
        $this->assertSame($encoded, "120rwp");
    }

    public function testEncodeStringAnother()
    {
        $firstclass=new FirstClass();
        $encoded=$firstclass->encodeString("another");
        $this->assertSame($encoded, "jwx2qn0");
    }

    public function testDecodeString2n12rwp()
    {
        $firstclass=new FirstClass();
        $decoded=$firstclass->decodeString('2n12rwp');
        $this->assertSame('testing', $decoded);
    }

    public function testDecodeStringnunyqyjw2()
    {
        $firstclass=new FirstClass();
        $decoded=$firstclass->decodeString('nunyqyjw2');
        $this->assertSame('elephpant', $decoded);
    }

    public function testEncodeStringWithEmptyString()
    {
        $firstclass=new FirstClass();
        $encoded=$firstclass->encodeString('');
        $this->assertSame($encoded, '');
    }

    public function testDecodeStringWithEmptyString()
    {
        $firstclass=new FirstClass();
        $decoded=$firstclass->decodeString('');
        $this->assertSame($decoded, '');
    }
    
    public function testEncodeStringWithUppercaseString()
    {
        $firsclass=new FirstClass();
        $encoded=$firsclass->encodeString('STRING');
        $this->assertSame($encoded, "120rwp");
    }

    public function testDecodeStringWithUppercaseString()
    {
        $firsclass=new FirstClass();
        $decoded=$firsclass->decodeString('120RWP');
        $this->assertSame($decoded, "string");
    }

    public function testEncodeStringWithNonExistentCharacter()
    {
        $firsclass=new FirstClass();
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Please provide only numbers and alphanumerical characters");
        $encoded=$firsclass->encodeString('@#!');
    }
    
    public function testDecodeStringWithNonExistentCharacter()
    {
        $firsclass=new FirstClass();
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Please provide only numbers and alphanumerical characters");
        $decoded=$firsclass->decodeString('@#!');
    }

    public function testEncodeStringWithNumbers()
    {
        $firstclass=new FirstClass();
        $encoded=$firstclass->encodeString("456");
        $this->assertSame($encoded, "def");
    }

    public function testDecodeStringWithNumbers()
    {
        $firstclass=new FirstClass();
        $decoded=$firstclass->decodeString("456");
        $this->assertSame($decoded, "vwx");
    }
}
