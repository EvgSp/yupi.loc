            <div id="topHeader">
                <div class="container">
                    <div class="sixteen columns">
                        <ul id="currency">
                            <li class="active_currency"><a href="#">$</a></li>
                            <li><a href="#">£</a></li>
                            <li><a href="#">€</a></li>
                        </ul>
                        <ul id="lang">
                            <li class="active_lang"><a href="#">en</a></li>
                            <li><a href="#">es</a></li>
                            <li><a href="#">fr</a></li>
                        </ul>

                        <ul id="topNav">
                            <?php foreach ($params[items] as $param) { ?>
                                <li><a href=<?php echo $param[url]?>><?php echo $param[label] ?></a></li>
                            <?php } ?>    
                        </ul>

                    </div><!--end sixteen-->
                </div><!--end container-->
            </div><!--end topHeader-->

