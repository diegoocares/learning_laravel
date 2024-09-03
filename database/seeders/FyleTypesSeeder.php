<?php

namespace Database\Seeders;

use App\Enums\FyleTypesEnum;
use App\Models\FileType;
use Illuminate\Database\Seeder;

class FyleTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fileTypes = FyleTypesEnum::cases();

        foreach($fileTypes as $fileType){
            FileType::create(['name' => $fileType->value]);
        };
    }
}
