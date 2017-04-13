<?php
namespace Intuxicated\PersianChar\Tests;

use PHPUnit\Framework\TestCase;
use Intuxicated\PersianChar\PersianChar;

final class PersianCharTest extends TestCase {

    public function testNumbers(){
        $r = PersianChar::ar_numbers('۱۲۳۴1234١٢٣٤');
        $this->assertEquals($r,'۱۲۳۴1234۱۲۳۴');
        $r = PersianChar::en_numbers('۱۲۳۴1234١٢٣٤');
        $this->assertEquals($r,'۱۲۳۴۱۲۳۴١٢٣٤');
        $r = PersianChar::numbers('۱۲۳۴1234١٢٣٤');
        $this->assertEquals($r,'۱۲۳۴۱۲۳۴۱۲۳۴');
        $r = PersianChar::numbers(123456);
        $this->assertEquals($r,'۱۲۳۴۵۶');
    }

    public function testLetters(){
        $r = PersianChar::letters('ؠک مټن تﺴت');
        $this->assertEquals($r,'یک متن تست');
        $r = PersianChar::letters('﷼ ﷲ');
        $this->assertEquals($r,'ریال الله');
    }
}
