


      <!-- main -->
      <div class="col-sm-9">
        <div class="container">
          <h2 class="border border-4 mb-4 text-black-50 p-3 text-center rounded">Danh sách sản phẩm</h2>
          <form action="" class="mb-4">
            <div class="row">
              <div class="col-sm-4">
                <input class="w-100 p-1" type="text" placeholder="Tìm kiếm theo tên">
              </div>
              <div class="col-sm-4">
                <select class="form-select">
                  <option>Quần</option>
                  <option>Áo</option>
                </select>
              </div>
              <div class="col-sm-4">
                <button type="button" class="btn btn-secondary w-50">Tìm kiếm</button>
              </div>
            </div>
          </form>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <Th></Th>
                  <th>Ảnh sản phẩm</th>
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <Th>Danh mục</Th>
                  <Th>Giá</Th>
                  <Th>Lượt xem</Th>
                  <Th></Th>
                </tr>
              </thead>
              <?php
                foreach($result_pro as $product){
                  extract($product);
                $result_cateone = query_onecate($cate_id);
              ?>
              <tbody>
                <tr>
                  <td><input type="checkbox" name="checkbox" id=""></td>
                  <td><img src="./sanpham/img/<?php echo $pro_img?>" class="w-50 mg-thumbnail h-50" alt=""></td>
                  <td><?php echo $pro_id?></td>
                  <td><?php echo $pro_name?></td>
                  <td><?php echo $result_cateone['cate_name']?></td>
                  <td><?php echo $pro_price?></td>
                  
                 
                  <td>
                    <a href="indexadmin.php?act=suapro&pro_idsua=<?php echo $pro_id?>" class="mb-2"><input class="mb-2" type="button" name="" value="Sửa" id=""></a>
                    <a href="indexadmin.php?act=delpro&pro_idxoa=<?php echo $pro_id?>"><input type="button" name="" value="Xoá" id=""></a>
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
            <a href="indexadmin.php?act=thempro">
              <button type="button" class="btn btn-primary btn-sm">Thêm sản phẩm</button>
            </a>
          </div>
        </div>
      </div>
   