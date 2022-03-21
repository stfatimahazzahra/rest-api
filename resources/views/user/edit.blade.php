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
        <form method="post" action="/user/{{ $user['id'] }}">
            @method('PUT')
            @csrf

            <h4>Edit User</h4>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" id="InputFirstName" value="{{ $user['firstName'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="InputLastName" aria-describedby="emailHelp" value="{{ $user['lastName'] }}">
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>