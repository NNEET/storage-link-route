<?php

use Illuminate\Support\Facades\Route;
use Nneet\StorageLinkRoute\Http\Controllers\StorageLinkController;

Route::get('storage-link', [StorageLinkController::class]);
