<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Medication;
use Exception;
use Throwable;

/**
 * Interface MedicationRepositoryInterface
 */
interface MedicationRepositoryInterface
{
    /**
     * Retrieves a Medication by patient ID
     */
    public function getByPatientId(int $patientId): ?Medication;

    /**
     * Adds a Medication
     *
     * @throws Throwable When an error occurs
     */
    public function add(Medication $disease): void;

    /**
     * Removes a Medication
     *
     * @throws Exception When an error occurs
     */
    public function remove(Medication $disease): void;
}
