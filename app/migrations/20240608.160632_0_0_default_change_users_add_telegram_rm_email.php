<?php

declare(strict_types=1);

namespace Migration;

use Cycle\Migrations\Migration;

class OrmDefaultFa57caa923815e324397e69f709d99c5 extends Migration
{
    protected const DATABASE = 'default';

    public function up(): void
    {
        $this->table('users')
        ->addColumn('telegram', 'integer', ['nullable' => false, 'defaultValue' => null])
        ->dropColumn('email')
        ->update();
    }

    public function down(): void
    {
        $this->table('users')
        ->addColumn('email', 'text', ['nullable' => false, 'defaultValue' => null, 'size' => 255])
        ->dropColumn('telegram')
        ->update();
    }
}
