<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Article</title>
</head>

<body>
        <div>
          <h1>Articles</h1>
        </div>

    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Code</th>
            <th>Tags</th>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td>{{ $article->author }}</td>
                <td><a href="/posts/{{ $article->code }}">{{ $article->code }}</a></td>
                <td>
                    @foreach($article->tags as $tag)
                        <a href="/posts/?tag={{$tag->name}}">{{$tag->name}}</a> ,
                    @endforeach

                </td>
            </tr>
        @endforeach
    </table>
</body>
<div>
   <a href="showArt.blade.php">ShowArt</a>
 </div>
</html>