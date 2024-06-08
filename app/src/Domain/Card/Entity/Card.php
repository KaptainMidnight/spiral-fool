<?php

declare(strict_types=1);

namespace App\Domain\Card\Entity;

use App\Domain\Game\Entity\Game;
use App\Domain\GameCard\Entity\GameCard;
use App\Infrastructure\Persistence\CardRepository;
use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;
use Cycle\Annotated\Annotation\Relation\ManyToMany;

#[Entity(repository: CardRepository::class)]
class Card
{
    #[Column(type: 'primary')]
    public int $id;

    #[ManyToMany(target: Game::class, through: GameCard::class)]
    protected array $cards;

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
