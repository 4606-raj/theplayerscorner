<div>
    {{-- <input type="text" wire:model="query" placeholder="Search blogs..." /> --}}

    <div class="input-group">
        <input type="text" class="form-control" wire:model="query" placeholder="Search articles..." aria-label="Search articles">
        {{-- <button class="btn btn-outline-primary srch-btn" type="button">Search</button> --}}
    </div>

    @if(!empty($query))
        <ul class="results-box">
            @forelse($this->blogs as $blog)
                <li><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></li>
            @empty
                <li>No blogs found</li>
            @endforelse
        </ul>
    @endif

    @push('style')
        <style>
            .results-box {
                position: absolute;
                background: #fff;
            }
            .results-box li {
                padding: 5%;
            }
        </style>
    @endpush
    
</div>
