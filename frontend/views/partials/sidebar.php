<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">

        <aside class="widget">
            <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>
            <?php /** @var Article $popular */

            use app\models\Article;
            use yii\helpers\Url;

            foreach($popular as $article): ?>
                <div class="popular-post">


                    <a href="<?php echo Url::toRoute(['site/view','id' => $article->id]);?>" class="popular-img"><img src="<?= $article->getImage(); ?>" alt="">
                        <div class="p-overlay"></div>
                    </a>

                    <div class="p-content">
                        <a href="<?php echo Url::toRoute(['site/view','id' => $article->id]);?>" class="text-uppercase"><?= $article->title ?></a>
                        <span class="p-date"><?= $article->getDate() ?></span>

                    </div>
                </div>
            <?php endforeach; ?>
        </aside>
        <aside class="widget pos-padding">
            <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

            <div class="thumb-latest-posts">


                <div class="media">

                    <?php /** @var Article $recent */
                    foreach($recent as $article): ?>
                        <div class="media-left">
                            <a href="<?php echo Url::toRoute(['site/view','id' => $article->id]);?>" class="popular-img"><img src="<?= $article->getImage(); ?>" alt="">
                                <div class="p-overlay"></div>
                            </a>
                        </div>
                        <div class="p-content">
                            <a href="<?php echo Url::toRoute(['site/view','id' => $article->id]);?>" class="text-uppercase"><?= $article->title ?></a>
                            <span class="p-date"><?= $article->getDate() ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </aside>
        <aside class="widget border pos-padding">
            <h3 class="widget-title text-uppercase text-center">Categories</h3>
            <ul>
                <?php /** @var Article $categories */
                foreach($categories as $category): ?>
                    <li>
                        <a href="<?= Url::toRoute(['site/view', 'id' => $article->id]) ?>"><?= $category->title ?></a>
                        <span class="post-count pull-right"> (<?= $category->getArticlesCount(); ?>)</span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </div>
</div>
