@extends('components.master')

@section('title', 'The Prestige 2006')
@section('icon', asset('images/theprestige2006.jpg'))

@section('content')
    
    {{-- container or division that is used to group other HTML elements --}}
    <div class>
        <div class="d-flex justify-content-center align-items-center">
            {{-- to embed another document or webpage within the current document --}}
            <iframe width="1400" height="600" src="https://www.youtube.com/embed/RLtaA9fFNXU?si=XTYSwfAbaiA98JPW" 
            title="YouTube video player" frameborder="0" 
            allow="allowfullscreen" 
            allowfullscreen></iframe>
        </div>
        <div class="mt-3">
            <div class="row">
                <div class="col-md-4">
                    {{-- used to embed images in a web page --}}
                    <img src="{{ asset('images/theprestige2006.jpg') }}" class="image-movie" alt="the_prestige">
                </div>
                <div class="col-md-8 d-flex">
                    <div class="col-md-2 fw-bold d-flex flex-column">
                        {{-- inline container used to group and apply styles to a specific portion of text or other inline elements --}}
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
                        <span class="mt-3">Hugh Jackman, Christian Bale, Scarlett Johansson, Michael, Caine, Rebecca Hall</span>
                        <span class="mt-3">Mystery,Thriller, Drama, Sci-Fi</span>
                        <span class="mt-3">130 minutes</span>
                        <span class="mt-3">English</span>
                        <span class="mt-3">
                            {{-- use to create hyperlink --}}
                            <a href="/christophernolan">Christopher Nolan</a>
                        </span>
                        <span class="mt-3">Christopher Nolan, Jonathan Nolan</span>
                        <span class="mt-3">David Julyan</span>
                        <span class="mt-3">October 20, 2006 </span>
                        <span class="mt-3">"The Prestige" is a 2006 mystery thriller film directed by Christopher Nolan. The movie is based on the 1995 novel of the same name by Christopher Priest. Set in the world of stage magic and illusion during the late 19th century, the film tells the story of two rival magicians, Robert Angier (Hugh Jackman) and Alfred Borden (Christian Bale), who engage in a bitter feud to create the ultimate magic trick. As their rivalry intensifies, the line between reality and illusion blurs, leading to unexpected and dramatic consequences for both men.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection