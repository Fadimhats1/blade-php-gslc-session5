@extends('layout.main')

@section('content')
<div class="container bg-white p-4 flex-fill">
    <div class="row row-cols-5 g-4">
        @foreach($mangaList as $manga)
        <div class="col">
            <div class="card h-100">
                <div class="position-relative">
                    <img src="{{$manga['images']['jpg']['image_url']}}" class="card-img-top" alt="{{$manga['title']}} image" style="max-height: 240px">
                    @if ($manga['status'] === 'Finished')
                        <span class="position-absolute start-0 m-1 badge text-bg-success">Finished</span>
                    @else
                        <span class="position-absolute start-0 m-1 badge text-bg-warning">Publishing</span>
                    @endif
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center  text-truncate" >{{$manga['title']}}</h5>
                </div>
            </div>
        </div>
        @endforeach
</div>
@endsection