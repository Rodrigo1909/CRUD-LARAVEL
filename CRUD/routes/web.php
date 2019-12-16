<?php

Route::get('/', function () {
    return view('welcome', ['records' => \App\BD::all()]);
})->name('root');

Route::get('/nuevo', function () {
    return view('crear');
})->name('nuevo');

Route::get('/editar/{id}', function ($id) {
    return view('editar', [ 'record' => \App\BD::find($id) ]);
})->name('editar');

Route::get('/pdf', function () {
    $pdf = \PDF::loadView('welcome', [
        'records' => \App\BD::all(),
        'pdf' => true,
    ]);
    return $pdf->download('Reporte.pdf');
})->name('pdf');

Route::get('/pdf/{id}', function ($id) {
    $pdf = \PDF::loadView('welcome', [
        'records' => [\App\BD::find($id)],
        'pdf' => true,
    ]);
    return $pdf->download('Reporte.pdf');
})->name('pdf');

Route::post('/crear', 'Control@store');
Route::post('/actualizar/{id}', 'Control@actualizar');
Route::get('/eliminar/{id}', 'Control@eliminar');
