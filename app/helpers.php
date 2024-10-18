<?php

function viteAsset(string $filename) {

    $manifest = json_decode(file_get_contents(dirname(__DIR__). '/public/dist/manifest.json'), true);

    if (isset($manifest[$filename])) {
        $file = '/dist/' . $manifest[$filename]['file'];
        return $file;
    }

    return $filename;
}
