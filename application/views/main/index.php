
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (empty($task)): ?>
                <p>Список заданий пуст</p>
            <?php else: ?>
                <?php foreach ($task as $val): ?>
                    <div class="post-preview">
                        <a href="/user/edit/<?php echo $val['id']; ?>">
                            <h2 class="post-title"><?php echo htmlspecialchars($val['username'], ENT_QUOTES); ?></h2>
                            <h5 class="post-subtitle"><?php echo htmlspecialchars($val['text'], ENT_QUOTES); ?></h5>
                        </a>
                       
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