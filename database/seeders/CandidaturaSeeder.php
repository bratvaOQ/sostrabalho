<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vaga;
use App\Models\Candidatura;
use App\Models\candidaturas;
use App\Models\vagas;
use Illuminate\Database\Seeder;

class CandidaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $usuarios = User::all();
        $vagas = vagas::all();

       
        if ($usuarios->isEmpty() || $vagas->isEmpty()) {
            return;
        }

        
        for ($i = 0; $i < 20; $i++) {
            candidaturas::create([
                'vaga_id' => $vagas->random()->id,
                'user_id' => $usuarios->random()->id,
            ]);
        }
    }
}
