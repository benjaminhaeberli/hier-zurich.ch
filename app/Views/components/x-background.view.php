<?php
$images = [
    '/images/fossile-1.jpg',
    '/images/fossile-2.jpg',
    '/images/river-1.jpg',
];
?>

<style>
    #background {
        background-image: url('<?= $images[array_rand($images)] ?>');
    }
</style>

<x-component name="x-background">
    <div id="background" class="absolute inset-0 bg-center bg-no-repeat bg-cover opacity-50 -z-50"></div>
</x-component>