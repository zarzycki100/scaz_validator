<?php

declare(strict_types=1);

namespace App\Services\IbanService;

class IbanCountryLengthEnum
{
    const AL = 28;
    const AD = 24;
    const AT = 20;
    const AZ = 28;
    const BH = 22;
    const BE = 16;
    const BA = 20;
    const BR = 29;
    const BG = 22;
    const CR = 21;
    const HR = 21;
    const CY = 28;
    const CZ = 24;
    const DK = 18;
    const DO = 28;
    const EE = 20;
    const FO = 18;
    const FI = 18;
    const FR = 27;
    const GE = 22;
    const DE = 22;
    const GI = 23;
    const GR = 27;
    const GL = 18;
    const GT = 28;
    const HU = 28;
    const IS = 26;
    const IE = 22;
    const IL = 23;
    const IT = 27;
    const JO = 30;
    const KZ = 20;
    const KW = 30;
    const LV = 21;
    const LB = 28;
    const LI = 21;
    const LT = 20;
    const LU = 20;
    const MK = 19;
    const MT = 31;
    const MR = 27;
    const MU = 30;
    const MC = 27;
    const MD = 24;
    const ME = 22;
    const NL = 18;
    const NO = 15;
    const PK = 24;
    const PS = 29;
    const PL = 28;
    const PT = 25;
    const QA = 29;
    const RO = 24;
    const SM = 27;
    const SA = 24;
    const RS = 22;
    const SK = 24;
    const SI = 19;
    const ES = 24;
    const SE = 24;
    const CH = 21;
    const TN = 24;
    const TR = 26;
    const AE = 23;
    const GB = 22;
    const VG = 24;
    const XK = 20;

    public static function toArray()
    {
        return [
            'AL' => self::AL,
            'AD' => self::AD,
            'AT' => self::AT,
            'AZ' => self::AZ,
            'BH' => self::BH,
            'BE' => self::BE,
            'BA' => self::BA,
            'BR' => self::BR,
            'BG' => self::BG,
            'CR' => self::CR,
            'HR' => self::HR,
            'CY' => self::CY,
            'CZ' => self::CZ,
            'DK' => self::DK,
            'DO' => self::DO,
            'EE' => self::EE,
            'FO' => self::FO,
            'FI' => self::FI,
            'FR' => self::FR,
            'GE' => self::GE,
            'DE' => self::DE,
            'GI' => self::GI,
            'GR' => self::GR,
            'GL' => self::GL,
            'GT' => self::GT,
            'HU' => self::HU,
            'IS' => self::IS,
            'IE' => self::IE,
            'IL' => self::IL,
            'IT' => self::IT,
            'JO' => self::JO,
            'KZ' => self::KZ,
            'KW' => self::KW,
            'LV' => self::LV,
            'LB' => self::LB,
            'LI' => self::LI,
            'LT' => self::LT,
            'LU' => self::LU,
            'MK' => self::MK,
            'MT' => self::MT,
            'MR' => self::MR,
            'MU' => self::MU,
            'MC' => self::MC,
            'MD' => self::MD,
            'ME' => self::ME,
            'NL' => self::NL,
            'NO' => self::NO,
            'PK' => self::PK,
            'PS' => self::PS,
            'PL' => self::PL,
            'PT' => self::PT,
            'QA' => self::QA,
            'RO' => self::RO,
            'SM' => self::SM,
            'SA' => self::SA,
            'RS' => self::RS,
            'SK' => self::SK,
            'SI' => self::SI,
            'ES' => self::ES,
            'SE' => self::SE,
            'CH' => self::CH,
            'TN' => self::TN,
            'TR' => self::TR,
            'AE' => self::AE,
            'GB' => self::GB,
            'VG' => self::VG,
            'XK' => self::XK,
        ];
    }

    public static function getLengthByCountryCode(string $code): ?int
    {
        $ibanLengths = self::toArray();

        if (array_key_exists($code, $ibanLengths)) {
            return $ibanLengths[$code];
        }

        return null;
    }
}