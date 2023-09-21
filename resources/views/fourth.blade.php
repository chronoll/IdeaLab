
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />
    <title>idea lab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="/css/main.css" />
</head>
<body>
    <!-- ここからヘッダー -->
    <header>
       <img src="/images/logo.png">
       <h1>Idea Lab</h1>
       <h3>~AIで新たなアイデアを製造!~</h3>
    </header>
    <!-- ここまでヘッダー -->

    <!-- ここからメイン -->
    <main>
        <div class="select">
            <div class="select-true">{{$selected_first_keyword}}</div>
            <p>×</p>
            <div class="select-true">{{$selected_second_keyword}}</div>
            <p>×</p>
            <div class="select-true">{{$selected_third_keyword}}</div>
        </div>

        <p>新しいアイデアを追加したり、疑問や要望を書いてみよう！</p>
        
        <form action="/{{$selected_first_keyword}}/{{$selected_second_keyword}}/{{$selected_third_keyword}}" method="post">
            @csrf
            <input type="hidden" name="first_keyword" value="{{$selected_first_keyword}}">
            <input type="hidden" name="second_keyword" value="{{$selected_second_keyword}}">
            <input type="hidden" name="third_keyword" value="{{$selected_third_keyword}}">
            <textarea name="last_keyword" rows="4" cols="4"></textarea>
            <div class="ansButton">
                <button type="submit" class="ansButton">
                    <p>これで製造?</p>
                </button>
            </div>
        </form>
    </main>
    <!-- ここまでメイン -->

    <!-- ここからフッター -->
    <footer>
        <p>&copy;Copyright ideaLab. All rights reserved.</p>
    </footer>
</body>
</html>