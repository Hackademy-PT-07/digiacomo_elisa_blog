<x-main>
    <x-slot:title>Utenti</x-slot>
    <x-navbar/>

    <div class="container mt-5">
        <div class="row">
            <div class="col-5">
                <livewire:user-form/> 
            </div>

            <div class="col-5 bg-primary-subtle">
            <livewire:user-list/>

            </div>

        </div>
    </div>


</x-main>