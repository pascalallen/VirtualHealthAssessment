<?php

declare(strict_types=1);

namespace App\Repositories;

/**
 * Class DoctrinePatientRepository
 */
class DoctrinePatientRepository extends BaseRepository implements PatientRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getAllWithMinimumMedicationCount(int $minimumMedicationCount): array
    {
        $query = $this->createQueryBuilder()
            ->select(
                'CAST(p.id as UNSIGNED) as id',
                'p.name as name',
                'm.national_drug_code as drug_code',
                'COUNT(m.national_drug_code) as medication_count'
            )
            ->from('patients', 'p')
            ->leftJoin('p', 'medications', 'm', 'p.id = m.patient_id')
            ->having('COUNT(m.national_drug_code) > ?')
            ->setParameter(0, $minimumMedicationCount)
            ->groupBy('drug_code')
            ->orderBy('id', 'ASC')
            ->setFirstResult(0)
            ->setMaxResults(30);

        return $query->executeQuery()->fetchAllAssociative();
    }
}
