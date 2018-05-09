<div class="container "  style="margin-top: 100px">
    <div class="row " style="margin-left: -40px;" >

        <?php if(isset($_SESSION['success'])){ ?>
        <div class="alert alert-success" role="alert">
            <?= $_SESSION['success'] ?>
            <?php unset($_SESSION['success']);?>
        </div>
        <?php }; ?>
    </div>
    <div class="">

    </div>
</div>