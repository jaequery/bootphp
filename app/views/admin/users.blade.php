<table class="transactions-header">
    <tbody>
        <tr>
            <td>
                <h4>Users</h4>
            </td>
            <td>
                <div class="pull-right">
                    <a href="/admin/users/new" class="btn btn-success">+ Add New</a>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Created</th>
        <th>Action</th>
    </tr>
    @foreach($users AS $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->firstname }} {{ $user->lastname }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->password }}</td>
        <td>{{ $user->created_at }}</td>
        <td>
            <a class="btn" href="/admin/users/{{ $user->id }}">Edit</a>
            <a class="btn" href="/admin/users/delete/{{ $user->id }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
<div style='text-align: center'>{{ $users->links() }}</div>