<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9;

class RomanNumerals
{
    private const DIRECT_NUMBERS = [5 => 'V', 3 => 'III', 2 => 'II', 1 => 'I'];
//    private const DIRECT_NUMBERS = [10 => 'X', 5 => 'V', 3 => 'III', 2 => 'II', 1 => 'I'];

    public function convert(int $numberToConvert): string
    {
//        foreach (self::DIRECT_NUMBERS as $numberKey => $numberValue){
//
//        }

        if($numberToConvert > array_key_first(self::DIRECT_NUMBERS)){
            $convertedNumberLetter = self::DIRECT_NUMBERS[array_key_first(self::DIRECT_NUMBERS)];
            $convertedNumberKey = array_key_first(self::DIRECT_NUMBERS);

            return $convertedNumberLetter . self::DIRECT_NUMBERS[$numberToConvert - $convertedNumberKey];
        }

        if(!array_key_exists($numberToConvert, self::DIRECT_NUMBERS)){
            return 'IV';
        }

        return self::DIRECT_NUMBERS[$numberToConvert];
    }
}