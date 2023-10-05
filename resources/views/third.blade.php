<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />
    <title>idea lab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="icon" href="/images/logo.png">
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <!-- ここからヘッダー -->
    <header>
        <img src="/images/logo.png">
        <div class="header-content">
            <h1>Idea Lab</h1>
            <h3>~AIで新たなアイデアを製造!~</h3>
        </div>
        <a href="/">
            <span class="material-symbols-outlined">
                Home
            </span>   
        </a>
    </header>
    <!-- ここまでヘッダー -->

    <!-- ここからメイン -->
    <main>
        <div class="select">
            <div class="select-true"><p>{{$selected_first_keyword}}</p></div>
            <span>×</span>
            <div class="select-true"><p>{{$selected_second_keyword}}</p></div>
            <span>×</span>
            <div class="select-false"><p></p></div>
        </div>

        <p class="text">あなたの考えをさらに深めよう</p>
        <div class="idea-list">
            @foreach ($third_keywords as $keyword)
                <div class="card select-idea-item">
                    <form id="form-{{ $keyword }}" action="/{{$selected_first_keyword}}/{{$selected_second_keyword}}" method="post">
                        @csrf
                        <input type="hidden" name="first_keyword" value="{{$selected_first_keyword}}">
                        <input type="hidden" name="second_keyword" value="{{$selected_second_keyword}}">
                        <input type="hidden" name="third_keyword" value="{{ $keyword }}">
                    </form>
                    <div onclick="document.getElementById('form-{{ $keyword }}').submit();">
                        <h2>{{ $keyword }}</h2>
                    </div>
                </div>
            @endforeach
            <div class="card select-idea-item">
                <h2>好きなキーワード</h2>
                <div class="input-idea">
                    <form id="form-{{ $keyword }}" action="/{{$selected_first_keyword}}/{{$selected_second_keyword}}" method="post">
                    @csrf
                    <input type="hidden" name="first_keyword" value="{{$selected_first_keyword}}">
                    <input type="hidden" name="second_keyword" value="{{$selected_second_keyword}}">
                    <input type="text" name="third_keyword" value="">
                    <button type="submit" class="send-gpt-btn">
                        <a href="select-two.html">
                            <span class="material-symbols-outlined">
                                library_add
                            </span>
                        </a>
                    </button>
                </div>
            </div>
        </div>
        
    </main>
    <!-- ここまでメイン -->

    <!-- ここからフッター -->
    <footer>
        <p>&copy;Copyright ideaLab. All rights reserved.</p>
    </footer>
</body>
</html>

