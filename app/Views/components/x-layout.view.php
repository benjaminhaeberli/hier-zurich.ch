<x-component name="x-layout">
    <!DOCTYPE html>
    <html lang="{{ $lang ?? 'en' }}">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="<?= viteAsset('assets/app.css') ?>">
            <title>{{ $this->title }} - WAS DAS WASSER ERZÄHLT</title>
        </head>

        <body class="min-h-screen text-white bg-black  w-10/12 mx-auto">
            <x-header lang="{{ $lang ?? 'en' }}"></x-header>

            <x-slot />

            <x-footer />
    </body>
        </body>
    </html>
</x-component>
