<?php
$randomBackgrounds = [
    '/images/fossile-1.jpg',
    '/images/fossile-2.jpg',
    '/images/river-1.jpg',
];
$hasRandomBackground = $hasRandomBackground ?? false;
$randomBackgroundUrl = $hasRandomBackground ? $randomBackgrounds[array_rand($randomBackgrounds)] : null;
throw new Exception('This is a test exception');
?>

<x-component name="x-layout">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= viteAsset('assets/app.css') ?>">
        <title><?= $title ?? 'HIER Film'; ?></title>
        <?php if ($hasRandomBackground): ?>
            <style>
                body {
                    background-image: url('<?= $randomBackgroundUrl; ?>');
                }
            </style>
        <?php endif; ?>
    </head>

    <body class="min-h-screen text-white bg-black bg-center bg-no-repeat bg-cover">

        <x-slot />

    </body>

    </html>
</x-component>
