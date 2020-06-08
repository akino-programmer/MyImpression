@extends('layouts')

@section('content')


    
    
    <div class="container mt-4">
       
        
<div class="card mt-4">
    <div class="card-header mb-2">
        {{ $post->title }}
    </div>
    
     <div class="card-body">
       <p class="card-text">
           {{ $post->body }}
       </p>
    </div>
    
     <div class="card-footer">
         <span class="mr-2">
             投稿日時
         </span>
    </div>
  </div>
  
    <div class="mt-4 text-right">
            <a class="btn btn-primary" href="{{route('posts.edit', ['post' => $post])}}">
                編集
            </a>
   </div>
  </div>

@endsection('content')