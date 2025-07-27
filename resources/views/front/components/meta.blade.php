<meta charset="UTF-8">
<meta name="_token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
@if(isset($meta->meta_static))
    <title>{{$meta->meta_static}}</title>
@else
    <title>{{ $meta_default }}</title>
@endif
<meta name="description" content="Simple CRUD reviews">
