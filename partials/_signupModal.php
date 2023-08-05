<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="signupModalLabel">Signup for an iForum Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onClick="closeModal()">X</button>
      </div>
            <form action="/forum/partials/_handleSignup.php" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="signupEmail" class="form-label">Email address</label>
                        <input type="email" required class="form-control" name="signupEmail" id="signupEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="signupPassword" class="form-label">Password</label>
                        <input type="password" id="signupPassword" name="signupPassword" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" placeholder="Must contain at least one number, uppercase and lowercase" required>
                    </div>
                    <div class="mb-3">
                        <label for="signupcPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="signupcPassword" name="signupcPassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Signup</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onClick="closeModal()">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function closeModal(){
    $('#signupModal').modal('hide')
}
</script>