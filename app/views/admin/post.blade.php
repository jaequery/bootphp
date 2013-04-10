<!-- Main hero unit for a primary marketing message or call to action -->

<form class="boot-api-data">
    title: <input type="text" name="title" value="{{$post->title}}"><br/>
    body: <textarea name="body">{{$post->body}}</textarea>
    <input type="submit" value="submit">
</form>


<script>
    
    $(document).ready(function(){
        $('.boot-api-data').on('submit', function(e){
           e.preventDefault();
           var data = $(this).serializeArray();
           console.log(data);
        });
    });
</script>