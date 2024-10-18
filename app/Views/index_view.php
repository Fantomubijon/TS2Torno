<div class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="login-container w-25 m-0 p-0">
        <form action="<?= base_url('login'); ?>" method="post" class="p-4 rounded shadow">
            <div class="form-group mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group mb-3 text-center">
                <button type="submit" class="btn btn-lg btn-primary w-100 mb-2">Log In</button>
                <a href="<?= base_url('registration'); ?>" class="btn btn-secondary w-100">Click here to register</a>
            </div>
        </form>
    </div>
</div>