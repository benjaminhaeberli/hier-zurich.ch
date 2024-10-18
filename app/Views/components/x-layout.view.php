<x-component name="x-layout">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= viteAsset('assets/app.css') ?>">
        <title><?= $title . ' - WAS DAS WASSER ERZÄHLT'; ?></title>
    </head>

    <body class="min-h-screen text-white bg-black ">

        <x-slot />

    </body>

    </html>
</x-component>