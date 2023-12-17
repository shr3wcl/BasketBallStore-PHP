<a href="?mod=bill&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<hr>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Total</th>
            <th>Timestamp</th>
            <th>Status</th>
            <th>#</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Total</th>
            <th>Timestamp</th>
            <th>Status</th>
            <th>#</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($billList as $each) { ?>
            <tr>
                <td><?= $each["id_bill"] ?></td>
                <td><?= $each["name_user"] ?></td>
                <td><?= $each["phone"] ?></td>
                <td><?= $each["address"] ?></td>
                <td><?= number_format($each["total_cost"]) . " VND" ?></td>
                <td style="max-width: 100px"><?= $each["timestamp"] ?></td>
                <td><?= $each["status"] === "1" ? "Done" : "Unpaid" ?></td>
                <td>
                    <a href="?mod=bill&act=detail&id=<?= $each['id_bill'] ?>" type="button" class="btn btn-primary">View</a>
                    <a href="?mod=bill&act=edit&id=<?= $each['id_bill'] ?>" type="button" class="btn btn-warning">Edit</a>
                    <a href="?mod=bill&act=delete&id=<?= $each['id_bill'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Delete</a>
                    <?php if($each['status']==="0"){ ?>
                        <a href='?mod=bill&act=confirm&id=<?= $each['id_bill'] ?>' type='button' class='btn btn-success'>Done</a>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>