<?php

namespace tugas;

class WordCount
{
    // ini merupakan class yang dipanggil saat menginginkan untuk melakukan perhitungan 
    public function countWords($sentence){
        return count(explode(" ", $sentence));
        // fungsi explode disini digunakan untuk membagi string menjadi array
        // yang kemudian akan di dihitung oleh fungsi count
    }
}