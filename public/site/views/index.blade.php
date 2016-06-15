@include('site::_partials/header')

<div class='container'>
    <div class="blog-header">
        <h1 class="blog-title">{{ $entry->title }}</h1>
    </div>

    <div class="row">
        <div class="col-sm-12 blog-main">
            {{ $entry->body }}
        </div>
    </div>
</div>
@include('site::_partials/footer')