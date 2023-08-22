<h1>Note Details</h1>

@foreach ($data as $item)
    <h3>Title : {{ $item->title}}</h3>
    <h3>Description : {{ $item->content}}</h3>
@endforeach