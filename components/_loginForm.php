<div class="container-fluid">
    <div class="row">
    <div class=" ms-3 fs-6 text-muted"><a class="btn btn-success" href="/registr">Go to registration page</a></div>

        <div class="col-1"></div>
        <div class="col-10">
            <h2 class="text-center my-4">Login</h2>
            <form action="login" method="POST" enctype="multipart/form-data">
                <div class="input-group mb-3 w-75">
                    <span class="input-group-text" id="inputGroup-sizing-default" required>Login</span>
                    <input name="login" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3 w-75">
                    <span class="input-group-text" id="inputGroup-sizing-default" required>Password</span>
                    <input name="password"  type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                    <p class=" ms-3 fs-6 text-muted"><?php echo $logErrors=''?></p>
                <div class="form-check my-4">
                    <input name="ip" class="form-check-input" type="checkbox" id="flexCheckIndeterminate">
                    <label name="ip" class="form-check-label" for="flexCheckIndeterminate">Connect to IP
                    </label>
                </div>
                <input class="btn btn-primary px-5" method="POST" type="submit" name='submit' value="Login">
            </form>
        </div>
        <div class="col-1"></div>
    </div>
</div>