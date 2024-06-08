<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence;

use App\Domain\Card\Entity\Card;
use App\Domain\Card\Exception\CardNotFoundException;
use App\Domain\Card\Repository\CardRepositoryInterface;
use Cycle\ORM\Select\Repository;

class CardRepository extends Repository implements CardRepositoryInterface
{
    public function getById(int $id): Card
    {
        $card = $this->findByPK($id);

        if ($card === null) {
            throw new CardNotFoundException();
        }

        return $card;
    }
}
