<?php

declare(strict_types=1);

namespace App\Application\Bootloader;

use App\Domain\Card\Repository\CardRepositoryInterface;
use App\Domain\Game\Repository\GameRepositoryInterface;
use App\Domain\User\Repository\UserRepositoryInterface;
use App\Infrastructure\Persistence\CardRepository;
use App\Infrastructure\Persistence\CycleORMUserRepository;
use App\Infrastructure\Persistence\GameRepository;
use Spiral\Boot\Bootloader\Bootloader;

/**
 * Simple bootloaders that registers Domain repositories.
 */
final class PersistenceBootloader extends Bootloader
{
    protected const SINGLETONS = [
        UserRepositoryInterface::class => CycleORMUserRepository::class,
        GameRepositoryInterface::class => GameRepository::class,
        CardRepositoryInterface::class => CardRepository::class,
    ];
}
