<!-- main -->
<div class="col-sm-9">
    <div class="container">
        <h2 class="border border-4 mb-4 text-black-50 p-3 text-center rounded">Thêm mới danh mục</h2>
        <div class="container text-bg-light rounded">

            <form action="indexadmin.php?act=themcate" method="post">
                
                <div class="mb-3 mt-3">
                    <label for="tendm" class="form-label text-danger">Tên danh mục:</label>
                    <input type="text" class="form-control" id="tendm" placeholder="Tên danh mục" name="cate_name">
                </div>
                <div class="">
                    
                    <button type="submit" name="themdm" class="btn btn-primary btn-sm">Thêm mới danh mục</button>
                    <button type="button" class="btn btn-primary btn-sm">Nhập lại</button>
                    <button type="button" class="btn btn-primary btn-sm">Danh sách danh mục</button>
                </div>
            </form>

        </div>
    </div>
</div>
</div>
</div>


</body>

</html>