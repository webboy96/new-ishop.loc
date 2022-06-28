<?php
use wfm\View;
/** @var $this View */
?>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light p-2">
            <?= $breadcrumbs ?>
        </ol>
    </nav>
</div>


<div class="container py-3">
    <div class="row">

        <div class="col-md-4 order-md-2">

            <h1><?= $product['title'] ?></h1>

            <ul class="list-unstyled">
                <li><i class="fas fa-check text-success"></i> В наличии</li>
                <li><i class="fas fa-shipping-fast text-muted"></i> Ожидается</li>
                <li><i class="fas fa-hand-holding-usd"></i><span class="product-price">
                        <?php if($product['old_price']) : ?>
                        <small>$<?= $product['old_price'] ?></small>
                        <?php endif; ?>
                        $<?= $product['price'] ?>
                </li>
            </ul>

            <div id="product">
                <div class="input-group mb-3">
                    <input id="input-quantity" type="text" class="form-control" name="quantity" value="1">
                    <button class="btn btn-danger add-to-cart" type="button" data-id="<?= $product['id'] ?>"><?= __('product_view_buy') ?></button>
                </div>
            </div>

        </div>

        <div class="col-md-8 order-md-1">

            <ul class="thumbnails list-unstyled clearfix">


                    <li class="thumb-main text-center">
                        <a class="thumbnail" href="<?= $product['img'] ?>" data-effect="mfp-zoom-in">
                            <img src="<?= PATH . $product['img'] ?>" alt="">
                        </a>
                    </li>
                <?php if (!empty($gallery)): ?>
                    <?php foreach ($gallery as $item): ?>
                    <li class="thumb-additional">
                        <a class="thumbnail" href="<?= PATH . $item['img'] ?>" data-effect="mfp-zoom-in">
                            <img src="<?= PATH . $item['img'] ?>" alt="">
                        </a>
                    </li>
                <?php endforeach; ?>
                <?php endif; ?>

                <?= $product['content']; ?>
            </ul>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi quas esse at odio modi enim, libero, inventore veniam eveniet! Nesciunt incidunt perferendis earum cum minus assumenda fugit labore quidem rem.</p>
            <p>Aliquam voluptatem, dignissimos eaque, cum adipisci esse fugit illo ea quae perspiciatis suscipit. Nesciunt aspernatur similique recusandae, vitae maiores sit accusantium! Nostrum, aliquam ad quisquam corrupti itaque, eveniet quo velit!</p>
            <p>Explicabo, culpa, sit! Quod eum, aperiam odit reiciendis repellendus vitae, quam laboriosam possimus fugiat rerum facilis dolor, molestiae magnam culpa numquam praesentium soluta molestias quaerat officiis, fuga aliquam! Quidem, possimus.</p>
            <p>Quo nihil in doloremque, cupiditate quam sunt inventore, nesciunt asperiores provident deleniti, explicabo fugit maiores accusantium omnis sed amet? Quos optio sit delectus architecto vero accusantium tenetur, ducimus, nobis ad.</p>
            <p>Asperiores, commodi provident eum sed repellat ut recusandae optio est dicta praesentium facere culpa unde obcaecati eveniet laborum amet nulla distinctio consectetur, iste, ipsum, soluta. Explicabo, repudiandae nemo ab quasi.</p>


        </div>

    </div>
</div>