# CivilSoftLab Norms & Regulations Module

This is a standalone module for the CivilSoftLab project. It handles the "Building Codes Library" feature.

## Development Setup

To work on this project independently:

1.  **Skeleton Install**: Install a fresh Laravel project anywhere on your machine.
    ```bash
    composer create-project laravel/laravel norms-dev
    ```
2.  **Link the Package**: Open the `composer.json` of your new `norms-dev` project and add this:
    ```json
    "repositories": [
        {
            "type": "path",
            "url": "../path/to/this/folder"
        }
    ],
    "require": {
        "civilsoftlab/norms": "*@dev"
    }
    ```
3.  **Install**: Run `composer update`.
4.  **Mock Layout**: Since this package uses `@extends('layouts.app')`, you need to create a file at `resources/views/layouts/app.blade.php` in your skeleton app. You can use a simple Tailwind layout (see `resources/views/dev/mock-layout.blade.php` in this package). For dark/light UI, Tailwind must use **class-based** dark mode (`darkMode: 'class'` in `tailwind.config.js`, or `tailwind.config = { darkMode: 'class' }` with the Play CDN). Include `@include('norms::partials.ui-theme-init')` in `<head>` before your CSS so the saved preference applies before the first paint.
5.  **Run**: `php artisan serve` and visit `/norms`.

## Structure

- `src/Http/Controllers/NormsController.php`: Main logic and Registry.
- `resources/views/`: Blade templates and partials.
- `assets/`: PDF files (will be published to public/assets/norms).

## Integration Workflow

When you finish your changes:
1.  Commit and push to your dedicated repository.
2.  The main project will pull your changes automatically.
