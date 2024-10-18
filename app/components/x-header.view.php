<?php
    $randomBackgrounds = [
        '/images/fossile-1.jpg',
        '/images/fossile-2.jpg',
        '/images/river-1.jpg',
    ];
    $hasRandomBackground = $hasRandomBackground ?? false;
    $randomBackgroundUrl = $hasRandomBackground ? $randomBackgrounds[array_rand($randomBackgrounds)] : '';
?>

<x-component name="x-header">
    <!DOCTYPE html>
    <html lang="<?= $htmlLang ?? 'en'; ?>" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$htmlTitle ?? 'HIER Film'; ?></title>
        <link rel="stylesheet" href="<?= viteAsset('assets/app.css') ?>">
        <style>
            body { background-image: url('<?= $randomBackgroundUrl; ?>'); }
        </style>
    </head>
    <body class="min-h-screen text-white bg-black bg-center bg-no-repeat bg-cover">
        <header>
            <nav>
                <ul>
                    <li><a href="<?= $htmlLang === 'de' ? '/de' : '/'; ?>">Home</a></li>
                    <li><a href="<?= $htmlLang === 'de' ? '/de/about' : '/about'; ?>">About</a></li>
                    <li><a href="<?= $htmlLang === 'de' ? '/de/watch' : '/watch'; ?>">Watch</a></li>
                </ul>
            </nav>
        </header>
</x-component>
