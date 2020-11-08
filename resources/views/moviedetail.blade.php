@extends('layouts.app')

@section('content')
    <div class="container card ">
        <div class="details d-flex flex-wrap">
            <img src="/{{ $movies_data->photo }}" alt="" class="movie_cover detail_cover mr-3">
           
            <div class="movie_info  pt-3">
                <span class="h3">{{ $movies_data->title }}</span>
                 {{-- Rating star --}}
                <div class="d-flex flex-row mb-3">
                    <?php $rating = $movies_data->rating ?>
                    @foreach(range(1,5) as $i)
                        <span class="fa-stack  mt-1" style="width:1em">
                            <i class="fas fa-star fa-stack-1x"></i>
                            @if($rating >0)
                                @if($rating >0.5)
                                <div class="star">
                                    <i class="fas fa-star fa-stack-1x" style="color:rgb(243, 227, 0)"></i> 
                                </div>
                                @else
                                    <i class="fas fa-star-half fa-stack-1x " style="color:rgb(243, 227, 0)"></i> 
                                @endif
                            @endif
                            <?php $rating --; ?>
                        </span>
                    @endforeach
                </div>
                {{-- Rating star --}}

                <p class="movie_description pr-5">
                    {{ $movies_data->description }}
                </p>

                <div class="movie_category">   
                    Kategori : <a href="/genre/{{ $movies_data->genres->id}}">{{ $movies_data->genres->name }}</a>
                </div>
            </div>

            <div class="movie_episode ">
                <p class="h4">EPISODE</p>
                <table class="table table-striped">
                    <tr>
                        <th scope="col">Episode</th>
                        <th scope="col">Judul</th>
                    </tr>
                    @foreach ($episodes_data as $item)
                    <tr>
                        <td class="animate__animated animate__fadeIn ">{{ $item->episode }}</td>
                        <td class="animate__animated animate__fadeIn ">{{ $item->title }}</td>
                    </tr>
                    @endforeach
                </table>
                {{ $episodes_data -> links("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>
@endsection
