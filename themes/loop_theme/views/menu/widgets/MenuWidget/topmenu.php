            <div id="topHeader">
                <div class="container">
                    <div class="sixteen columns">
                        <div id="logo">
                            <h1><a href="index.html">logo</a></h1>
                        </div><!--end logo-->

                        <ul id="topNav">
                            <?php foreach ($params[items] as $param) { ?>
                                <li><a href=<?php echo $param[url]?>><?php echo $param[label] ?></a></li>
                            <?php } ?>    
                        </ul>

                    </div><!--end sixteen-->
                </div><!--end container-->
            </div><!--end topHeader-->

