<?php

namespace Svr\Core\Seeders;

use Illuminate\Database\Seeder;

class SystemDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        (new table_data_system_modules)->run();
        (new table_data_system_modules_actions)->run();
        (new table_data_system_roles)->run();
        (new table_data_system_settings)->run();
        (new table_data_system_users_notifications_messages)->run();
    }
}
