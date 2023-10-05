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
            <div class="select-true"><p>{{$selected_third_keyword}}</p></div>
        </div>

        <p class="text">新しいアイデアを追加したり、疑問や要望を書いてみよう！</p>
        <div class="idea-textarea">
            <form action="/{{$selected_first_keyword}}/{{$selected_second_keyword}}/{{$selected_third_keyword}}" method="post">
            @csrf
            <input type="hidden" name="first_keyword" value="{{$selected_first_keyword}}">
            <input type="hidden" name="second_keyword" value="{{$selected_second_keyword}}">
            <input type="hidden" name="third_keyword" value="{{$selected_third_keyword}}">
            <!--<textarea name="entry.455033369" required id="entry.455033369"></textarea>-->
            <textarea name="last_keyword"></textarea>
            <a href="loading.html">
                <div class="button">
                    <input type="submit" class="btbt" value="これで製造？">
                </div>
            </a>
            </form>
        </div>
    </main>
    <!-- ここまでメイン -->

    <!-- ここからフッター -->
    <footer>
        <p>&copy;Copyright ideaLab. All rights reserved.</p>
    </footer>
</body>
</html>