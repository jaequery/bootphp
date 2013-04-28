<table class="transactions-header">
    <tbody><tr>
        <td class="balance">
            Listing users:
            
            <span class="native-amount"><strong>{{ $users->getCurrentPage() * $users->getPerPage() }} ~ 15</strong> out of {{ $users->getTotal() }}</span>
        </td>
        <td>
            <div class="pull-right">
                <a href="/admin/user/add" class="btn">Add new</a>
            </div>
        </td>
    </tr>
</tbody></table>

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
            <a class="btn" href="/admin/user/{{ $user->id }}">Edit</a>
            <a class="btn" href="/admin/user/delete/{{ $user->id }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
<div style='text-align: center'>{{ $users->links() }}</div>