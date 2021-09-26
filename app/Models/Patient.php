<?php

declare(strict_types=1);

namespace App\Models;

/**
 * Class Patient
 */
class Patient
{
    /** @var string */
    protected $id;
    /** @var string */
    protected $name;

    /**
     * Constructs Patient
     *
     * @internal
     */
    protected function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * Registers a patient
     */
    public static function register(string $name): static
    {
        $id = uniqid('', true);

        return new static($id, $name);
    }

    /**
     * Retrieves the ID
     */
    public function id(): string
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
}
