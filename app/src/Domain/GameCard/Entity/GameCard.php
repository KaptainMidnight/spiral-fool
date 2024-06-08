<?php

declare(strict_types=1);

namespace App\Domain\GameCard\Entity;

use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;

#[Entity]
class GameCard
{
    #[Column(type: 'primary')]
    public int $id;

    #[Column(type: 'string')]
    public string $location;
}
