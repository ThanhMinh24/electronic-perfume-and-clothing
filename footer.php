<footer id="htc__footer">
            <!-- Start Footer Widget -->
            <div class="footer__container bg__cat--1">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer">
                                <h2 class="title__line--2">ABOUT US</h2>
                                <div class="ft__details">
                                    <p>WishList is a platform which helps in purchasing the products that are displayed in the product lists. People can visit our website, choose the products they like, enter the required details, make payment, and purchase goods and services in a jiffy. WishList facilitates online transactions with the use of data and fund transfer.</p>
                                    <div class="ft__social__link">
                                        <ul class="social__link">
                                            <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-google icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-2 col-sm-6 col-xs-12 xmt-40">
                            <div class="footer">
                                <h2 class="title__line--2">information</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="contact.php">About us</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">my account</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="profile.php">My Account</a></li>
                                        <li><a href="cart.php">My Cart</a></li>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="wishlist.php">Wishlist</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->

                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->

                        <!-- End Single Footer Widget -->
                    </div>
                </div>
            </div>
            <!-- End Footer Widget -->
            <!-- Start Copyright Area -->
            <div class="htc__copyright bg__cat--5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="copyright__inner">
                                <p>Copyright© <a href="https://freethemescloud.com/">WishList</a> 2021. All right reserved.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area -->
        </footer>
        <!-- End Footer Style -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>
	<script src="js/custom.js"></script>
    <style>
        #ad-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            width: calc(100% - 40px);
            height: 100px;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
        }

        #close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .ad-content { /* Class chung cho tất cả nội dung quảng cáo */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
        }
        #ad-banner img {
    max-width: 100%; /* Giới hạn chiều rộng tối đa của ảnh là 100% chiều rộng của phần tử chứa nó */
    max-height: 100%; /* Giới hạn chiều cao tối đa của ảnh là 100% chiều cao của phần tử chứa nó */
    object-fit: contain; /* Giữ nguyên tỷ lệ khung hình của ảnh và đảm bảo ảnh nằm gọn trong vùng chứa */
}


        .ad-1 { 
            background-color: #f0f0f0; 
        }

        .ad-2 { 
            background-color: lightblue; 
        }

        .ad-3 { 
            background-color: lightgreen; 
        }
    </style>
<body>
    <div id="ad-banner">
        <span id="close-button">X</span>
        <div id="ad-content" class="ad-content ad-1">
            <img src="mau1.jpg" alt="Hình ảnh 1">
            <h1>Sale 30% For Floral Print Polo T-shirt</h1>
        </div>
    </div>

    <script>
        const adContents = [
            
            '<div class="ad-content ad-1"><img src="mau1.jpg" alt="Hình ảnh 1"><h1>Sale 30% For Floral Print Polo T-shirt</h1></div>',
            '<div class="ad-content ad-2"><img src="mau2.jpg" alt="Hình ảnh 2"><h1>Sale 40% Monte Carlo Turquoise Blue Solid Collar T Shirt</h1></div>',
            '<div class="ad-content ad-3"><img src="mau3.jpg" alt="Hình ảnh 3"><h1>Sale 35% Floral Print Polo T-shirt Latest</h1></div>'
        ];
        const adContentElement = document.getElementById("ad-content");
        const closeButton = document.getElementById("close-button");
        const adBanner = document.getElementById("ad-banner");

        let adInterval = setInterval(() => {
            const randomIndex = Math.floor(Math.random() * adContents.length);
            adContentElement.innerHTML = adContents[randomIndex]; // Cập nhật toàn bộ nội dung HTML

            adBanner.style.display = "block"; 
        }, 10000);

        closeButton.addEventListener("click", () => {
            adBanner.style.display = "none";
        });
    </script>
</body>
</body>

</html>
