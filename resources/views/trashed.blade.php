<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Laravel scheduler</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('./style.css')  }}">

</head>
<body>
<header>
    <h1>Trashed</h1>
    <a href="{{  route('posts')  }}"/>Posts
</header>
<section class="articles">
    @foreach($posts as $post)
        <article>
            <div class="article-wrapper">
                <div class="article-body">
                    <h2>{{  $post->title  }}</h2>
                    <p>{{  $post->description  }}</p>
                    <form action="{{  route('post.forceDelete', $post->id)  }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button-24">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </article>
    @endforeach
</section>

</body>
</html>
