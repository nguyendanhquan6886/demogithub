<!-- main -->
<div class="col-sm-9">
    <div class="container">
        <h2 class="border border-4 mb-4 text-black-50 p-3 text-center rounded">Thêm mới sản phẩm</h2>
        <div class="container text-bg-light rounded">

            <form action="indexadmin.php?act=addpro" method="post" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                    <label for="tensp" class="form-label text-danger">Tên sản phẩm:</label>
                    <input type="text" class="form-control" id="tensp" placeholder="Tên sản phẩm" name="pro_name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="danhmuc" class="form-label text-danger">Danh mục sản phẩm:</label>
                    <?php
                    $cate = query_allcate();

                    ?>
                    <select class="form-select" id="danhmuc" name="cate_id">
                        <?php
                        foreach ($cate as $cateop) {
                        ?>
                            <option value="<?php echo $cateop['cate_id'] ?>"><?php echo $cateop['cate_name'] ?></option>
                        <?php
                        }
                        ?>

                    </select>
                </div>


                <div class="mb-3 mt-3">
                    <label for="giasp" class="form-label text-danger">Giá sản phẩm:</label>
                    <input type="text" class="form-control" id="giasp" placeholder="Giá sản phẩm" name="pro_price">
                </div>
                <div class="mb-3 mt-3">
                    <label for="giasp" class="form-label text-danger">Ưu đãi sản phẩm:</label>
                    <input type="text" class="form-control" id="giasp" placeholder="Ưu đãi sản phẩm" name="pro_sale">
                </div>

                <div class="mb-3 mt-3">
                    <label for="mota" class="text-danger">Mô tả:</label>
                    <textarea class="form-control" rows="3" id="mota" name="pro_mota"></textarea>
                </div>
                <div class="mb-3 mt-3">
                    <label for="anh" class="form-label text-danger">Ảnh:</label>
                    <input type="file" class="form-control" id="anh" name="pro_img">
                </div>

                <div class="">
                    <button type="submit" class="btn btn-primary btn-sm" name="addsp">Thêm sản phẩm</button>
                    <button type="button" class="btn btn-primary btn-sm">Nhập lại</button>
                    <a href="list.html">
                        <button type="button" class="btn btn-primary btn-sm">Danh sách sản phẩm</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>