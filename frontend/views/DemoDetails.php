<?php $this->layoutPath = "Layout.php" ?>

<div>
    <style type="text/css">
        .main-content {
            /* background-color: black */
            /* height: 300px; */
            height: auto;
            width: 100%;
            font-family: 'Nunito', sans-serif;
            margin: 0 auto;
            text-align: center;
        }

        .fill-space {
            height: 60px;
            width: 100%;
        }

        .contact-icon {
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 50%;
            right: 0;
            z-index: 2;
        }

        .content-title>h2 {
            margin: 50px auto;
        }

        .product-container {
            margin: 150px auto 50px auto;
            width: 100%;
            height: auto;
            display: flex;
            justify-content: space-around;
        }

        .content-title::after {
            content: "";
            height: 3px;
            width: 10%;
            position: absolute;
            background-color: orangered;
            border-radius: 20px;
            left: 45%;
        }

        .product-info {
            align-self: center;
            text-align: left;
            border-left: 2px solid #b3b3b3;
            width: 50%;
            padding-left: 80px;
        }

        .product-info>div {
            margin: 20px auto;
        }

        .product-price {
            color: orangered;
            font-size: 36px;
            font-weight: 700;
        }

        .product-detail-infor {
            line-height: 30px;
        }

        .product-name {
            color: orange;
            font-size: 28px;
            font-weight: 700;
        }

        .product-img {
            align-self: center;

        }

        .product-img>img {
            transition: 0.4s ease;
        }

        .product-img>img:hover {
            transform: scale(1.1);
        }

        .add-cart {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .add-cart>input {
            margin: 10px auto;
        }

        /* CSS */
        .button-32 {
            background-color: #fff000;
            border-radius: 12px;
            color: #000;
            cursor: pointer;
            font-weight: bold;
            padding: 10px 15px;
            text-align: center;
            transition: 200ms;
            width: 100%;
            box-sizing: border-box;
            border: 0;
            font-size: 16px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-32:not(:disabled):hover,
        .button-32:not(:disabled):focus {
            outline: 0;
            background: #f4e603;
            box-shadow: 0 0 0 2px rgba(0, 0, 0, .2), 0 3px 8px 0 rgba(0, 0, 0, .15);
        }

        .button-32:disabled {
            filter: saturate(0.2) opacity(0.5);
            -webkit-filter: saturate(0.2) opacity(0.5);
            cursor: not-allowed;
        }
    </style>
    <div class="container">
        <div class="fill-space"></div>
        <div class="main-content">
            <div class="content-title">
                <h2>Chi tiết <span style="color: orange; font-weight: 900;">Sản Phẩm</span></h2>
            </div>
            <div class="product-container">
                <div class="product-img">
                    <img height="500px" width="400px" src="<?php echo $data->image; ?>" alt="product-detail">
                </div>
                <div class="product-info">
                    <div class="product-price">
                        <?php echo number_format($data->price); ?>đ
                    </div>
                    <div class="product-name">
                        <?php echo $data->name; ?>
                    </div>
                    <div class="product-detail-infor">
                        Mã sản phẩm: <?php echo $data->ma_hang; ?><br />
                        Loại sản phẩm: <?php echo $data->category_name; ?><br />
                        Số IMEI: <?php echo $data->so_imei; ?><br />
                        Số Serial: <?php echo $data->so_serial; ?><br />
                        Bảo hành: <?php echo $data->bao_hanh; ?> tháng<br />
                        Xuất sứ: <?php echo $data->xuat_su; ?><br />
                        Tình trạng: <?php if ($data->ton_kho > 0) {
                                        echo "Còn hàng";
                                    } else {
                                        echo "Hết hàng";
                                    } ?>
                    </div>
                    <div class="add-cart">
                        <input class="form-control input-number" value="1" min="1" max="<?php echo $data->ton_kho ?>" id="quantity<?php echo $data->id; ?>" type="number" style="width: 50px;padding: 8px;">
                        <button <?php if ($data->ton_kho > 0) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                } ?> class="button-32" role="button" onclick="addToCart<?php echo $data->id ?>()" href=""><?php if ($data->ton_kho > 0) {
                                                                                                                        echo "Thêm vào giỏ hàng";
                                                                                                                    } else {
                                                                                                                        echo "Hết hàng";
                                                                                                                    } ?> </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-icon">
            <a href=""><img src="../assets/backend/images/twitter-png-5966.png" height="60px" width="60px" alt="twitter"></a>
            <a target="blank" href="https://www.facebook.com/Antonevaaa"><img src="../assets/backend/images/facebook-logo-png-9024.png" height="60px" width="60px" alt="twitter"></a>
        </div>
    </div>
    <script>
        function addToCart<?php echo $data->id ?>() {
            var quantity = document.getElementById('quantity<?php echo $data->id; ?>').value;
            location.href = "index.php?controller=demo&action=addToCart&id=<?php echo $data->id; ?>&quantity<?php echo $data->id; ?>=" + quantity;
            alert("Sản phẩm đã được thêm vào giỏ hàng")
        }
    </script>
</div>