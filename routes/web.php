<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use CivilSoftLab\Norms\Http\Controllers\NormsController;

Route::get('/norms', [NormsController::class, 'index'])->name('norms');
Route::get('/norms/{slug}', [NormsController::class, 'show'])->name('norms.show');

/**
 * Serve norms PNG/PDF/JPG from the package when not yet copied to public/ (vendor:publish norms-assets).
 */
Route::get('/norms/pkg-asset', function (Request $request) {
    $rel = (string) $request->query('f', '');
    $rel = str_replace(['\\', "\0"], '/', $rel);
    if ($rel === '' || str_contains($rel, '..')) {
        abort(404);
    }
    $normsRoot = realpath(__DIR__ . '/../assets/norms');
    if ($normsRoot === false) {
        abort(404);
    }
    $full = realpath($normsRoot . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $rel));
    if ($full === false || ! str_starts_with($full, $normsRoot)) {
        abort(404);
    }
    if (! is_file($full)) {
        abort(404);
    }
    $ext = strtolower(pathinfo($full, PATHINFO_EXTENSION));
    $mime = match ($ext) {
        'png' => 'image/png',
        'jpg', 'jpeg' => 'image/jpeg',
        'webp' => 'image/webp',
        'gif' => 'image/gif',
        'svg' => 'image/svg+xml',
        'pdf' => 'application/pdf',
        default => 'application/octet-stream',
    };

    return response()->file($full, [
        'Content-Type' => $mime,
        'Cache-Control' => 'public, max-age=86400',
    ]);
})->name('norms.package-asset');
