<x-component name="x-header">
    <header>
        <nav class="flex flex-col items-center max-w-lg py-6 mx-auto">
            <h1 class="font-bold uppercase">Was das wasser erzählt</h1>
            </h1>
            <ul class="flex gap-6">
                <li><a href="<?= $lang === 'de' ? '/de' : '/'; ?>">Home</a></li>
                <li><a href="<?= $lang === 'de' ? '/de/about' : '/about'; ?>">About</a></li>
                <li><a href="<?= $lang === 'de' ? '/de/watch' : '/watch'; ?>">Watch</a></li>
            </ul>
        </nav>
    </header>
</x-component>