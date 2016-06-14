@include('site::_partials/header')

<h2>{{ $entry->title }}</h2>
<p>{{ $entry->body }}</p>

@include('site::_partials/footer')