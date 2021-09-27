<?php

declare(strict_types=1);

namespace App\Repositories;

use Doctrine\DBAL\Exception;

/**
 * Interface PatientRepositoryInterface
 */
interface PatientRepositoryInterface
{
    /**
     * Retrieves list of patients with given minimum medication count
     *
     * @throws Exception
     */
    public function getAllWithMinimumMedicationCount(int $minimumMedicationCount): array;
}
