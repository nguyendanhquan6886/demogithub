<div class="col-sm-9">
  <div class="container">
    <h2 class="border border-4 mb-4 text-black-50 p-3 text-center rounded">Danh sách danh mục</h2>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <Th></Th>
            <th>Mã danh mục</th>
            <th>Tên loại</th>
            <Th></Th>
          </tr>
        </thead>
        <?php
        foreach ($resultcate as $cate) {
          extract($cate);

        ?>
          <tbody>
            <tr>
              <td><input type="checkbox" name="checkbox" id=""></td>
              <td><?php echo $cate_id ?></td>
              <td><?php echo $cate_name ?></td>
              <td>
                <a href="indexadmin.php?act=suacate&cate_idsua=<?php echo $cate_id ?>" class="mb-2"><input class="mb-2" type="button" name="" value="Sửa" id=""></a>
                <a href="indexadmin.php?act=delcate&cate_idxoa=<?php echo $cate_id ?>"><input type="button" name="" value="Xoá" id=""></a>
              </td>
            </tr>

          </tbody>
        <?php
        }
        ?>
      </table>
    </div>
    <div class="">
      <button type="button" class="btn btn-primary btn-sm ">Chọn tất cả</button>
      <button type="button" class="btn btn-primary btn-sm">Bỏ chọn tất cả</button>
      <button type="button" class="btn btn-primary btn-sm">Xoá các mục đã chọn</button>

      <a href="indexadmin.php?act=addcate"><button type="button" class="btn btn-primary btn-sm">Thêm danh mục</button></a>
    </div>
  </div>
</div>
