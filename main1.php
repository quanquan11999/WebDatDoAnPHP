<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vuthibacdk12cntt2";
    //B1: Create connetion
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //check connection
    
    if (!$conn) {
        die("connection failer" . mysqli_connect_error());
    }
    //B2:
        $sql = "SELECT * 
        FROM sanpham1
       
        order by rand()
          limit 8";
    //Bước 3
    $result = mysqli_query($conn, $sql);

?>
<style>
.current-ten{
    text-transform: uppercase;
    color: green;
    font-weight: bold;

}
    
    </style>
    
<!-- Start Slider Area -->
<main class="main-wrapper">
        <div class="container" id="trangchu">
            <div class="home-slider">
                <img src="./assetss/img/banner-3.png" alt="">
                <!-- <img src="./assetss/img/banner-2.png" alt="">
                <img src="./assetss/img/banner-3.png" alt="">
                <img src="./assetss/img/banner-4.png" alt="">
                <img src="./assetss/img/banner-5.png" alt=""> -->
            </div>
            <div class="home-service" id="home-service">
                <div class="home-service-item">
                    <div class="home-service-item-icon">
                        <i class="fa-light fa-person-carry-box"></i>
                    </div>
                    <div class="home-service-item-content">
                        <h4 class="home-service-item-content-h">GIAO HÀNG NHANH</h4>
                        <p class="home-service-item-content-desc">Cho tất cả đơn hàng</p>
                    </div>
                </div>
                <div class="home-service-item">
                    <div class="home-service-item-icon">
                        <i class="fa-light fa-shield-heart"></i>
                    </div>
                    <div class="home-service-item-content">
                        <h4 class="home-service-item-content-h">SẢN PHẨM AN TOÀN</h4>
                        <p class="home-service-item-content-desc">Cam kết chất lượng</p>
                    </div>
                </div>
                <div class="home-service-item">
                    <div class="home-service-item-icon">
                        <i class="fa-light fa-headset"></i>
                    </div>
                    <div class="home-service-item-content">
                        <h4 class="home-service-item-content-h">HỖ TRỢ 24/7</h4>
                        <p class="home-service-item-content-desc">Tất cả ngày trong tuần</p>
                    </div>
                </div>
                <div class="home-service-item">
                    <div class="home-service-item-icon">
                        <i class="fa-light fa-circle-dollar"></i>
                    </div>
                    <div class="home-service-item-content">
                        <h4 class="home-service-item-content-h">HOÀN LẠI TIỀN</h4>
                        <p class="home-service-item-content-desc">Nếu không hài lòng</p>
                    </div>
                </div>
            </div>
            <div class="home-title-block" id="home-title">
                <h2 class="home-title">Khám phá thực đơn của chúng tôi</h2>
            </div>
            <div class="home-products" id="home-products"> 
                 <?php       $limit = 8; 
                            $count = 0; 
                            while ($row= mysqli_fetch_assoc($result)) { 
                                if ($count >= $limit) {
                                    break; 
                                }    
                        ?>  
                <div class="col-product">
               
                    <article class="card-product" >
                        <div class="card-header">
                            <a href="chitiet.php?masp=<?php echo $row["masp"] ?>" class="card-image-link" >
                                        <img  src="upload/<?php echo $row["img1"] ?>" alt="" class="card-image"  >
                                    </a> 
                         
                        </div>
                        <form action="cart.php" method="post" class="product__items-cart">
                      
                        <div class="card-footer">
                                            <div class="product-buy">
                                                <!-- <i class="fa-regular fa-cart-shopping-fast"></i> -->
                                            <input type="submit" value="Đặt món" name="addcart" class="card-button order-itemt">
                                        </div>
                                    </div>
                           
                                            <input type="hidden" name="soluong" value="1">
                                            <input type="hidden" name="tensp" value="<?php echo $row["tensp"] ?>">
                                            <input type="hidden" name="dongiamoi" value="<?php echo $row["dongiamoi"] ?> 000 VNĐ">
                                            <input type="hidden" name="img1" value="<?php echo $row["img1"] ?>">   
                                    </form>
                        <div class="food-info">
                            <div class="card-content">
                                <div class="card-title">
                                    <a href="#" class="card-title-link" ></a>
                                </div>
                            </div>
                            <div class="card-footer">
                            <div class="product-price">
                                    <span class="current-ten"><?php echo $row["tensp"] ?></span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price"><?php echo $row["dongiamoi"] ?> 000 VNĐ</span>
                                </div>
                            <!-- <div class="product-buy">
                            
                                <button  class="card-button order-item"><i class="fa-regular fa-cart-shopping-fast"></i> Đặt món</button>
                            </div>  -->
                        </div>
                        
                        </div>
                   
            </div>
          <?php 
                            $count++;    
                            }     ?>  
           <div class="page-nav">
            <ul class="page-nav-list">
               </ul>
           </div>
        </div> 
      </div>
    </div>
                        </div>