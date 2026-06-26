<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("Usuarios")->insert([
            [
    "ocupação" => "Editor",
    "cargo" => "usuario",
    "biografia" => "Editor responsável pela revisão das notícias.",
    "cidade" => "Bauru",
    "estado" => "São Paulo",
    "sigla" => "SP",
    "email" => "editor@email.com",
    "password" => Hash::make("12345678"),
    "name" => "João Silva",
    "created_at" => now(),
    "updated_at" => now(),
],

[
    "ocupação" => "Jornalista",
    "cargo" => "usuario",
    "biografia" => "Jornalista especializado em notícias de tecnologia.",
    "cidade" => "Marília",
    "estado" => "São Paulo",
    "sigla" => "SP",
    "email" => "jornalista@email.com",
    "password" => Hash::make("12345678"),
    "name" => "Maria Souza",
    "created_at" => now(),
    "updated_at" => now(),
],

[
    "ocupação" => "Redator",
    "cargo" => "usuario",
    "biografia" => "Redator responsável pela produção de artigos.",
    "cidade" => "Botucatu",
    "estado" => "São Paulo",
    "sigla" => "SP",
    "email" => "redator@email.com",
    "password" => Hash::make("12345678"),
    "name" => "Pedro Santos",
    "created_at" => now(),
    "updated_at" => now(),
],

[
    "ocupação" => "Revisor",
    "cargo" => "usuario",
    "biografia" => "Revisor responsável pela correção dos textos.",
    "cidade" => "Jaú",
    "estado" => "São Paulo",
    "sigla" => "SP",
    "email" => "revisor@email.com",
    "password" => Hash::make("12345678"),
    "name" => "Ana Oliveira",
    "created_at" => now(),
    "updated_at" => now(),
],

[
    "ocupação" => "Social Media",
    "cargo" => "usuario",
    "biografia" => "Gerencia as redes sociais e a divulgação das notícias.",
    "cidade" => "São Paulo",
    "estado" => "São Paulo",
    "sigla" => "SP",
    "email" => "social@email.com",
    "password" => Hash::make("12345678"),
    "name" => "Lucas Ferreira",
    "created_at" => now(),
    "updated_at" => now(),
],
        ]);
    }
}