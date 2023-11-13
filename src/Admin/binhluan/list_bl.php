
            
    <!-- main -->
            <div class="col-sm-9">
                <div class="container">
                    <h2 class="border border-4 mb-4 text-black-50 p-3 text-center rounded">Danh bình luận</h2>
                        <div class="table-responsive">
                          <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <Th></Th>
                                  <th>Id</th>
                                  <th>Nội dung</th>
                                  <th>Id_use</th>
                                  <Th>Id_sp</Th>
                                  <Th>Ngày bình luận</Th>
                                  <Th>Thao tác</Th>
                                </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($listbl as $bl) { 
                                  extract($bl);
                                ?>
                                <tr>
                                  <td><input type="checkbox" name="checkbox" id=""></td>
                                  <td><?= $cmt_id   ?></td>
                                  <td><?= $cmt_content  ?></td>
                                  <td><?= $pro_id    ?></td>
                                  <td><?= $kh_id    ?></td>
                                  <td><?= $cmt_date  ?></td>
                                  <td>
                                      <a href="indexadmin.php?act=xoabl&cmt_id=<?php echo $cmt_id ?>"><input type="button" name="" value="Xoá" id=""></a>
                                  </td>
                                </tr>
                                <?php  } ?>
                              </tbody>
                            </table>
                        </div>
                        <div class="">
                          <button type="button" class="btn btn-primary btn-sm ">Chọn tất cả</button>
                          <button type="button" class="btn btn-primary btn-sm">Bỏ chọn tất cả</button>
                          <button type="button" class="btn btn-primary btn-sm">Xoá các mục đã chọn</button>
                        </div>
                </div>
            </div>
        </div>    
    </div>
    
