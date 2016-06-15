@include('site::_partials/header')

<div class='container'>
    <div class="blog-header">
        <h1 class="blog-title">Articles</h1>
        <p class="lead blog-description">Articles</p>
    </div>

    <div class="row">
        <div class="col-sm-12 blog-main">
            @foreach ( $entries as $entry )
                <div class="blog-post">
                    <h2 class="blog-post-title">{{ $entry->title }}</h2>
                    <p class="blog-post-meta">Created at {{ $entry->created_at }} &amp;bull; by <a href="#">{{ $entry->author->email }}</a></p>
                    <p>{{ Str::limit($entry->body, 100) }}</p>
                    <a href="{{URL::route('article', $entry->slug)}}">More ...</a>
                </div>
            @endforeach
        </div>
    </div> 
</div>    
    
@include('site::_partials/footer')