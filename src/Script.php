<?php

namespace DigitsSequence;

class Script
{
    public static function run($argc, $argv): void
    {
        if ($argc < 2 || !is_numeric($argv[1]) || $argv[1] < 0) {
            die("Usage: php script.php <n> [--full-number]\nWhere n is a non-negative integer.\n");
        }
        $n = intval($argv[1]);
        $sequenceNumber = DigitsSequence::digitsSequence($n);
        echo "($n) = " . $sequenceNumber . PHP_EOL;
    }
}
