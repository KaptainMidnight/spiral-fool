<?php

declare(strict_types=1);

namespace App\Domain\GamePlayer\Entity;

use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;
use Cycle\Annotated\Annotation\Relation\BelongsTo;

#[Entity(repository: '\App\Infrastructure\Persistence\PlayerRepository')]
class GamePlayer
{
    #[Column(type: 'primary')]
    public int $id;

    #[Column(type: 'integer')]
    public int $position;
}
