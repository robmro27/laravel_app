@include('site::_partials/header')

<div class='container'>
    <div class="blog-header">
        <h1 class="blog-title">{{ $entry->title }}</h1>
        <p class="lead blog-description">Published at {{ $entry->created_at }} &amp; by {{ $entry->author->first_name }}</p>
    </div>

    <div class="row">
        <div class="col-sm-12 blog-main">
            
            {{ $entry->body }}

            @if ($entry->image)
                <figure>
                    <a href='{{ route('article', $entry->slug) }}'>
                        <img src='<?php echo (new \App\Services\Image())->resize($entry->image, 200, 150) ?>' alt='' />
                    </a>
                </figure>
            @endif

            <a href="{{ URL::route('article.list') }}">Back to articles</a>
            
        </div>
    </div>
</div>

@include('site::_partials/footer')