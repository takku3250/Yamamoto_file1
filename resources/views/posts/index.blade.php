<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        <h1>Blog Name</h1>
 dev_basis04
        <a href ="/posts/create">create</a>
        <div class ="posts">
            @foreach($posts as $post)
               <div class = "post">
                    <h2 class="title">{{ $post->title }}</h2>
                    <p class = "body">{{ $post->body }}</p>
               </div>
            @endforeach
        </div>
        <div class="paginate">
            {{ $posts->links()}}
        </div>

       <div class ="posts">
         @foreach($posts as $post)
         <div class = "post">
                <h2 class ="title">
                   <a href="/posts/{{ $post->id}}">{{ $post->title}}</a>
                </h2>
                <p class = "body">{{ $post->body }}</p>
         </div>
          @endforeach
       </div>
      <div class="paginate">{{ $posts->links()}}</div>
master
    </body>
</html>
