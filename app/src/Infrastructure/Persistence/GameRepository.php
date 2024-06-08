<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence;

use App\Domain\Game\Entity\Game;
use App\Domain\Game\Exception\GameNotFoundException;
use App\Domain\Game\Repository\GameRepositoryInterface;
use Cycle\ORM\Select\Repository;

class GameRepository extends Repository implements GameRepositoryInterface
{
    public function findById(int $id): Game
    {
        $game = $this->findByPK($id);

        if ($game === null) {
            throw new GameNotFoundException();
        }

        return $game;
    }
}
