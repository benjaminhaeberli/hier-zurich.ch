<x-layout title="Home" has-random-background="true">

    <main>
        <h1 class="text-2xl">Welcome to My Website</h1>
        <h2 class="text-xl">Titre plus petit</h2>

        <x-background :url="$this->randomBackgroundUrl" />
    </main>

</x-layout>
