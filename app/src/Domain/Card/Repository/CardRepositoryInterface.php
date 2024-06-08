<?php

namespace App\Domain\Card\Repository;

use App\Domain\Card\Entity\Card;
use App\Domain\Card\Exception\CardNotFoundException;

interface CardRepositoryInterface
{
    /**
     * @throws CardNotFoundException
     */
    public function getById(int $id): Card;
}
