@extends('components/master')

@section('content')

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-3">
                <a href="#" class="btn">
                    <div class="card mb-3">
                        <img src="{{ asset('images/theprestige2006.jpg') }}" class="card-img-top img-fluid" alt="_nolanmasterpiece">
                        <div class="card-body">
                            <h5 class="card-title">The Prestige (2006)</h5>
                            <p class="card-text">The Prestige is a psychological thriller film directed by Christopher Nolan.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn">
                    <div class="card mb-3">
                        <img src="{{ asset('images/inception2010.jpg') }}" class="card-img-top img-fluid" alt="_nolanmasterpiece">
                        <div class="card-body">
                            <h5 class="card-title">Inception (2010)</h5>
                            <p class="card-text">Inception is a science fiction action film written and directed by Christopher Nolan.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn">
                    <div class="card mb-3">
                        <img src="{{ asset('images/interstellar2014.jpg') }}" class="card-img-top img-fluid" alt="_nolanmasterpiece">
                        <div class="card-body">
                            <h5 class="card-title">Interstellar (2014)</h5>
                            <p class="card-text">Interstellar is a science fiction film written and directed by Christopher Nolan.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn">
                    <div class="card mb-3">
                        <img src="{{ asset('images/tenet2020.jpg') }}" class="card-img-top img-fluid" alt="_nolanmasterpiece">
                        <div class="card-body">
                            <h5 class="card-title">Tenet (2020)</h5>
                            <p class="card-text">"Tenet"  is a science fiction film written and directed by Christopher Nolan,.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection
