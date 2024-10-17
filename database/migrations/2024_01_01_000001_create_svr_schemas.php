<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Svr\Core\Enums\ApplicationStatusEnum;
use Svr\Core\Enums\HerriotErrorTypesEnum;
use Svr\Core\Enums\ImportStatusEnum;
use Svr\Core\Enums\SystemBreedingValueEnum;
use Svr\Core\Enums\SystemNotificationsTypesEnum;
use Svr\Core\Enums\SystemParticipationsTypesEnum;
use Svr\Core\Enums\SystemSexEnum;
use Svr\Core\Enums\SystemStatusConfirmEnum;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;
use Svr\Core\Enums\SystemStatusNotificationEnum;
use Svr\Core\Enums\ApplicationAnimalStatusEnum;


return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        DB::statement('CREATE SCHEMA IF NOT EXISTS system');
        DB::statement("COMMENT ON SCHEMA system IS 'Системная схема'");

        DB::statement("CREATE TYPE system.system_status AS ENUM (".SystemStatusEnum::get_value_str().")");
        DB::statement("CREATE TYPE system.system_status_delete AS ENUM (".SystemStatusDeleteEnum::get_value_str().")");
        DB::statement("CREATE TYPE system.system_status_confirm AS ENUM (". SystemStatusConfirmEnum::get_value_str().")");
        DB::statement("CREATE TYPE system.system_status_notification AS ENUM (". SystemStatusNotificationEnum::get_value_str().")");
        DB::statement("CREATE TYPE system.system_sex AS ENUM (". SystemSexEnum::get_value_str().")");
        DB::statement("CREATE TYPE system.system_breeding_value AS ENUM (". SystemBreedingValueEnum::get_value_str().")");
        DB::statement("CREATE TYPE system.system_notifications_types AS ENUM (". SystemNotificationsTypesEnum::get_value_str().")");
        DB::statement("CREATE TYPE system.application_status AS ENUM (". ApplicationStatusEnum::get_value_str().")");
        DB::statement("CREATE TYPE system.application_animal_status AS ENUM (". ApplicationAnimalStatusEnum::get_value_str().")");
        DB::statement("CREATE TYPE system.import_status AS ENUM (". ImportStatusEnum::get_value_str().")");
        DB::statement("CREATE TYPE system.system_participations_types AS ENUM (". SystemParticipationsTypesEnum::get_value_str().")");
        DB::statement("CREATE TYPE system.herriot_error_types AS ENUM (". HerriotErrorTypesEnum::get_value_str().")");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP SCHEMA IF EXISTS system CASCADE');

        DB::statement('DROP TYPE IF EXISTS system.system_status');
        DB::statement('DROP TYPE IF EXISTS system.system_status_delete');
        DB::statement('DROP TYPE IF EXISTS system.system_status_confirm');
        DB::statement('DROP TYPE IF EXISTS system.system_status_notification');
        DB::statement('DROP TYPE IF EXISTS system.system_sex');
        DB::statement('DROP TYPE IF EXISTS system.system_breeding_value');
        DB::statement("DROP TYPE IF EXISTS system.system_notifications_types");
        DB::statement("DROP TYPE IF EXISTS system.application_status");
        DB::statement("DROP TYPE IF EXISTS system.application_animal_status");
        DB::statement("DROP TYPE IF EXISTS system.import_status");
        DB::statement("DROP TYPE IF EXISTS system.system_participations_types");
        DB::statement("DROP TYPE IF EXISTS system.herriot_error_types");

        DB::statement("DROP FUNCTION IF EXISTS system.update_timestamp()");
    }
};
