@include('site::_partials/header')

<h2>{{ $entry->title }}</h2>
<h4>Published at {{ $entry->created_at }} &amp;bull; by {{ $entry->author->first_name }}</h4>
{{ $entry->body }}
<a href="{{ URL::route('article.list') }}">Back to articles</a>
@include('site::_partials/footer')