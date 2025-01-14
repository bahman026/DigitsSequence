<?php

namespace DigitsSequence;

use InvalidArgumentException;

class DigitsSequence
{
    private static function digitSum($num): int
    {
        $sum = 0;
        while ($num > 0) {
            $sum += $num % 10;
            $num = intdiv($num, 10);
        }
        return $sum;
    }


    public static function digitsSequence($number)
    {
        // بررسی نوع داده ورودی
        if (!is_int($number)) {
            throw new InvalidArgumentException("Input must be an integer.");
        }

        // بررسی مقدار منفی
        if ($number < 0) {
            throw new InvalidArgumentException("Input must be a non-negative integer.");
        }

        if ($number == 0) return 0;
        if ($number == 1) return 1;

        $sequence = [0, 1];
        $seen = [];
        $index = 2;

        while ($index <= $number) {
            $next = self::digitSum($sequence[$index - 1]) + self::digitSum($sequence[$index - 2]);

            $key = $sequence[$index - 2] . ',' . $sequence[$index - 1];
            if (isset($seen[$key])) {
                $cycleStart = $seen[$key];
                $cycle = array_slice($sequence, $cycleStart);
                $cycleLength = count($cycle);
                return $cycle[($number - $cycleStart) % $cycleLength];
            }

            $seen[$key] = $index - 2;
            $sequence[] = $next;
            $index++;
        }

        return $sequence[$number];
    }
}
