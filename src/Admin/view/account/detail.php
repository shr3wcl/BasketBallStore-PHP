<table class="table" id="dataTable" width="100%" cellspacing="0">
        <div class="form-group">
            <label for="">Họ và tên: <?= $detailStuff['first_name'] . " " . $detailStuff['last_name']  ?> </label>
        </div>
        <div class="form-group">
            <label for="">Giới tính: <?=  $detailStuff['gender'] === "1" ? "Nam" : "Nữ" ?> </label>
        </div>
        <div class="form-group">
            <label for="">Số Điện Thoại: <?= $detailStuff['phone'] ?></label>
        </div>
        <div class="form-group">
            <label for="">Địa chỉ: <?= $detailStuff['address'] ?></label>
        </div>
        <div class="form-group">
            <label for="">Username: <?= $detailStuff['username'] ?></label>
        </div>
        <div class="form-group">
            <label for="">Email: <?= $detailStuff['email'] ?></label>
        </div>
        <div class="form-group">
            <label for="">Role: <?php if($detailStuff['id_auth']==="1"){echo "Admin";}elseif ($detailStuff['id_auth']==="2"){echo "Employee";}else{echo "User";} ?></label>
        </div>
</table>