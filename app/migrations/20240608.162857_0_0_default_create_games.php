<?php

declare(strict_types=1);

namespace Migration;

use Cycle\Migrations\Migration;

class OrmDefault931bff079ad91d5a09c7385b3157219c extends Migration
{
    protected const DATABASE = 'default';

    public function up(): void
    {
        $this->table('games')
        ->addColumn('id', 'primary', [
            'nullable' => false,
            'defaultValue' => null,
            'size' => 11,
            'autoIncrement' => true,
            'unsigned' => false,
            'zerofill' => false,
        ])
        ->addColumn('status', 'string', ['nullable' => false, 'defaultValue' => null, 'size' => 255])
        ->setPrimaryKeys(['id'])
        ->create();
    }

    public function down(): void
    {
        $this->table('games')->drop();
    }
}
