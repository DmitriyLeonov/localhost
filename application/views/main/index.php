<header class="masthead" style="background-image: url('/public/images/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (empty($task)): ?>
                <p>Список заданий пуст</p>
            <?php else: ?>
                <?php foreach ($task as $val): ?>
                    <div class="post-preview">
                        <a href="/post/<?php echo $val['Id']; ?>">
                            <h2 class="post-title"><?php echo htmlspecialchars($val['UserName'], ENT_QUOTES); ?></h2>
                            <h5 class="post-subtitle"><?php echo htmlspecialchars($val['Text'], ENT_QUOTES); ?></h5>
                        </a>
                        <p class="post-meta">Идентфикатор этого поста <?php echo $val['Id']; ?></p>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <div class="clearfix">
                    <?php //echo $pagination; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>