<?php

declare(strict_types=1);

/** @var yii\web\View $this 
 */

use yii\helpers\Html;

$this->title = 'Магазин';
$this->params['meta_description'] = 'A high-performance PHP framework best for developing web applications. Fast, secure, and professional.';
$this->params['meta_keywords'] = 'yii, yii2, php, framework, web application, high-performance';
?>
<div class="site-index">
    <div class="m-5 p-5 text-center">
        <div class="card-body">
            <h1 class="m-2 card-title">Добро пожаловать в AmazingShop</h1>
            <p class="card-text">Здесь вы найдёте всё необходимое по выгодным ценам. Приятных покупок!</p>
        </div>
    </div>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="search-container">
                    <input type="text" class="form-control search-input" placeholder="Search...">
                    <i class="fas fa-search search-icon"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-sm-7 col-lg-4 col-md-6">
                <div class="card" style="padding: 20px; margin: 20px; width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title"><?= $product->name ?></h4>
                        <p class="card-text"><?= $product->ShortDescription ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary">Купить</a>
                            <p class="card-text"><?= $product->price ?> $</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>