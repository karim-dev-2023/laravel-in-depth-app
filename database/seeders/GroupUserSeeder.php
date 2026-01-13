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
        $group = Group::firstOrCreate([
            'name' => 'Family'
        ]);


        $user = User::where('email', 'test@example.com')->first();

        // Attacher l'utilisateur au groupe
        $group->users()->syncWithoutDetaching([$user->id]);
    }
}
