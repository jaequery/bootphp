<!-- Main hero unit for a primary marketing message or call to action -->

<form class="boot-api-data" data-cmd="update" data-model="Post">
    title: <input type="text" name="title" value="{{$post->title}}"><br/>
    body: <textarea name="body">{{$post->body}}</textarea>
    <input type="hidden" name="id" value="{{$post->id}}">
    <input type="submit" value="submit">
</form>