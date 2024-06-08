<?php

declare(strict_types=1);

namespace App\Domain\User\Entity;

use App\Infrastructure\Persistence\CycleORMUserRepository;
use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;

#[Entity(repository: CycleORMUserRepository::class)]
class User
{
    #[Column(type: 'primary')]
    private int $id;

    public function __construct(
        #[Column(type: 'integer')]
        private readonly int $telegram,
        #[Column(type: 'string')]
        private readonly string $username,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getTelegram(): int
    {
        return $this->telegram;
    }
}
