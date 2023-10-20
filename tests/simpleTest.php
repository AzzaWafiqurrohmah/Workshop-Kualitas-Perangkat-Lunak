<?php

use \PHPUnit\Framework\TestCase;
use \tugas\WordCount;
class simpleTest extends TestCase
{
    public function testCountWords(){
        // untuk melakukan unit test, kita buat objek dari fungsi yg akan di tes terlebih dahulu
        // pada kali ini kita menggunakan objek dari WordCount
        $wc = new WordCount();

        $testSentence = "My name is Joko";
        $WordCount = $wc->countWords($testSentence);

        self::assertEquals(4, $WordCount);
        // pada testing kali ini kita gunakan assert equal sebagai anotasi pengecekannya
        //assert equal ini merupakan sebuah anotasi untuk mengecek persamaan nilai dari nilai asli dan nilai inputannya
        // jika keduanya tida sama, maka test ini akan bernilai failed
    }
}