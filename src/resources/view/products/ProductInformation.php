<?php
if (isset($_GET['pro_id'])) {
    setlocale(LC_MONETARY, 'en_US');
    $pro_id = (int)$_GET['pro_id'];
    $results = queryonepro($pro_id);
    extract($results);
    
?>
<form method="post" action="AddToCart.php">
    <div class="row">
        <div class="col-lg-5 col-md-6 col-12 mb-4">
            <img class="w-100 rounded-4 " src="<?php echo "./Admin/sanpham/img/".$pro_img ?>"
                alt="<?php echo $pro_name; ?>" />
        </div>
        <div class="col-lg-7 col-md-6 col-12">
            <h4 class="fs-4 fw-normal  "><?php echo $pro_name; ?></h4>
            <p class="fs-6 text-dark text-decoration-underline">By <?php echo $pro_brand; ?></p>
            <h2 class="fw-bold fs-2">$<?php echo number_format($pro_price, 2, '.'); ?></h2>
            <div class="mt-4">
                <span class="me-2 ">
                    <i class="bi bi-check"></i>
                    Instock:
                </span>
                <span class="fw-bold"> <?php echo $pro_stock; ?></span>
                <span>items</span>
            </div>
            <div class="mt-4">
                <label id="text-des" class="me-3" for="cart_qty">Quantity: </label>
                <input type="number" id="cart_qty" name="cart_qty" max="100" min="1" size="3" value="1">
            </div>
            <!-- input hidden -->
            <input type="hidden" name="cart_pdname" value="<?php echo $product['pro_name']; ?>">
            <input type="hidden" name="cart_pdimg" value="<?php echo $product['pro_img']; ?>">
            <input type="hidden" name="cart_pdprice" value="<?php echo $product['pro_price']; ?>">
            <input type="hidden" name="cart_buyerid"
                value="<?php echo isset($_SESSION['buyer_id']) ? $_SESSION['buyer_id'] : '' ?>">
            <input type="hidden" name="cart_pdid" value="<?php echo $product['pro_id']; ?>">

            <div class="d-flex flex-column">
                <button
                    class="btn btn-dark mt-4 btn-md w-25  <?php echo !isset($_SESSION['acount']) ? 'disabled ' : '' ?>"
                    type="submit" name="addtocart">
                    Add to Cart
                </button>
                <button
                    class="btn btn-dark mt-4 btn-md w-25  <?php echo !isset($_SESSION['acount']) ? 'disabled ' : '' ?>"
                    type="submit" name="buy">
                    By Product
                </button>
                <span class="text-danger fs-6 mt-2">
                    <?php echo !isset($_SESSION['buyer_id']) ? 'You must be logged in to add products to your cart ' : '' ?></span>
            </div>
        </div>
    </div>
</form>
<div class="mt-5">
    <h4 class="fs-5 mb-4">Products Details</h4>
    <p><?php
                $proDesc = $pro_name . $pro_desc ;
                $proDesc = nl2br(htmlspecialchars($proDesc));
                echo $proDesc;
                ?></p>
</div>

<?php
    }

?>