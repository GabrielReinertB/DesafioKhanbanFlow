<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar rotas da web para sua aplicação. Essas
| rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Agora, crie algo incrível!
|
*/

// Rota para exibir a página de login
Route::view('/login', 'login')->name('login');

// Rotas para autenticação
Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login')->name('auth.login'); // Processar o login
    Route::get('/logout', 'logout')->name('auth.logout'); // Fazer logout
});

// Grupo de rotas que requerem autenticação
Route::group(['middleware' => 'auth'], function () {

    // Rotas de gerenciamento de usuários
    Route::view('/usuarios/criar', 'join')->name('users.create'); // Exibir formulário de criação de usuário
    Route::controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('users.home'); // Página inicial de usuários
        Route::post('/usuarios', 'store')->name('users.store'); // Criar usuário
        Route::delete('/usuarios/{id}', 'destroy')->name('users.destroy'); // Excluir usuário
    });

    // Rotas de gerenciamento de projetos
    Route::view('/projetos/criar', 'project-form')->name('projects.create'); // Exibir formulário de criação de projeto
    Route::controller(ProjectController::class)->group(function () {
        Route::get('/projetos', 'index')->name('projects.index'); // Listar projetos
        Route::post('/projetos', 'store')->name('projects.store'); // Criar projeto
        Route::delete('/projetos/{id}', 'destroy')->name('projects.destroy'); // Excluir projeto
        Route::get('/board/{id}', 'board')->name('projects.board'); // Página do quadro do projeto
        Route::post('/board/{id}/reorder', 'saveTasksOrder'); // Salvar a ordem das tarefas no quadro
    });

    // Rotas de gerenciamento de tarefas
    Route::view('/tarefas/criar', 'project-form')->name('tasks.create'); // Exibir formulário de criação de tarefa
    Route::controller(TaskController::class)->group(function () {
        Route::get('/tarefas', 'index')->name('tasks.index'); // Listar tarefas
        Route::post('/tarefas', 'store')->name('tasks.store'); // Criar tarefa
        Route::get('/tarefas/{id}', 'show')->name('tasks.show'); // Exibir detalhes da tarefa
        Route::get('/tarefas/{id}/editar', 'edit')->name('tasks.edit'); // Exibir formulário de edição de tarefa
        Route::patch('/tarefas/{id}', 'update')->name('tasks.update'); // Atualizar tarefa
        Route::delete('/tarefas/{id}', 'destroy')->name('tasks.destroy'); // Excluir tarefa
    });
});

// Redirecionar qualquer outra rota para a página inicial de usuários
Route::get('/{any}', function () {
    return redirect()->route('users.home');
})->where('any', '.*');