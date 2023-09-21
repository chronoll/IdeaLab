
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />
    <title>idea lab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="icon" href="/img/favicon.ico">
    <link rel="stylesheet" href="/css/main.css" />
</head>
<body>
    <!-- ここからヘッダー -->
    <header>
       <img src="/images/logo.png">
       <h1>Idea Lab</h1>
       <h3>AIで新たなアイデアを製造!</h3>
    </header>
    <!-- ここまでヘッダー -->
    
    <!-- ここからメイン -->
    <main>
        <h2>製造完了</h2>
        <div class="select">
            <div class="select-true">{{$selected_first_keyword}}</div>
            <p>×</p>
            <div class="select-true">{{$selected_second_keyword}}</div>
            <p>×</p>
            <div class="select-true">{{$selected_third_keyword}}</div>
        </div>

        <div class="ans-list">
            @foreach($data as $eachdata)
            <div class="ans-item">
                <div class="ans-title">{{$eachdata["title"]}}</div>
                <div class="ans-description">{{$eachdata["description"]}}</div>
            </div>
            @endforeach
        </div>
    </main>
    <!-- ここまでメイン -->

    <!-- ここからフッター -->
    <footer>
        <p>&copy;Copyright ideaLab. All rights reserved.</p>
    </footer>
</body>
</html>