<?php 

function component($item_name, $item_price, $item_image){
    $element = "
<section id=\"products\" class=\"py-5\">
            <div class=\"container px-4 px-lg-5 mt-5\">
                <div class=\"row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center\">
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"$item_image\" alt=\"lalala\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">$item_name</h5>
                                    <!-- Product price-->
                                    $item_price
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <input type=\"submit\" class=\"text-center\" name=\"add\">View options</a></input>
                            </div>
                        </div>
                    </div>
                    <!-- end of products -->
                </div>
            </div>
        </section>
        ";
    echo $element;
}