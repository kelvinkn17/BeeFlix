@extends('layouts.app')

@section('content')

    @foreach ($genres_data as $genres)
        <div class="container movie_container card d-flex flex-wrap justify-content-center">
           
            <a href="/genre/{{ $genres->id }}" class="h2 movie_genre clickCard">{{ $genres->name }}</a>
           
            <div class="movie_list d-flex flex-wrap justify-content-center">
                <?php $animation_delay = 0; ?>
                @foreach ($genres->movies as $movie)
                    <div class="movie_item card animate__animated animate__fadeInUp"  style="animation-delay: {{ $animation_delay }}s">
                        <div class="overlay">
                        
                        </div>

                        <div class="textOverlay">{{ Str::limit($movie->description, 320) }}</div>

                        <img src="{{ $movie->photo }}" alt="" class="w-100 movie_cover">
                        <div class="d-flex movie_title mt-2">
                            <div class="movie_name">
                                <h5 class="align-self-center movie_title h5">
                                    {{ $movie->title }}
                                </h5>
                            </div>
                        </div>
                        <a href="/detail/{{ $movie->id }}" class="btn btn-elegant btn-lg lihatfilmBtn">LIHAT FILM</i></a>
                    </div>
                <?php $animation_delay+=0.1 ?>  
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
