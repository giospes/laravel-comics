<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/dc-logo.png') }}" alt="Logo" class="logo">
            </a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav ml-auto w-100 justify-content-evenly">
                    @foreach($sections as $section)
                        <li class="nav-item active">
                            <a class="nav-link fs-3" href="#">{{ $section }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>