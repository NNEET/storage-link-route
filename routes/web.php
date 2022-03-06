<?php

use Illuminate\Support\Facades\Route;
use Prueba\StorageLinkRoute\Http\Controllers\StorageLinkController;

Route::get('storage-link', [StorageLinkController::class]);
