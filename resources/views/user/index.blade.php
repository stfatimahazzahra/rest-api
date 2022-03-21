<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REST-API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 align="center">REST API</h1>
        <br><br>
        <a href="{{ route('user.create') }}"><button type="button" class="btn btn-secondary">Create user</button></a>
        <br><br>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $number = 1;
                @endphp

                @forelse($users['data'] as $user)
                <tr>
                    <td>{{ $number++ }}</td>
                    <td>{{ $user['firstName'] }}</td>
                    <td>{{ $user['lastName'] }}</td>
                    <td>
                        <a href="/user/{{ $user['id'] }}/edit" class="btn btn-success"><i class="fa fa-fw fa-edit"></i>Edit</a> |
                        <form action="/user/{{ $user['id'] }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</button>
                        </form>
                    </td>

                </tr>
                @empty
                    <tr><td colspan="6" align="center">No Record(s) Found!</td></tr>
                @endforelse
            </tbody>
        </table>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>