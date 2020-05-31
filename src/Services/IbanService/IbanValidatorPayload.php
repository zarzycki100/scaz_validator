<?php

declare(strict_types=1);

namespace App\Services\IbanService;

class IbanValidatorPayload
{
    protected $iban;
    protected $countryCode;
    protected $isValid;
    protected $error;

    public function __construct(
        string $iban,
        ?string $countryCode,
        bool $isValid,
        ?string $error
    )
    {
        $this->iban        = $iban;
        $this->countryCode = $countryCode;
        $this->isValid     = $isValid;
        $this->error       = $error;
    }

    public function toArray()
    {
        return [
            'iban'        => $this->iban,
            'countryCode' => $this->countryCode,
            'isValid'     => $this->isValid,
            'error'       => $this->error,
        ];
    }

}