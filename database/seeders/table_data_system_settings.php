<?php

namespace Svr\Core\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class table_data_system_settings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('system.system_settings')->truncate();

        DB::table('system.system_settings')->insert([
            [
                "setting_id" => "1",
                "owner_type" => "system_mail",
                "owner_id" => "0",
                "setting_code" => "mail_username",
                "setting_value" => "noreply@plinor.local",
                "setting_value_alt" => "",
                "setting_created_at" => "2024-05-22 14:10:17.53009",
                "update_at" => "2024-05-22 14:10:17.53009",
            ],
            [
                "setting_id" => "2",
                "owner_type" => "system_mail",
                "owner_id" => "0",
                "setting_code" => "mail_password",
                "setting_value" => "WRJt2pNKdV!4WK678pfoQ",
                "setting_value_alt" => "",
                "setting_created_at" => "2024-05-22 14:10:17.53009",
                "update_at" => "2024-05-22 14:10:17.53009",
            ],
            [
                "setting_id" => "3",
                "owner_type" => "system_mail",
                "owner_id" => "0",
                "setting_code" => "mail_host",
                "setting_value" => "mail.plinor.team",
                "setting_value_alt" => "",
                "setting_created_at" => "2024-05-22 14:10:17.53009",
                "update_at" => "2024-05-22 14:10:17.53009",
            ],
            [
                "setting_id" => "4",
                "owner_type" => "system_mail",
                "owner_id" => "0",
                "setting_code" => "mail_from",
                "setting_value" => "noreply@plinor.ru",
                "setting_value_alt" => "",
                "setting_created_at" => "2024-05-22 14:10:17.53009",
                "update_at" => "2024-05-22 14:10:17.53009",
            ],
            [
                "setting_id" => "5",
                "owner_type" => "system_mail",
                "owner_id" => "0",
                "setting_code" => "mail_port",
                "setting_value" => "587",
                "setting_value_alt" => "",
                "setting_created_at" => "2024-05-22 14:10:17.53009",
                "update_at" => "2024-05-22 14:10:17.53009",
            ],
            [
                "setting_id" => "6",
                "owner_type" => "system_mail",
                "owner_id" => "0",
                "setting_code" => "mail_charset",
                "setting_value" => "utf-8",
                "setting_value_alt" => "",
                "setting_created_at" => "2024-05-22 14:10:17.53009",
                "update_at" => "2024-05-22 14:10:17.53009",
            ],
            [
                "setting_id" => "7",
                "owner_type" => "system_notifications",
                "owner_id" => "0",
                "setting_code" => "email_support",
                "setting_value" => "tech@plinor.ru",
                "setting_value_alt" => "",
                "setting_created_at" => "2024-05-22 14:10:17.53009",
                "update_at" => "2024-05-22 14:10:17.53009",
            ],
            [
                "setting_id" => "9",
                "owner_type" => "herriot_api",
                "owner_id" => "0",
                "setting_code" => "herriot_issuer_id",
                "setting_value" => "d637554e-d7ec-96c7-1f42-9e2f1226392b",
                "setting_value_alt" => "",
                "setting_created_at" => "2024-05-22 14:10:17.53009",
                "update_at" => "2024-05-22 14:10:17.53009",
            ],
            [
                "setting_id" => "12",
                "owner_type" => "telegram_informer_settings",
                "owner_id" => "0",
                "setting_code" => "apikey",
                "setting_value" => "6853349389:AAGASo7GhUB5BLh4Xq75RZm1aNMYehWSNZ8",
                "setting_value_alt" => "",
                "setting_created_at" => "2024-05-22 14:10:17.53009",
                "update_at" => "2024-05-22 14:10:17.53009",
            ],
            [
                "setting_id" => "13",
                "owner_type" => "telegram_informer_users",
                "owner_id" => "0",
                "setting_code" => "user_id",
                "setting_value" => "252033654",
                "setting_value_alt" => "",
                "setting_created_at" => "2024-05-22 14:10:17.53009",
                "update_at" => "2024-05-22 14:10:17.53009",
            ],
            [
                "setting_id" => "14",
                "owner_type" => "telegram_informer_users",
                "owner_id" => "0",
                "setting_code" => "user_id",
                "setting_value" => "309797484",
                "setting_value_alt" => "",
                "setting_created_at" => "2024-05-22 14:10:17.53009",
                "update_at" => "2024-05-22 14:10:17.53009",
            ],
            [
                "setting_id" => "15",
                "owner_type" => "telegram_informer_users",
                "owner_id" => "0",
                "setting_code" => "user_id",
                "setting_value" => "5022057550",
                "setting_value_alt" => "",
                "setting_created_at" => "2024-05-22 14:10:17.53009",
                "update_at" => "2024-05-22 14:10:17.53009",
            ],
            [
                "setting_id" => "8",
                "owner_type" => "herriot_api",
                "owner_id" => "0",
                "setting_code" => "herriot_api_key",
                "setting_value" => "MzRmMDIwNTctYTgzNC00ZWE2LWEzMzItZjAxN2ZkNWQxYjEyZDYzNzU1NGUtZDdlYy05NmM3LTFmNDItOWUyZjEyMjYzOTJi",
                "setting_value_alt" => "",
                "setting_created_at" => "2024-05-22 14:10:17.53009",
                "update_at" => "2024-05-31 13:32:05.908766",
            ],
            [
                "setting_id" => "10",
                "owner_type" => "herriot_api",
                "owner_id" => "0",
                "setting_code" => "herriot_login",
                "setting_value" => "vukuz-240408",
                "setting_value_alt" => "",
                "setting_created_at" => "2024-05-22 14:10:17.53009",
                "update_at" => "2024-05-31 13:32:05.908766",
            ],
            [
                "setting_id" => "11",
                "owner_type" => "herriot_api",
                "owner_id" => "0",
                "setting_code" => "herriot_password",
                "setting_value" => "aC9dK7Pu6M",
                "setting_value_alt" => "",
                "setting_created_at" => "2024-05-22 14:10:17.53009",
                "update_at" => "2024-05-31 13:32:05.908766",
            ],
        ]);
    }
}
