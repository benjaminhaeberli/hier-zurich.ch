<?php
    $cssPath = $_SERVER['DOCUMENT_ROOT'] . '/dist/app.css';
    $cssURL = '/dist/app.css?v=' . filemtime($cssPath);
    $randomBackgrounds = [
        '/images/fossile-1.jpg',
        '/images/fossile-2.jpg',
        '/images/river-1.jpg',
    ];
    $hasRandomBackground = $hasRandomBackground ?? false;
    $randomBackgroundUrl = $hasRandomBackground ? $randomBackgrounds[array_rand($randomBackgrounds)] : '';
?>

<!DOCTYPE html>
<html lang="<?= $htmlLang ?? 'en'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$htmlTitle ?? 'HIER Film'; ?></title>
    <link rel="stylesheet" href="<?= $cssURL ?>">
    <style>
          body { background-image: url('<?= $randomBackgroundUrl; ?>'); }
    </style>
</head>
<body class="min-h-screen bg-center bg-no-repeat bg-cover">
    <header>
        <nav>
            <ul>
                <li><a href="<?= $htmlLang === 'de' ? '/de' : '/'; ?>">Home</a></li>
                <li><a href="<?= $htmlLang === 'de' ? '/de/about.php' : '/about.php'; ?>">About</a></li>
                <li><a href="<?= $htmlLang === 'de' ? '/de/watch.php' : '/watch.php'; ?>">Watch</a></li>
            </ul>
        </nav>
    </header>
