<?php

declare(strict_types=1);

namespace App\Domain\Card\Entity;

use App\Infrastructure\Persistence\CardRepository;
use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;

#[Entity(repository: CardRepository::class)]
class Card
{
    #[Column(type: 'primary')]
    public int $id;

    public function __construct(
        #[Column(type: 'string')]
        public string $suit,
        #[Column(type: 'string')]
        public string $rank
    )
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSuit(): string
    {
        return $this->suit;
    }

    public function getRank(): string
    {
        return $this->rank;
    }
}
