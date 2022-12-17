<div>
    <h3>Danh sách hoá đơn của bạn:</h3>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên người nhận</th>
            <th>SĐT</th>
            <th>Địa chỉ</th>
            <th>Tổng tiền</th>
            <th>Ngày thanh toán</th>
            <th>Trạng thái</th>
            <th>#</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Tên người nhận</th>
            <th>SĐT</th>
            <th>Địa chỉ</th>
            <th>Tổng tiền</th>
            <th>Ngày thanh toán</th>
            <th>Trạng thái</th>
            <th>#</th>
        </tr>
        </tfoot>
        <tbody>
        <?php $count = 0?>
        <?php foreach ($billList as $each) { ?>
            <tr>
                <?php $count++?>
                <td><?= $count ?></td>
                <td><?= $each["name_user"] ?></td>
                <td><?= $each["phone"] ?></td>
                <td><?= $each["address"] ?></td>
                <td><?= number_format($each["total_cost"]) . " VND" ?></td>
                <td style="max-width: 100px"><?= $each["timestamp"] ?></td>
                <td><?= $each["status"] === "1" ? "Đã giao" : "Đang xử lý" ?></td>
                <td>
                    <a href="?page=bill&act=delete&id=<?= $each['id_bill'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>