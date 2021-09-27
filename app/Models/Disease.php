<?php

declare(strict_types=1);

namespace App\Models;

/**
 * Class Disease
 */
class Disease
{
    /**
     * Constructs Disease
     */
    public function __construct(
        protected int $patientId,
        protected string $internationClassificationOfDisease
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
     * Retrieves the international classification of disease
     */
    public function internationClassificationOfDisease(): string
    {
        return $this->internationClassificationOfDisease;
    }
}
