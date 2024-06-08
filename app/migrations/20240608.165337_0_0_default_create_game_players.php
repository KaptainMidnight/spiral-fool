<?php

declare(strict_types=1);

namespace Migration;

use Cycle\Migrations\Migration;

class OrmDefault73538489eb7bd9e2d72b3460735cb650 extends Migration
{
    protected const DATABASE = 'default';

    public function up(): void
    {
        $this->table('game_players')
        ->addColumn('id', 'primary', [
            'nullable' => false,
            'defaultValue' => null,
            'size' => 11,
            'autoIncrement' => true,
            'unsigned' => false,
            'zerofill' => false,
        ])
        ->addColumn('position', 'integer', [
            'nullable' => false,
            'defaultValue' => null,
            'size' => 11,
            'autoIncrement' => false,
            'unsigned' => false,
            'zerofill' => false,
        ])
        ->addColumn('user_id', 'integer', [
            'nullable' => false,
            'defaultValue' => null,
            'size' => 11,
            'autoIncrement' => false,
            'unsigned' => false,
            'zerofill' => false,
        ])
        ->addColumn('game_id', 'integer', [
            'nullable' => false,
            'defaultValue' => null,
            'size' => 11,
            'autoIncrement' => false,
            'unsigned' => false,
            'zerofill' => false,
        ])
        ->addIndex(['user_id', 'game_id'], ['name' => 'game_players_index_user_id_game_id_66648c91734a8', 'unique' => true])
        ->addIndex(['user_id'], ['name' => 'game_players_index_user_id_66648c9173568', 'unique' => false])
        ->addIndex(['game_id'], ['name' => 'game_players_index_game_id_66648c9173576', 'unique' => false])
        ->addIndex(['game_id', 'user_id'], ['name' => 'game_players_index_game_id_user_id_66648c917359f', 'unique' => false])
        ->addForeignKey(['user_id'], 'users', ['id'], [
            'name' => 'game_players_foreign_user_id_66648c91734b2',
            'delete' => 'CASCADE',
            'update' => 'CASCADE',
            'indexCreate' => true,
        ])
        ->addForeignKey(['game_id'], 'games', ['id'], [
            'name' => 'game_players_foreign_game_id_66648c9173573',
            'delete' => 'CASCADE',
            'update' => 'CASCADE',
            'indexCreate' => true,
        ])
        ->setPrimaryKeys(['id'])
        ->create();
    }

    public function down(): void
    {
        $this->table('game_players')->drop();
    }
}
