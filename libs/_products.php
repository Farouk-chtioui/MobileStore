<!-- start product -->
<?php
$id = $_GET['id'] ?? 1;
foreach ($product->getData() as $item):
    if ($item['id'] == $id):
        ?>
        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Replace this image tag with your iframe -->
                        <!-- <img src="<?php echo $item['image']; ?>" alt="product" class="img-fluid"> -->
                        <?php if ($item['id'] == 18): ?>
                            <!-- iPhone 11 Pro Max -->
                            <iframe style="width: 100%; height: 500px;" title="Iphone 11 Pro Max Space Gray 3D model - Sketchfab" class="c-viewer__iframe" src="https://sketchfab.com/models/dd7a10f8fffe425281221c4f12fe2b73/embed?autostart=1&amp;internal=1&amp;tracking=0&amp;ui_infos=0&amp;ui_snapshots=1&amp;ui_stop=0&amp;ui_theatre=1&amp;ui_watermark=0" id="api-frame" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking="true" execution-while-out-of-viewport="true" execution-while-not-rendered="true" web-share="true" allowfullscreen=""></iframe>
                                <?php elseif ($item['id'] == 15): ?>
                            <!-- iPhone 12 Pro Max -->
                            <iframe style="width: 100%; height: 500px;" title="iPhone 12 Pro 3D model - Sketchfab" class="c-viewer__iframe" src="https://sketchfab.com/models/05dfc991665e45c68c8b7062136c0c6e/embed?autostart=1&amp;internal=1&amp;tracking=0&amp;ui_infos=0&amp;ui_snapshots=1&amp;ui_stop=0&amp;ui_theatre=1&amp;ui_watermark=0" id="api-frame" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking="true" execution-while-out-of-viewport="true" execution-while-not-rendered="true" web-share="true" allowfullscreen=""></iframe>                      
                                <?php elseif ($item['id'] == 17): ?>
                                    <iframe style="width: 100%; height: 500px;" title="iPhone X 3D model - Sketchfab" class="c-viewer__iframe" src="https://sketchfab.com/models/02f12869e95e4695a15e3a611398742b/embed?autostart=1&amp;internal=1&amp;tracking=0&amp;ui_infos=0&amp;ui_snapshots=1&amp;ui_stop=0&amp;ui_theatre=1&amp;ui_watermark=0" id="api-frame" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking="true" execution-while-out-of-viewport="true" execution-while-not-rendered="true" web-share="true" allowfullscreen=""></iframe>
                                <?php elseif ($item['id'] == 16): ?>
                                    <iframe style="width: 100%; height: 500px;"  title="Apple iPhone 13 Pro Max 3D model - Sketchfab" class="c-viewer__iframe" src="https://sketchfab.com/models/4328dea00e47497dbeac73c556121bc9/embed?autostart=1&amp;internal=1&amp;tracking=0&amp;ui_infos=0&amp;ui_snapshots=1&amp;ui_stop=0&amp;ui_theatre=1&amp;ui_watermark=0" id="api-frame" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking="true" execution-while-out-of-viewport="true" execution-while-not-rendered="true" web-share="true" allowfullscreen=""></iframe>
                                    <?php elseif ($item['id'] == 20): ?>
                                        <iframe style="width: 100%; height: 500px;" title="iPhone 15 Pro 3D model - Sketchfab" class="c-viewer__iframe" src="https://sketchfab.com/models/18c0acd4c8a04a50ada94b99b1ed8a2c/embed?autostart=1&amp;internal=1&amp;tracking=0&amp;ui_infos=0&amp;ui_snapshots=1&amp;ui_stop=0&amp;ui_theatre=1&amp;ui_watermark=0" id="api-frame" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking="true" execution-while-out-of-viewport="true" execution-while-not-rendered="true" web-share="true" allowfullscreen=""></iframe>
                                            <?php elseif ($item['id'] == 19): ?>
                                                <iframe style="width: 100%; height: 500px;" title="iphone 14 3D model - Sketchfab" class="c-viewer__iframe" src="https://sketchfab.com/models/adc4ea80bf314a14b8addcb687e6506a/embed?autostart=1&amp;internal=1&amp;tracking=0&amp;ui_infos=0&amp;ui_snapshots=1&amp;ui_stop=0&amp;ui_theatre=1&amp;ui_watermark=0" id="api-frame" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking="true" execution-while-out-of-viewport="true" execution-while-not-rendered="true" web-share="true" allowfullscreen=""></iframe>





                                <?php endif; ?>
                        <div class="pt-4 font-size-16">
                            <!-- Rest of your code -->
                            <div class="col">
                                <button type="submit" class="btn btn-success form-control"
                                    onclick="alert('This is not apple you cant buy sadly')">Proceed to Buy</button>
                            </div>
                            <div class="col">
                                <form method="POST">
                                    <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo $_COOKIE['user_id'] ?? 0 ?>">
                                    <?php
                                    if (in_array($item['id'], $cart->getCartId($cart->getCart($_COOKIE['user_id'] ?? 0)) ?? [])) {
                                        echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                    } else {
                                        echo '<button type="submit" name="buy_product_submit" class="btn btn-warning form-control">Add to Cart</button>';
                                    }
                                    ?>
                            <a href="emulator.php">
    <button type="button" class="btn btn-primary">Demo</button>
</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-size-20">
                            <?php echo $item['name']; ?>
                        </h5>
                        <small>by
                            <?php echo $manage->getBrand($item['brand'])['brand']; ?>
                        </small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-size-14">20,534 ratings | 1000+ answered questions</a>
                        </div>
                        <hr class="m-0">

                        <!--- product price -->
                        <table class="my-3 font-size-14">
                            <tr>
                            </tr>
                            <tr>
                                <td>Deal Price:</td>
                                <td class="font-size-20 text-danger">$
                                    <span>
                                        <?php echo $item['price'] ?? 0; ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="font-size-12">&nbsp;&nbsp;Inclusive of all taxes</span>
                                </td>
                            </tr>
                            <tr>
                                <td>You Save:</td>
                                <td><span class="font-size-16 text-danger">$152.00</span></td>
                            </tr>
                        </table>
                        <!-- !product price -->

                        <!-- #policy -->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center me-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-size-12">10 Days <br> Replacement</a>
                                </div>
                                <div class="return text-center me-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck  border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-size-12">About <br>Our</a>
                                </div>
                                <div class="return text-center me-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-size-12">1 Year <br>Warranty</a>
                                </div>
                            </div>
                        </div>
                        <!-- !policy -->
                        <hr>
                        <!-- order-details -->
                        <div id="order-details" class="d-flex flex-column">
                            <small>Delivery by : Mar 29 - Apr 1</small>
                            <small>Sold by <a href="#">Daily Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer -
                                424201</small>
                        </div>
                        <!-- !order-details -->
                        <div class="row align-items-center">
                            <div class="col-6">
                                <!-- color -->
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6>Color:</h6>
                                        <div class="p-2 color-yellow-bg rounded-circle">
                                            <button class="btn font-size-14"></button>
                                        </div>
                                        <div class="p-2 color-primary-bg rounded-circle">
                                            <button class="btn font-size-14"></button>
                                        </div>
                                        <div class="p-2 color-second-bg rounded-circle">
                                            <button class="btn font-size-14"></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- !color -->
                            </div>
                            <div class="col-6">
                                <!-- product qty section -->
                                <div class="qty d-flex">
                                    <h6>Quantity</h6>
                                    <div class="px-4 d-flex">
                                        <button class="qty-up border bg-light w-25" data-id="pro1"><i
                                                class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1"
                                            class="qty_input text-center border px-2 w-50" disabled value="1"
                                            placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light w-25"><i
                                                class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                                <!-- !product qty section -->
                            </div>
                        </div>
                        <!-- size -->
                        <div class="size my-3">
                            <h6>Size :</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="border p-2">
                                    <button type="button" class="btn p-0 font-size-14">4GB RAM</button>
                                </div>
                                <div class="border p-2">
                                    <button type="button" class="btn p-0 font-size-14">6GB RAM</button>
                                </div>
                                <div class="border p-2">
                                    <button type="button" class="btn p-0 font-size-14">8GB RAM</button>
                                </div>
                            </div>
                        </div>
                        <!-- !size -->
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- !start product -->
        <?php
    endif;
endforeach;
?>