<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VagasController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\AnunciarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "home"])->name('home');
Route::get("/vagas", [VagasController::class, "vagas"])->name('vagas');
Route::get("/empresas", [EmpresasController::class, "empresas"])->name('empresas');
Route::get("/perfil", [PerfilController::class, "perfil"])->name('perfil');
Route::get("/anunciar", [AnunciarController::class, "anunciar"])->name('anunciar');
Route::get("/login", [LoginController::class, "showLoginForm"])->name('login');
Route::get("/cadastro", [CadastroController::class, "showCadastroForm"])->name('cadastro');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//require __DIR__ . '/auth.php';
