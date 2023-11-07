@extends('components.master')

@section('title', 'Nolan Movies')
@section('icon', asset('images/nolanis.webp'))

@section('content')

    {{-- container or division that is used to group other HTML elements --}}
    <div>
        <div class="row">
            <div class="col-md-4">
                {{-- use to create hyperlink --}}
                <a href="/prestige/detail" class="btn">
                    <div class="card mb-3">
                        {{-- used to embed images in a web page --}}
                        <img src="{{ asset('images/theprestige2006.jpg') }}" class="card-img-top img-fluid" alt="_nolanmasterpiece">
                        <div class="card-body">
                            {{-- define a fifth-level heading --}}
                            <h5 class="card-title">The Prestige (2006)</h5>
                            {{-- define paraghraph --}}
                            <p class="card-text">The Prestige is a psychological thriller film directed by Christopher Nolan.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/inception/detail" class="btn">
                    <div class="card mb-3">
                        <img src="{{ asset('images/inception2010.jpg') }}" class="card-img-top img-fluid" alt="_nolanmasterpiece">
                        <div class="card-body">
                            <h5 class="card-title">Inception (2010)</h5>
                            <p class="card-text">Inception is a science fiction action film written and directed by Christopher Nolan.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/interstellar/detail" class="btn">
                    <div class="card mb-3">
                        <img src="{{ asset('images/interstellar2014.jpg') }}" class="card-img-top img-fluid" alt="_nolanmasterpiece">
                        <div class="card-body">
                            <h5 class="card-title">Interstellar (2014)</h5>
                            <p class="card-text">Interstellar is a science fiction film written and directed by Christopher Nolan.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    

@endsection
