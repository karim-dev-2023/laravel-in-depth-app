<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class GroupUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $group = Group::create(["name" => "Family"]);

        // Récupérations de tout les utilisateurs
        $userIds = User::query()->pluck('id')->all();

        $group->users()->syncWithoutDetaching($userIds);
    }
}
