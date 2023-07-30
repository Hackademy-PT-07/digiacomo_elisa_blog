<div class="col-md-3">
    <div class="card">
        <div class="card-body">
            <span class="text-secondary small">
                @foreach($categories as $category)
                    {{ $category->name }}
                @endforeach
            </span>
            <h4>{{ $title }}</h4>

            <div class="text-end">
                <a href="{{ route('article', $articleId) }}" class="btn btn-sm btn-info">Leggi</a>                                    
            </div>
        </div>
    </div>
</div>