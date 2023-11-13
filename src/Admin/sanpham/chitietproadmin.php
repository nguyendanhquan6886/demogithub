<div class="col-sm-9">
        <div class="container">
          <h2 class="border border-4 mb-4 text-black-50 p-3 text-center rounded">Chi Tiết Sản Phẩm</h2>
          <!-- <form action="indexadmin.php?act=search" method="post">
            <div class="row">
              <div class="col-sm-4">
                <input class="w-100 p-1" type="text" placeholder="Tìm kiếm theo tên" name="search_name">
              </div>
              <div class="col-sm-4">
                <select class="form-select" name="search_cate">
                  <option value="0">Tất Cả</option>
                  <?php
                    // $allcate = query_allcate();
                    // foreach($allcate as $cate){
                      ?>
                        <option value="<?php ?></option>
                      <?php
                    // }
                  ?>
                  
                  
                </select>
              </div>
              <div class="col-sm-4">
                <button type="submit" name='searchprocate' class="btn btn-secondary w-50">Tìm kiếm</button>
              </div>
            </div>
          </form> -->
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <Th></Th>
                  <th>Ảnh sản phẩm</th>
                  <th>Mã sản phẩm</th>
                  <th>Màu</th>
                  <Th>Size</Th>
                  <Th>Số LƯợng</Th>
                 
                  <Th></Th>
                </tr>
              </thead>

              <?php
                if(isset($_GET['pro_id'])){
                    $pro_id = $_GET['pro_id'];
                     $pro_chitiet = chitietadmin($pro_id);
                     foreach ($pro_chitiet as $pro){
                        extract($pro);
                        $products =  queryonepro($pro_id);
                        
                        $color = query_onecolor($color_id);
                        $size = query_onesize($size_id);

                        
                 
              ?>
             
              <tbody>
                <tr>
                  <td><input type="checkbox" name="checkbox" id=""></td>
                  <td><img src="./sanpham/img/<?php echo $products['pro_img']?>" class="w-50 mg-thumbnail h-50" alt=""></td>
                  <td><?php echo $pro_id?></td>
                  <td>                                        <input type="button" style="background-color: <?= $color['color_ma']?>;"  class="">
                                  </td>
                                  <td>
                                    <div class="">
                                        <input type="button" class=""   value="<?php echo $size['size_name']?>"></td>
                  
                  <td><?php echo $soluong?></td>
                  
                  
                 
                  <td>
                    <a href="indexadmin.php?act=suapro&pro_idsua=<?php echo $pro_id?>" class="mb-2"><input class="mb-2" type="button" name="" value="Sửa" id=""></a>
                    <a href="indexadmin.php?act=delpro&pro_idxoa=<?php echo $pro_id?>"><input type="button" name="" value="Xoá" id=""></a>
                  </td>
                </tr>
                
              </tbody>
              <?php
                     }
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