<style>
    #background {
        background-image: url('{{ $this->url }}');
    }
</style>

<x-component name="x-background">
    <div id="background" class="absolute inset-0 bg-center bg-no-repeat bg-cover opacity-50 -z-50"></div>
</x-component>
