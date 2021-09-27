<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Support\Collection;

/**
 * Class Patient
 */
class Patient
{
    /**
     * ID
     */
    protected int $id;

    /**
     * Name
     */
    protected string $name;

    /**
     * Medications
     */
    protected Collection $medications;

    /**
     * Diseases
     */
    protected Collection $diseases;

    /**
     * Constructs Patient
     *
     * @internal
     */
    protected function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->medications = collect();
        $this->diseases = collect();
    }

    /**
     * Registers a patient
     */
    public static function register(int $id, string $name): static
    {
        return new static($id, $name);
    }

    /**
     * Retrieves the ID
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * Retrieves the name
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * Retrieves the medications
     */
    public function medications(): Collection
    {
        return $this->medications;
    }

    /**
     * Adds medication
     */
    public function addMedication(Medication $medication): void
    {
        if (!$this->medications->contains($medication)) {
            $this->medications->add($medication);
        }
    }

    /**
     * Retrieves the diseases
     */
    public function diseases(): Collection
    {
        return $this->diseases;
    }

    /**
     * Adds disease
     */
    public function addDisease(Disease $disease): void
    {
        if (!$this->diseases->contains($disease)) {
            $this->diseases->add($disease);
        }
    }
}
