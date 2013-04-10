<!-- Main hero unit for a primary marketing message or call to action -->
<table class="table">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Created</th>
        <th>Action</th>
    </tr>
    @foreach($posts AS $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->body }}</td>
        <td>{{ $post->created_at }}</td>
        <td>
            <a href="/admin/post/{{ $post->id }}">Edit</a>
            <a href="/admin/post/delete/{{ $post->id }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>