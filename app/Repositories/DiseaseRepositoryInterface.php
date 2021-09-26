<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Disease;
use Exception;
use Throwable;

/**
 * Interface DiseaseRepositoryInterface
 */
interface DiseaseRepositoryInterface
{
    /**
     * Retrieves a Disease by patient ID
     */
    public function getByPatientId(int $patientId): ?Disease;

    /**
     * Adds a Disease
     *
     * @throws Throwable When an error occurs
     */
    public function add(Disease $disease): void;

    /**
     * Removes a Disease
     *
     * @throws Exception When an error occurs
     */
    public function remove(Disease $disease): void;
}
