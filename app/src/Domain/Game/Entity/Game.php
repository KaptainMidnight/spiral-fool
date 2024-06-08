<?php

declare(strict_types=1);

namespace App\Domain\Game\Entity;

use App\Domain\Card\Entity\Card;
use App\Domain\GameCard\Entity\GameCard;
use App\Domain\GamePlayer\Entity\GamePlayer;
use App\Domain\User\Entity\User;
use App\Infrastructure\Persistence\GameRepository;
use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;
use Cycle\Annotated\Annotation\Relation\ManyToMany;

#[Entity(repository: GameRepository::class)]
class Game
{
    #[Column(type: 'primary')]
    public int $id;

    #[ManyToMany(target: User::class, through: GamePlayer::class)]
    protected array $players;

    #[ManyToMany(target: Card::class, through: GameCard::class)]
    protected array $cards;

    public function __construct(
        #[Column(type: 'string')]
        public string $status
    )
    {
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getPlayers(): array
    {
        return $this->players;
    }

    public function addUser(User $user): void
    {
        $this->players[] = $user;
    }

    public function removeUser(User $user): void
    {
        $this->players = array_filter($this->players, static fn (User $u) => $u !== $user);
    }

    public function getCards(): array
    {
        return $this->cards;
    }
}
