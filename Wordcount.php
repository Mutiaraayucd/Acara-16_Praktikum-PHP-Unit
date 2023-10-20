<?php
// File: WordCount.php
class WordCount {
    public function countWords($sentence) {
        return count(explode(" ", $sentence));
    }
}
?>
