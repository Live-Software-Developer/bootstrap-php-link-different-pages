<?php
$base_url = "./";
$page_title = "Home";
include './components/navbar.php';
?>

<style>
    .box {
        background: red;
        height: 300px;
        width: 100%;
    }

    .box_2 {
        background: rgba(255, 0, 0, 0.5);
        height: 300px;
        width: 100%;
    }
</style>
<div class="container py-5">
    <a href="/" class="btn bg-warning border border-5 border-success shadow shadow-lg">Home</a>
</div>

<!-- 12-24 -->
<!-- xs <= 412px -->
<!-- sm >= 576px -->
<!-- md >= 768px -->
<!-- lg >= 992px -->
<!-- xl >= 1200px -->
<!-- sm - 12/6 -> 2 columns - 50% -->
<!-- md - 12/4 -> 3 columns - 33.33% -->
<!-- md - 12/3 -> 4 columns - 25% -->
<!-- md - 12/2 -> 6 columns - 12.5% -->

<div class="container-fluid">
    <div class="row">
        <div class="mb-4 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="box"></div>
        </div>
        <div class="mb-4 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="box_2"></div>
        </div>
        <div class="mb-4 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="box"></div>
        </div>
        <div class="mb-4 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="box_2"></div>
        </div>
        <div class="mb-4 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="box"></div>
        </div>
        <div class="mb-4 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="box_2"></div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-4">
            <div class="box"></div>
        </div>
        <div class="col-4">
            <div class="box_2"></div>
        </div>
    </div>
</div>

<?php
include './components/footer.php';
?>