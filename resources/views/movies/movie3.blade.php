@extends('components.master')

@section('title', 'Interstellar 2014')
@section('icon', asset('images/interstellar2014.jpg'))

@section('content')

<div class>
    <div class="d-flex justify-content-center align-items-center">
        <iframe width="1400" height="600" src="https://www.youtube.com/embed/RLtaA9fFNXU?si=XTYSwfAbaiA98JPW" 
        title="YouTube video player" frameborder="0" 
        allow="allowfullscreen" 
        allowfullscreen></iframe>
    </div>
    <div class="mt-3">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('images/interstellar2014.jpg') }}" class="image-movie" alt="the_prestige">
            </div>
            <div class="col-md-8 d-flex">
                <div class="col-md-2 fw-bold d-flex flex-column">
                    <span>Title:</span>
                    <span class="mt-3">Starring:</span>
                    <span class="mt-3">Genre:</span>
                    <span class="mt-3">Running time:</span>
                    <span class="mt-3">Language:</span>
                    <span class="mt-3">Director:</span>
                    <span class="mt-3">Screenwriter:</span>
                    <span class="mt-3">Music:</span>
                    <span class="mt-3">Release date:</span>
                    <span class="mt-3">Synopsis:</span>
                </div>
                <div class="col-md-10 d-flex flex-column">
                    <span>The Prestige</span>
                    <span class="mt-3">Matthew McConaughey, Anne Hathaway, Jessica Chastain, Bill Irwin, Ellen Burstyn</span>
                    <span class="mt-3">Sci-Fi, Drama, Adventure, Mystery</span>
                    <span class="mt-3">169 minutes</span>
                    <span class="mt-3">English</span>
                    <span class="mt-3">
                        <a href="/christophernolan">Christopher Nolan</a>
                    </span>
                    <span class="mt-3">Christopher Nolan, Jonathan Nolan</span>
                    <span class="mt-3">Hans Zimmer</span>
                    <span class="mt-3">November 5, 2014</span>
                    <span class="mt-3">"Interstellar" is a science fiction film directed by Christopher Nolan. The story is set in a future where Earth is suffering from environmental collapse, leading to a scarcity of resources and a dying planet. Cooper (played by Matthew McConaughey), a former NASA pilot, is recruited for a mission to travel through a wormhole near Saturn. The wormhole opens up the possibility of exploring habitable planets in other galaxies to ensure the survival of humanity.</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection