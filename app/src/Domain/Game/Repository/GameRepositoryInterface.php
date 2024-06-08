<?php

namespace App\Domain\Game\Repository;

use App\Domain\Game\Entity\Game;
use App\Domain\Game\Exception\GameNotFoundException;

interface GameRepositoryInterface
{
    /**
     * @throws GameNotFoundException
     */
    public function findById(int $id): Game;
}
