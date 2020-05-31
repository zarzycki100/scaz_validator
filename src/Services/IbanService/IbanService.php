<?php

declare(strict_types=1);

namespace App\Services\IbanService;

class IbanService
{
    protected ?string     $iban;
    protected ?string     $countryCode = null;
    protected bool        $isValid     = true;
    protected ?string     $error       = null;

    public function validate(string $iban): IbanValidatorPayload
    {
        $this->iban = preg_replace('/\s+/', '', $iban);

        if ($this->isValid && !$this->isCountrySupported($this->iban)) {
            $this->error   = "IBAN country is not supported.";
            $this->isValid = false;
        }

        if ($this->isValid && !$this->checkIbanLength($this->iban)) {
            $this->error   = "IBAN length is incorrect.";
            $this->isValid = false;
        }

        if ($this->isValid && !$this->checkControlSum($this->iban)) {
            $this->error   = "IBAN have incorrect checksum.";
            $this->isValid = false;
        }

        return new IbanValidatorPayload(
            $this->iban,
            $this->countryCode,
            $this->isValid,
            $this->error
        );
    }

    protected function isCountrySupported(string $iban): bool
    {
        $this->countryCode = substr($iban, 0, 2);

        return array_key_exists($this->countryCode, IbanCountryLengthEnum::toArray());
    }

    protected function checkIbanLength(string $iban): bool
    {
        if (IbanCountryLengthEnum::getLengthByCountryCode($this->countryCode) == strlen($iban)) {
            return true;
        }

        return false;
    }

    protected function checkControlSum(string $iban): bool
    {
        $iban = substr($iban, 4) . substr($iban, 0, 4);;

        $iban = $this->changeLettersToNumbers($iban);

        if (intval(bcmod($iban, '97')) == 1) {
            return true;
        }

        return false;
    }

    private function changeLettersToNumbers(string $iban)
    {
        $iban = str_split($iban);

        foreach ($iban as $key => $char) {
            if (!is_numeric($char)) {
                $iban[$key] = IbanCharIntValueEnum::getCharValueByLetter($char);
            }
        }

        return join($iban);
    }

}