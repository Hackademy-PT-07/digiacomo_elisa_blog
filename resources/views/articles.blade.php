<x-main>
    <x-navbar/>
    <div class="container mt-5">

        <div class="mt-4">
            <h1>{{ $title }}</h1>

            <div class="mt-4">
                <div class="row">
                    @foreach($articles as $article)                    
                    <x-card
                        :title="$article->title"
                        :categories="$article->categories"
                        :article-id="$article->id"
                        />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-main>