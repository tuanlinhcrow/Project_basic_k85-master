<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                    <div id="colorlib-logo"><a href="/index/"><img src="images/logo.png" alt=""
                                style="width: 300px;height: 50px;"></a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li class="active"><a href="index.html">Trang chủ</a></li>
                        <li class="has-dropdown">
                            <a href="/product/shop">Cửa hàng</a>
                            <ul class="dropdown">
                                <li><a href="/cart">Giỏ hàng</a></li>
                                <li><a href="/checkout">Thanh toán</a></li>

                            </ul>
                        </li>
                        <li><a href="/about/">Giới thiệu</a></li>
                        <li><a href="/contact/">Liên hệ</a></li>
                        <li><a href="cart.html"><i class="icon-shopping-cart"></i> Giỏ hàng [{{Cart::count()}}]</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
