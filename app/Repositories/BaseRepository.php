<?php

declare(strict_types=1);

namespace App\Repositories;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Query\QueryBuilder;

/**
 * Class BaseRepository
 */
abstract class BaseRepository
{
    /**
     * The Doctrine DBAL connection
     *
     * @var Connection
     */
    protected Connection $connection;

    /**
     * Constructs BaseRepository
     */
    public function __construct()
    {
        $this->connection = app('DoctrineDBALConnection');
    }

    public function createQueryBuilder(): QueryBuilder
    {
        return $this->connection->createQueryBuilder();
    }
}
