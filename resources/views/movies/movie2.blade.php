@extends('components.master')

@section('title', 'Inception 2010')
@section('icon', asset('images/inception2010.jpg'))

@section('content')
    
<div class>
    <div class="d-flex justify-content-center align-items-center">
        <iframe width="1400" height="600" src="https://www.youtube.com/embed/YoHD9XEInc0?si=WLVlO14rP9fGfDD6" 
        title="YouTube video player" frameborder="0" 
        allow="allowfullscreen" 
        allowfullscreen></iframe>
    </div>
    <div class="mt-3">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('images/inception2010.jpg') }}" class="image-movie" alt="the_prestige">
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
                    <span>Inception</span>
                    <span class="mt-3">Leonardo DiCaprio, Ken Watanabe, Joseph Gordon-Levitt, Elliot Page, Tom Hardy, Cillian Murphy</span>
                    <span class="mt-3">Sci-Fi, Action, Thriller, Heist, Mystery, Drama</span>
                    <span class="mt-3">	148 minutes</span>
                    <span class="mt-3">English</span>
                    <span class="mt-3">
                        <a href="/christophernolan">Christopher Nolan</a>
                    </span>
                    <span class="mt-3">Christopher Nolan</span>
                    <span class="mt-3">Hans Zimmer</span>
                    <span class="mt-3">July 16, 2010</span>
                    <span class="mt-3">"Inception" is a mind-bending science fiction film directed by Christopher Nolan. The story revolves around Dom Cobb (played by Leonardo DiCaprio), a skilled thief who specializes in stealing secrets from people's dreams. He is offered a chance at redemption and a way back to his family if he can perform the impossible task of "inception" – planting an idea into someone's mind without them realizing it.</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection