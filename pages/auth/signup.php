<?php
$base_url = "./../../";
$page_title = "Sign Up today!";
include './../../components/navbar.php';
?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card border-0 shadow-lg" style="border-radius: 20px;">
                <div class="card-body">
                    <h1 class="fs-1 text-center">Sign Up</h1>
                    <p class="text-center text-muted">
                        Create a free account to continue <br>with our services
                    </p>
                    <form action="" class="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">First Name</label>
                                    <input type="text" class="form-control shadow-none" style="border-radius: 10px;" placeholder="Enter First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Last Name</label>
                                    <input type="text" class="form-control shadow-none" style="border-radius: 10px;" placeholder="Enter Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none" style="border-radius: 10px;" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Username</label>
                                    <input type="text" class="form-control shadow-none" style="border-radius: 10px;" placeholder="Enter Username">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control shadow-none" style="border-radius: 10px;" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Bio</label>
                                    <textarea rows="4"  class="form-control shadow-none" style="border-radius: 10px;" placeholder="Tell us about yourselft"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none" style="border-radius: 10px;" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Repeat Password</label>
                                    <input type="password" class="form-control shadow-none" style="border-radius: 10px;" placeholder="Repeat Password">
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-center">
                            <button class="btn btn-primary rounded-pill px-5">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './../../components/footer.php';
?>