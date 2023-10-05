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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
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
        <p class="text">製造完了!!</p>
        <div class="select">
            <div class="select-true"><p>{{$selected_first_keyword}}</p></div>
            <span>×</span>
            <div class="select-true"><p>{{$selected_second_keyword}}</p></div>
            <span>×</span>
            <div class="select-true"><p>{{$selected_third_keyword}}</p></div>
        </div>

        <div class="ans-list">
            <ul class="slider">
                @foreach($data as $eachdata)
                <div class="ans-item">
                    <div class="ans-title"><p>{{$eachdata["title"]}}</p></div>
                    <div class="ans-description"><p>{{$eachdata["description"]}}</p></div>
                </div>
            @endforeach
            </ul>
        </div>
    </main>
    <!-- ここまでメイン -->

    <!-- ここからフッター -->
    <footer>
        <p>&copy;Copyright ideaLab. All rights reserved.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/js/ideaLab.js"></script>
</body>
</html>