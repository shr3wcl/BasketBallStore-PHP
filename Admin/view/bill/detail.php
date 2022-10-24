<table class="table" id="dataTable" width="100%" cellspacing="0">
    <div class="form-group">
        <label for="" class="text-danger">Total Cost: <?= $detailStuff['total_cost'] . " VND" ?></label>
    </div>
    <div class="form-group">
        <label for="">ID Bill: <?= $detailStuff['id_bill'] ?> </label>
    </div>
    <div class="form-group">
        <label for="">ID User: <?= $detailStuff['id_user'] ?> </label>
    </div>
    <div class="form-group">
        <label for="">Name User: <?= $detailStuff['name_user'] ?> </label>
    </div>
    <div class="form-group">
        <label for="">Phone: <?=  $detailStuff['phone'] ?> </label>
    </div>
    <div class="form-group">
        <label for="">Address: <?= $detailStuff['address'] ?></label>
    </div>
    <div class="form-group">
        <label for="">Payment Method: <?= $detailStuff['payment_method'] === "1" ? "Credit Card" : "COD" ?></label>
    </div>
    <div class="form-group">
        <label for="">Add Day: <?= $detailStuff['timestamp'] ?></label>
    </div>
    <div class="form-group">
        <label for="">Status: <?= $detailStuff['status'] === "1" ? "Done" : "Unpaid" ?></label>
    </div>
    <div class="form-group">
        <label for="">Note: <?= $detailStuff['note'] ?></label>
    </div>
    <?php if($detailStuff['status']==="0"){ ?>
        <a href="?mod=bill&act=confirm&id=<?= $_GET['id'] ?>" type="button" class="btn btn-success">Done</a>

    <?php } ?>
</table>