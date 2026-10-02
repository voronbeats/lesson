<?php

use yii\bootstrap5\LinkPager;
use yii\helpers\Html;
?>
<?php foreach($dataProvider->getModels() as $product): ?>

    <div class="col-sm-7 col-lg-4 col-md-6">
        <div class="card" style="padding: 20px; margin: 20px; width: 18rem;">

            <?= Html::img(
                Yii::getAlias($product->image),
                [
                    'class' => 'mb-4',
                    'height' => 40,
                ]
            ) ?>

            <div class="card-body">

                <h4 class="card-title">
                    <?= Html::encode($product->name) ?>
                </h4>

                <p class="card-text">
                    <?= Html::encode($product->ShortDescription) ?>
                </p>

                <div class="d-flex justify-content-between align-items-center">

                    <a href="#" class="btn btn-primary">
                        Купить
                    </a>

                    <p class="card-text">
                        <?= Html::encode($product->price) ?> $
                    </p>

                </div>

            </div>
        </div>
        
    </div>

<?php endforeach; ?>
<?= LinkPager::widget([
            'pagination' => $dataProvider->pagination,
            'options' => [
                'class' => 'pagination justify-content-center',
            ],
            'linkOptions' => [
                'class' => 'page-link',
            ],
        ]) ?>