<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>ödev</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card mt-3 bg-light">
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars('result.php')?>" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Username</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="username">
                                </div>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class=form-check-input name="rememberme">
                                <label class="form-check-label">Beni Hatırla</label>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-danger">Login</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>