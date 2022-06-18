<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php" ?>
<div>
    <style type="text/css">
        .pagination-wrapper {
            margin-top: 10px;
            display: flex;
            justify-content: center;
        }

        .page-link {
            background-color: #ffce00;
            border-radius: 50%;
            color: #000000;
        }

        .pagination {
            padding: 0px;
            margin: 0px;
            float: right;
            margin-top: 5px;
        }

        .product-title {
            margin: 50px auto;
            position: relative;
        }

        .product-title::after {
            content: "";
            height: 3px;
            width: 10%;
            position: absolute;
            background-color: orangered;
            border-radius: 20px;
            left: 45%;
        }

        .content-container {
            width: 100%;
            font-family: 'Nunito', sans-serif;

        }

        .section-container {
            width: 90%;
            margin: 0 auto;
            padding-top: 10px;
            text-align: center;
        }

        .card {
            position: relative;
            width: 320px;
            height: 480px;
            background: #191919;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

        .card::before {
            content: "";
            position: absolute;
            top: -50%;
            width: 100%;
            height: 100%;
            background: #ffce00;
            transform: skewY(345deg);
            transition: 0.5s;
        }

        .card:hover::before {
            top: -70%;
            transform: skewY(390deg);
        }

        .card::after {
            content: "CORSAIR";
            position: absolute;
            bottom: 0;
            left: 0;
            font-weight: 600;
            font-size: 6em;
            color: rgba(0, 0, 0, 0.1);
        }

        .card .imgBox {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 20px;
            z-index: 1;
        }

        /*
.card .imgBox img {
    max-width: 100%;
    
    transition: .5s;
}

.card:hover .imgBox img {
    max-width: 50%;
      
}
*/
        .card .contentBox {
            position: relative;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 2;
        }

        .card .contentBox h3 {
            font-size: 18px;
            color: white;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .card .contentBox .price {
            font-size: 24px;
            color: white;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .card .contentBox .buy {
            position: relative;
            top: 100px;
            opacity: 0;
            padding: 10px 30px;
            margin-top: 15px;
            color: #000000;
            text-decoration: none;
            background: #ffce00;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: 0.5s;
        }

        .card:hover .contentBox .buy {
            top: 0;
            opacity: 1;
        }

        .mouse {
            height: 300px;
            width: auto;
        }

        .contentBox>input {
            position: absolute;
            left: 0;
            bottom: 25%;
            background: #ffce00;
            border-radius: 30px;
            border: none;
        }

        .contact-icon {
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 50%;
            right: 0;
            z-index: 2;
        }

        .contact-icon>img {
            margin: 5px;
        }
    </style>
    <div class="content-container">
        <div class="banner">
            <div class="banner-fill">
            </div>
            <div class="banner-slide">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4000">
                            <img src="../assets/backend/images/banner2.jpg" class="d-block w-100" height="800px" alt="banner-img">
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="../assets/backend/images/banner1.png" class="d-block w-100" height="800px" alt="banner-img">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/backend/images/banner3.jpg" class="d-block w-100" height="800px" alt="banner-img">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="section-container">
            <div class="product-title">
                <h2>Danh sách <span style="color: orange; font-weight: 900;">Sản Phẩm</span></h2>
            </div>
            <div class="container d-flex justify-content-center mt-50 mb-50">
                <div class="row">
                    <?php
                    foreach ($data as $key => $rows) :
                    ?>
                        <div class="card" style="margin: 20px 30px;">

                            <div class="imgBox">
                                <a href="index.php?controller=demo&action=detail&id=<?php echo $rows->id ?>"><img src="<?php echo $rows->image; ?>" alt="mouse corsair" class="mouse"></a>
                            </div>

                            <div class="contentBox">
                                <h3> <?php echo $rows->name; ?></h3>
                                <input class="form-control input-number" value="1" min="1" max="<?php echo $rows->ton_kho ?>" id="quantity<?php echo $rows->id; ?>" type="number" style="width: 50px;margin-left: 10px;padding: 8px;">
                                <h2 class="price"><?php echo number_format($rows->price); ?>đ</h2>
                                <button class="buy" onclick="addToCart<?php echo $rows->id ?>()" href="">
                                    <?php if ($rows->ton_kho > 0) {
                                        echo "Mua Ngay";
                                    } else {
                                        echo "Hết Hàng";
                                    } ?> </button>&nbsp;
                            </div>

                        </div>
                        <script>
                            function addToCart<?php echo $rows->id ?>() {
                                let quantity = document.getElementById('quantity<?php echo $rows->id; ?>').value;
                                let isOutStock = <?php echo $rows->ton_kho ?>;
                                if (isOutStock > 0) {
                                    location.href = "index.php?controller=demo&action=addToCart&id=<?php echo $rows->id; ?>&quantity<?php echo $rows->id; ?>=" + quantity;
                                    alert("Sản phẩm đã được thêm vào giỏ hàng")
                                } else {
                                    alert("Sản phẩm hiện đang hết hàng, mong quý khách thông cảm!")
                                }
                            }
                        </script>
                    <?php
                    endforeach;
                    ?>
                </div>

            </div>
            <?php
                if(!isset($isSearch)): 
            ?>
            <div class="pagination-wrapper">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php for ($i = 1; $i <= $numPage; $i++) : ?>
                            <li><a class="page-link" href="index.php?controller=demo&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            </div>
            <?php endif; ?>
           
        </div>
        <div class="contact-icon">
            <a href=""><img src="../assets/backend/images/twitter-png-5966.png" height="60px" width="60px" alt="twitter"></a>
            <a target="blank" href="https://www.facebook.com/Antonevaaa"><img src="../assets/backend/images/facebook-logo-png-9024.png" height="60px" width="60px" alt="twitter"></a>
        </div>
    </div>
</div>
<!-- <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                        <div style="float: right; margin-bottom: 5px;">
                            <a href="index.php?controller=demo&action=showCart" class="btn btn-primary"><h6>Giỏ hàng&nbsp; <i class="link-icon" data-feather="plus-square"></i></h6></a>
                        </div>
                        <h6 class="card-title">Danh sách sản phẩm</h6>
                        <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 50px;text-align:center;">STT</th>
                                            <th style="width: 150px;text-align:center;">Tên sản phẩm</th>
                                            <th style="width: 150px;text-align:center;">Mã sản phẩm</th> 
                                            <th style="width: 100px;text-align:center;">Hàng còn lại</th>
                                            <th style="width: 100px;text-align:center;">Giá</th>
                                            <th style="width: 100px;text-align:center;">Số lượng muốn mua</th>
                                            <th style="width: 150px;text-align:center;"></th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // foreach ($data as $key => $rows): 
                                        ?>
                                        <tr>
                                        <td  style="text-align:center; width: 50px;">
                                                <?php
                                                // echo $key+1; 
                                                ?>
                                            </td>
                                            <td  style="text-align:center; width: 150px;">
                                                <?php
                                                // echo $rows->name; 
                                                ?>
                                            </td>
                                            <td style="text-align:center;">
                                                <?php
                                                // echo $rows->ma_hang; 
                                                ?>
                                            </td>
                                            <td style="text-align:center;">
                                                <?php
                                                // echo $rows->ton_kho; 
                                                ?>
                                            </td>
                                            <td style="text-align:center;">
                                                <?php
                                                // echo number_format($rows->price); 
                                                ?>đ
                                            </td>
                                            <td style="text-align:center;">
                                                <input class="form-control input-number" value="1" min="1" max="<?php
                                                                                                                // echo $rows->ton_kho 
                                                                                                                ?>" id="quantity<?php
                                                                                                                                // echo $rows->id; 
                                                                                                                                ?>" type="number" style="width: 120px;margin-left: 30px">  
                                            </td>
                                            
                                            <td style="text-align:center;">
                                    <a class="btn btn-success" style="color: white" onclick="addToCart<?php
                                                                                                        // echo $rows->id 
                                                                                                        ?>()" href="#" >Thêm vào giỏ hàng</a>&nbsp;
                                            </td>
                                            <td style="text-align:center;">
                                                <img src="<?php
                                                            // echo $rows->image; 
                                                            ?>" alt="anh">
                                            </td>
                                        </tr>
                                        <script>
                                             function addToCart<?php
                                                                //  echo $rows->id 
                                                                ?>(){
                                                    var quantity = document.getElementById('quantity<?php
                                                                                                    //  echo $rows->id; 
                                                                                                    ?>').value;
                                                    location.href="index.php?controller=demo&action=addToCart&id=<?php
                                                                                                                    // echo $rows->id; 
                                                                                                                    ?>&quantity<?php
                                                                                                                                // echo $rows->id; 
                                                                                                                                ?>="+quantity;
                                            //}
                                        </script>
                                        <?php
                                        // endforeach; 
                                        ?>
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item disabled"><a class="page-link" href="#">Page</a></li>
                                    <?php
                                    // for($i = 1;$i <= $numPage; $i++): 
                                    ?>
                                        <li><a class="page-link" href="index.php?controller=products&p=<?php
                                                                                                        // echo $i; 
                                                                                                        ?>"><?php
                                                                                                            // echo $i; 
                                                                                                            ?></a></li>
                                        <?php
                                        // endfor; 
                                        ?>
                                </ul>
                                </nav>
                        </div>
            </div>
        </div>
    </div> -->
</div>