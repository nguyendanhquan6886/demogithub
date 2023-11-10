<div class="row justify-content-center g-3">
    <div class="col-3 d-none d-md-block ">
        <div class="list-group">
            <a href="index.php?page_layout=home&category=all" class="list-group-item text-capitalize active bg-black">
                categories
            </a>
            <?php
            $sql = "SELECT * FROM cate";
            
            $categories = query_allcate();
            if (count($categories)) {
                foreach ($categories as  $category) {
            ?>
                    <a href="index.php?page_layout=home&category=<?php echo $category['cate_id'] ?>" class="list-group-item text-capitalize text-dark"><?php echo $category['cate_name']; ?></a>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="col-12 col-md-9">
        <div class="row d-block d-md-none mb-5">
            <div class="d-flex flex-row align-items-center flex-wrap  w-100">
                <a href="index.php?page_layout=home&category=all" class=" tab-mobile text-capitalize active bg-black text-white">
                    categories
                </a>
                <?php
                
                
                $categories = query_allcate();
                
                    foreach ($categories as  $category) {
                ?>
                        <a href="index.php?page_layout=home&category=<?php echo $category['cate_id'] ?>" class="tab-mobile text-capitalize text-dark"><?php echo $category['cate_name']; ?></a>
                <?php
                    }
                
                ?>

            </div>
        </div>
        <div class="row gx-3 gy-5 ">
            <?php
            if (isset($_GET['category'])) {
                $cate_id = $_GET['category'];
                
                
                $products = queryallpro("",$cate_id);
                
                    foreach ($products as  $product) {
                        extract($product)
            ?>
                        <div class="col-12 col-lg-4 col-md-6 user-select-none animate__animated  animate__zoomIn">
                            <div class="product-image">
                                <img class="card-img-top rounded-4 " src="./Admin/product/img/<?php echo $pro_img?>" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <a class="card-title two-line-clamp my-3 fs-6 text-dark text-decoration-none " href="index.php?page_layout=productinformation&pd_id=<?php echo $product['pro_id'] ?>"><?php echo $product['pro_name']; ?></a>
                                <div class="d-flex align-items-center justify-content-between px-2">
                                    <p class="card-text fw-bold fs-2 mb-0"><?php echo $pro_name ?></p>
                                    <p class="text-secondary ps-2 mt-3"> <?php echo $pro_price ?></p>
                                </div>
                            </div>
                        </div>

                    <?php

                    }
                }
             else {
                
                
                $products = queryallpro("",0);
                
                    foreach ($products as  $product) {
                        extract($product);
                    ?>
                        <div class="col-12 col-lg-4 col-md-6 user-select-none">
                            <div class="product-image">
                                <img class="card-img-top rounded-4 " src="./Admin/product/img/<?php echo $pro_img?>" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <a class="card-title two-line-clamp my-3 fs-6 text-dark text-decoration-none " href="index.php?page_layout=productinformation&pd_id=<?php echo $product['pro_id'] ?>"><?php echo $product['pro_name']; ?></a>
                                <div class="d-flex align-items-center justify-content-between px-2">
                                    <p class="card-text fw-bold fs-2 mb-0"><?php echo $pro_name; ?></p>
                                    <p class="text-secondary ps-2 mt-3"> <?php echo $pro_price ; ?></p>
                                </div>
                            </div>
                        </div>

            <?php
                    }
                }
            
            ?>
        </div>
    </div>
</div>