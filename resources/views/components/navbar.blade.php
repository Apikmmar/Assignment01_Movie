    {{-- define a section of a web page that contains navigation links --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid fw-bold">
            {{-- use to create hyperlink --}}
            <a class="navbar-brand" href="https://www.vulture.com/article/christopher-nolan-movies-ranked.html" target="_blank">Nolan World</a>
            {{-- create button for web page --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                {{--  --}}
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {{-- create unordered list --}}
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    {{-- create list item --}}
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Filmography</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/christophernolan">Biography</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>