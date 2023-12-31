<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginModalLabel">Login to iForum</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    onClick="closeModal2()">X</button>
            </div>
            <form action="/forum/partials/_handleLogin.php" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="loginEmail" name="loginEmail"
                            aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="loginPass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPass" name="loginPass" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        onClick="closeModal2()">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function closeModal2() {
    $('#loginModal').modal('hide')
}
</script>