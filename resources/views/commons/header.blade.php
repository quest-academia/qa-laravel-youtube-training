<header class="mb-5">
    <nav class="navbar navbar-expand navbar-light bg-warning">
        <a class="navbar-brand" href="/">私立探求学園</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @if(Auth::check())
                <ul class="navbar-nav ml-md-auto align-items-center">
                    <!-- <li>
                        <a class="btn btn-info" href=""><i class="fas fa-pencil-alt"></i>
                        投稿する
                        </a>
                    </li>
                    <li>
                        <a class="nav-link far fa-user fa-lg" href="">
                        </a>
                    </li> -->
                    <li>
                        <a class="nav-item nav-link" href="{{ route('movie.index') }}">動画一覧</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">ログアウト</a>
                    </li>
                </ul>
            @endif
        </div>
    </nav>
</header>