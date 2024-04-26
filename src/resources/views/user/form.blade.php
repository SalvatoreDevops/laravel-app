<!doctype html>
<html lang="en">
    <head>
        <title>Register user</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
    @csrf <!-- Aggiungi questo token CSRF per la sicurezza -->
        <div class="card text-start">
            <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <h4 class="card-title">Create User</h4>
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-success" id="btn-save">Create</button>                        
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="insert name"/>
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="insert email"/>
                        </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="insert password"/>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
