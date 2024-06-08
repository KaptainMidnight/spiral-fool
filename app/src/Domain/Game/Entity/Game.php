<?php

declare(strict_types=1);

namespace App\Domain\Game\Entity;

use App\Infrastructure\Persistence\GameRepository;
use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;

#[Entity(repository: GameRepository::class)]
class Game
{
    #[Column(type: 'primary')]
    public int $id;

    public function __construct(
        #[Column(type: 'string')]
        public string $status
    )
    {
    }
}
