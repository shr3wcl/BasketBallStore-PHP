<table class="table" id="dataTable" width="100%" cellspacing="0">
    <div class="form-group">
        <label for="">Name Promotion: <?= $detailStuff['name_promotion'] ?> </label>
    </div>
    <div class="form-group">
        <label for="">Type: <?= $detailStuff['type_promotion'] ?> </label>
    </div>
    <div class="form-group">
        <label for="">Type Sale: <?= $detailStuff['type_sale'] === "1" ? "Decrease in percentage" : "Direct reduction" ?> </label>
    </div>
    <div class="form-group">
        <label for="">Value: <?= $detailStuff['value'] ?> </label>
    </div>
    <div class="form-group">
        <label for="">Start day: <?= $detailStuff['start_day'] ?> </label>
    </div>
    <div class="form-group">
        <label for="">Status: <?= $detailStuff['status'] ?> </label>
    </div>
</table>