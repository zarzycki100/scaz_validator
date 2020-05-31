<?php

declare(strict_types=1);

namespace App\Services\IbanService;

class IbanCharIntValueEnum
{
    const A = 10;
    const B = 11;
    const C = 12;
    const D = 13;
    const E = 14;
    const F = 15;
    const G = 16;
    const H = 17;
    const I = 18;
    const J = 19;
    const K = 20;
    const L = 21;
    const M = 22;
    const N = 23;
    const O = 24;
    const P = 25;
    const Q = 26;
    const R = 27;
    const S = 28;
    const T = 29;
    const U = 30;
    const V = 31;
    const W = 32;
    const X = 33;
    const Y = 34;
    const Z = 35;

    public static function toArray()
    {
        return [
            'A' => self::A,
            'B' => self::B,
            'C' => self::C,
            'D' => self::D,
            'E' => self::E,
            'F' => self::F,
            'G' => self::G,
            'H' => self::H,
            'I' => self::I,
            'J' => self::J,
            'K' => self::K,
            'L' => self::L,
            'M' => self::M,
            'N' => self::N,
            'O' => self::O,
            'P' => self::P,
            'Q' => self::Q,
            'R' => self::R,
            'S' => self::S,
            'T' => self::T,
            'U' => self::U,
            'V' => self::V,
            'W' => self::W,
            'X' => self::X,
            'Y' => self::Y,
            'Z' => self::Z,
        ];
    }

    public static function getCharValueByLetter(string $char): ?int
    {
        $charIntValues = self::toArray();

        if (array_key_exists($char, $charIntValues)) {
            return $charIntValues[$char];
        }

        return null;
    }

}