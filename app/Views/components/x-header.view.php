<x-component name="x-header">
    <header>
        <nav>
            <ul>
                <li><a href="<?= $lang === 'de' ? '/de' : '/'; ?>">Home</a></li>
                <li><a href="<?= $lang === 'de' ? '/de/about' : '/about'; ?>">About</a></li>
                <li><a href="<?= $lang === 'de' ? '/de/watch' : '/watch'; ?>">Watch</a></li>
            </ul>
        </nav>
    </header>
</x-component>