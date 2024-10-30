<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-3">
        <form method="post">
            <div class="form-group my-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
            </div>
            <div class="form-group my-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
            </div>
            <div class="form-group my-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" value="<?= htmlspecialchars($user['mobile']) ?>" required>
            </div>
            <div class="form-group my-5">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" value="<?= htmlspecialchars($user['password']) ?>" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
