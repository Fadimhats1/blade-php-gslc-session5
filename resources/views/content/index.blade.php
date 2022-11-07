@extends('layout.main')

@section('content')
<div class="container bg-white p-4 flex-fill">
    <div class="row row-cols-5 g-4">
        @foreach($mangaList as $manga)
        <div class="col">
            <div class="card h-100">
                <img src="{{$manga['images']['jpg']['image_url']}}" class="card-img-top" alt="{{$manga['title']}} image" style="max-height: 240px">
                <div class="card-body">
                    <h5 class="card-title text-center  text-truncate" >{{$manga['title']}}</h5>
                    @if ($manga['status'] === 'Finished')
                        <span class="badge text-bg-success">Finished</span>
                    @else
                        <span class="badge text-bg-warning">Publishing</span>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
</div>
@endsection