<?php
function component($productname, $productprice, $productimg, $productid){
    $element = "
    
    <div class=\"col-md-3 my-3 my-3\">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">Slot 0/1</p>
                            <h5>
                                <span class=\"price\">$productprice K</span>
                            </h5>
                            <button type=\"submit\" class=\"btn btn-primary my-1\" name=\"add\">Keranjang<i class=\"fas fa-shopping-cart\"></i></button>

                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function component2($productimg, $productname, $productprice, $productid){

    $element = "
    <audio loop autoplay>
    <source src=\"gak-pengen.mp3\">
    </audio>

    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-primary\">Seller : @neko177013</small><br>
                                <small class=\"text-secondary\">Slot 1/1</small>
                                <h5 class=\"pt-2\">$productprice K</h5>
                                <button type=\"submit\" class=\"btn btn-danger\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}