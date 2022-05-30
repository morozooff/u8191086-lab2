<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Article</title>
</head>

<body>
<div>
                <h1>{{ $article->title }}</h1>
                <h3>by {{$article->author}}</h3>
                <h3>Tags</h3>
                <ul>
                            @foreach($article->tags as $tag)
                        <li> {{  $tag->name}},</li>
                            @endforeach
                </ul>
            </div>
</body>
  
 <div class="container">
        {{$article->contents}}
 </div>
 <div>
   <a href="index.blade.php">Articles</a>
 </div>
</html>