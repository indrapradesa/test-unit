<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cmethod;
use App\Models\User;
use App\Models\Cstatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'nama' => 'Indra Pradesan',
            'karyawan_nip' => 12345,
            'jabatan_id' => 1,
            'divisi_id' => 2,
            'email' => 'indra@example.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
        ]);

        Cmethod::create([
            'jenis_metode' => 'Ketemu'
        ]);

        Cmethod::create([
            'jenis_metode' => 'Chat'
        ]);

        Cstatus::create([
            'jenis_status' => 'Q & A',
        ]);

        Cstatus::create([
            'jenis_status' => 'Ragu-Ragu',
        ]);
    }
}
