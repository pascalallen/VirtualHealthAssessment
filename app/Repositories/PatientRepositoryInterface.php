<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Patient;
use Generator;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Throwable;

/**
 * Interface PatientRepositoryInterface
 */
interface PatientRepositoryInterface
{
    /**
     * Retrieves a patient by ID
     */
    public function getById(int $id): ?Patient;

    /**
     * Retrieves a patient by email address
     */
    public function getByName(string $name): ?Patient;

    /**
     * Retrieves list of patients
     */
    public function getAll(int $perPage, ?int $page, ?string $searchTerm = null): LengthAwarePaginator;

    /**
     * Retrieves stream of patients
     */
    public function streamAll(): Generator;

    /**
     * Adds a patient
     *
     * @throws Throwable When an error occurs
     */
    public function add(Patient $patient): void;
}
