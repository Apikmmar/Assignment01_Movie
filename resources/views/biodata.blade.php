@extends('components.master')

@section('title', 'Christopher Nolan')
@section('icon', asset('images/Christopher_Nolan_2018.jpg'))

@section('content')

    {{-- container or division that is used to group other HTML elements --}}
    <div style="padding-bottom: 51px">
        <div class="row">
            <div class="col-md-4">
                {{-- used to embed images in a web page --}}
                <img src="images/Christopher_Nolan_2018.jpg" class="img-thumbnail img-nolan" alt="christopher_nolan">
            </div>
            <div class="col-md-8 mt-4">
                <div class="row ">
                    <div class="col-md-2 fw-bold h5 d-flex flex-column">
                        {{-- inline container used to group and apply styles to a specific portion of text or other inline elements --}}
                        <span>Name:</span>
                        <span class="mt-3">Born:</span>
                        <span class="mt-3">Citizenship:</span>
                        <span class="mt-3">Years Active:</span>
                        <span class="mt-3">Occupation:</span>
                        <span class="mt-3">Movies:</span>
                        <span class="mt-3">Personal Awards:</span>
                    </div>
                    <div class="col-md-10 h5 d-flex flex-column">
                        <span>Christopher Edward Nolan</span>
                        <span class="mt-3">30 July 1970</span>
                        <span class="mt-3">United Kingdom and United States</span>
                        <span class="mt-3">1998 - present</span>
                        <span class="mt-3">Film director, Film producer, Screenwriter</span>
                        <span class="mt-3">
                            {{-- use to create hyperlink --}}
                            <a href="/prestige/detail">The Prestige</a>, <a href="/inception/detail">Inception</a>, <a href="/interstellar/detail">Interstellar</a>
                        </span>
                        <span class="mt-3">
                            {{-- create unordered list --}}
                            <ul>
                                {{-- create list item --}}
                                <li>BAFTA Awards: Best Director and Best Original Screenplay for "Inception" (2011).</li>
                                <li>Golden Globe Awards: Best Director for "Inception" (2011).</li>
                                <li>Directors Guild of America Awards: Outstanding Directorial Achievement in Feature Film for "Inception" (2011).</li>
                                <li>Producers Guild of America Awards: Outstanding Producer of Theatrical Motion Pictures for "Inception" (2011).</li>
                                <li>Saturn Awards: Best Director and Best Writing for "Inception" (2011).</li>
                                <li>Empire Awards: Best Director and Best Film for "Inception" (2011).</li>
                            </ul>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
