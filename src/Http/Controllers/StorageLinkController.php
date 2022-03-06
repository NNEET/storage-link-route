<?php

namespace Nneet\StorageLinkRoute\Http\Controllers;

use Illuminate\Filesystem\Filesystem;

class StorageLinkController
{
    public function __invoke(Filesystem $filesystem): string
    {
        if ($filesystem->exists(public_path('storage'))) {
            return 'The "public/storage" link already exists.';
        }
        $filesystem->link(storage_path('app/public'), public_path('storage'));

        return 'The [public/storage] directory has been linked.';
    }
}