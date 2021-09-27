<?php

declare(strict_types=1);

namespace App\Models;

/**
 * Class Medication
 */
class Medication
{
    /**
     * Constructs Medication
     */
    public function __construct(
        protected int $patientId,
        protected string $nationalDrugCode
    ) {
    }

    /**
     * Retrieves the patient ID
     */
    public function patientId(): int
    {
        return $this->patientId;
    }

    /**
     * Retrieves the national drugs code
     */
    public function nationalDrugCode(): string
    {
        return $this->nationalDrugCode;
    }
}
