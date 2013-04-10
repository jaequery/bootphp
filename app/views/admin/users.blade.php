<!-- Main hero unit for a primary marketing message or call to action -->
<table class="table">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Created</th>
        <th>Action</th>
    </tr>
    @foreach($users AS $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->password }}</td>
        <td>{{ $user->created_at }}</td>
        <td>
            <a href="/admin/user/{{ $user->id }}">Edit</a>
            <a href="/admin/user/delete/{{ $user->id }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>