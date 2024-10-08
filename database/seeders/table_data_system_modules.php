<?php

namespace Svr\Core\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class table_data_system_modules extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('system.system_modules')->truncate();

        DB::table('system.system_modules')->insert([
            [
                "module_id" => "1",
                "module_name" => "Авторизация",
                "module_description" => "Авторизация внешних клиентов",
                "module_class_name" => "module_Auth",
                "module_slug" => "auth",
                "module_created_at" => "2024-05-22 14:10:17.415441",
                "update_at" => "2024-05-22 14:10:17.415441",
            ],
            [
                "module_id" => "2",
                "module_name" => "Админы",
                "module_description" => "Управление  пользователями",
                "module_class_name" => "module_Users",
                "module_slug" => "users",
                "module_created_at" => "2024-05-22 14:10:17.415441",
                "update_at" => "2024-05-22 14:10:17.415441",
            ],
            [
                "module_id" => "3",
                "module_name" => "Роли",
                "module_description" => "Управление  ролями",
                "module_class_name" => "module_Roles",
                "module_slug" => "roles",
                "module_created_at" => "2024-05-22 14:10:17.415441",
                "update_at" => "2024-05-22 14:10:17.415441",
            ],
            [
                "module_id" => "4",
                "module_name" => "Хозяйство",
                "module_description" => "Хозяйство",
                "module_class_name" => "module_Companies",
                "module_slug" => "companies",
                "module_created_at" => "2024-05-22 14:10:17.415441",
                "update_at" => "2024-05-22 14:10:17.415441",
            ],
            [
                "module_id" => "5",
                "module_name" => "Справочники",
                "module_description" => "Справочники",
                "module_class_name" => "module_Directories",
                "module_slug" => "directories",
                "module_created_at" => "2024-05-22 14:10:17.415441",
                "update_at" => "2024-05-22 14:10:17.415441",
            ],
            [
                "module_id" => "6",
                "module_name" => "Уведомления",
                "module_description" => "Уведомления",
                "module_class_name" => "module_Notifications",
                "module_slug" => "notifications",
                "module_created_at" => "2024-05-22 14:10:17.415441",
                "update_at" => "2024-05-22 14:10:17.415441",
            ],
            [
                "module_id" => "7",
                "module_name" => "Животные",
                "module_description" => "Животные",
                "module_class_name" => "module_Animals",
                "module_slug" => "animals",
                "module_created_at" => "2024-05-22 14:10:17.415441",
                "update_at" => "2024-05-22 14:10:17.415441",
            ],
            [
                "module_id" => "8",
                "module_name" => "Заявки",
                "module_description" => "Заявки",
                "module_class_name" => "module_Applications",
                "module_slug" => "applications",
                "module_created_at" => "2024-05-22 14:10:17.415441",
                "update_at" => "2024-05-22 14:10:17.415441",
            ],
            [
                "module_id" => "9",
                "module_name" => "Selex",
                "module_description" => "Интеграция с Selex",
                "module_class_name" => "module_Selex",
                "module_slug" => "selex",
                "module_created_at" => "2024-05-22 14:10:17.415441",
                "update_at" => "2024-05-22 14:10:17.415441",
            ],
            [
                "module_id" => "10",
                "module_name" => "Дашборды",
                "module_description" => "Дашборды для администратора",
                "module_class_name" => "module_Dashboards",
                "module_slug" => "dashboards",
                "module_created_at" => "2024-07-04 07:54:46.730737",
                "update_at" => "2024-07-04 07:54:46.730737",
            ],
        ]);
    }
}
