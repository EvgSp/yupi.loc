<?php $mainAssets = Yii::app()->getTheme()->getAssetsUrl(); ?>

<div class="container">
    <div class="sixteen columns">
        <div id="mainNav" class="clearfix">
            <nav>
                <ul id="catalog">
                    <li>
                        <a class="hasdropdown" href="#">Каталог товаров</a>
                        <ul class="submenu">
                            <li><a href="#">Фотоаппараты</a></li>
                            <li><a href="#">Объективы</a></li>
                            <li><a href="#">Вспышки</a></li>
                            <li><a href="#">Студийное оборудование</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a class="hasdropdown" href="#">О компании</a>
                        <ul class="submenu">
                            <li><a href="#">О компании</a></li>
                            <li><a href="#">Контакты</a></li>
                            <li><a href="#">Объявления</a></li>
                            <li><a href="#">Блог</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="hasdropdown" href="#">Покупателям</a>
                        <ul class="submenu">
                            <li><a href="#">Как сделать заказ</a></li>
                            <li><a href="#">Оплата</a></li>
                            <li><a href="#">Доставка</a></li>
                            <li><a href="#">Поддержка</a></li>
                            <li><a href="#">Гарантия и сервис</a></li>
                            <li><a href="#">Обратная связь</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="hasdropdown" href="#">Выбор товара</a>
                        <ul class="submenu">
                            <li><a href="#">Новости техники</a></li>
                            <li><a href="#">Словарь терминов</a></li>
                            <li><a href="#">Обзоры</a></li>
                            <li><a href="#">Помощь в выборе</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="software hasdropdown" href="#">Фотошкола</a>
                        <ul class="submenu">
                            <li><a href="#">Жанр</a></li>
                            <li><a href="#">Композиция</a></li>
                            <li><a href="#">Техника</a></li>
                            <li><a href="#">Съемка</a></li>
                            <li><a href="#">Обработка</a></li>
                        </ul>
                    </li>
                </ul>

            </nav><!--end nav-->

            <div id="cart">
                <a class="cart_dropdown" href="javascript:void(0);"><img src="<?php echo $mainAssets; ?>/images/icons/cart_icon.png" alt=""> 3 items<span>: $320.00</span></a>
                            <div class="cart_content">
                                <b class="cart_content_arrow"></b>
                                <ul>
                                    <li class="clearfix">
                                        <div class="cart_product_name">
                                            <img src="<?php echo $mainAssets; ?>/images/photos/dropdown_cart_image.jpg" alt="product image">
                                            <span>
                                                <strong><a href="#">product Name Here and long</a></strong><br>
                                                Color: black<br>
                                                Size: 36
                                            </span>
                                        </div>
                                        <div class="cart_product_price">
                                            <span>
                                                <strong>2x - $130.00</strong><br>
                                                <a class="remove_item" href="#">Remove</a>
                                            </span>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="cart_product_name">
                                            <img src="<?php echo $mainAssets; ?>/images/photos/dropdown_cart_image.jpg" alt="product image">
                                            <span>
                                                <strong><a href="#">product Name Here and long</a></strong><br>
                                                Color: black<br>
                                                Size: 36
                                            </span>
                                        </div>
                                        <div class="cart_product_price">
                                            <span>
                                                <strong>2x - $130.00</strong><br>
                                                <a class="remove_item" href="#">Remove</a>
                                            </span>
                                        </div>
                                    </li>
                                </ul><!--end ul-->

                                <div class="dropdown_cart_info clearfix">
                                    <div class="cart_buttons">
                                        <a class="gray_btn" href="#">View Cart</a><br>
                                        <a class="red_btn" href="#">Checkout</a>
                                    </div><!--end cart buttons-->

                                    <div class="cart_total_price">
                                        <span>
                                            Sub Total : $820.00<br>
                                            VAT 16% : $390.00<br>
                                            <strong>TOTAL : $1,598.30</strong>
                                        </span>
                                    </div><!--end cart buttons-->
                                </div><!--end dropdown_cart_info-->

                            </div><!--end cart_content-->
                            </div><!--end cart-->
                            </div><!--end main-->
                            </div><!--end sixteen-->
                            </div><!--end container-->

