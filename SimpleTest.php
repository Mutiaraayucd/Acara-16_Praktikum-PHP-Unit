<?php
// Membutuhkan Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Membutuhkan class WordCount yang akan diuji
require_once "WordCount.php";

// Class untuk menjalankan Testing.
class SimpleTest extends TestCase {
    public function testCountWords() {
        // Membuat objek WordCount
        $wordCount = new WordCount();

        // Menyediakan kalimat yang akan diuji, seharusnya terdiri dari 4 kata.
        $testSentence = "My name is Joko";

        // Memanggil metode countWords untuk menghitung kata-kata dalam kalimat.
        $result = $wordCount->countWords($testSentence);

        // Memeriksa apakah jumlah kata sesuai dengan yang diharapkan.
        $this->assertEquals(4, $result);
    }
}
