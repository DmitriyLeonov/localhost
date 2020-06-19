<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/user/edit/<?php echo $data['id']; ?>" method="post" >
                            <div class="form-group">
                                <label>Имя пользователя</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['username'], ENT_QUOTES); ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['email'],ENT_QUOTES); ?>" name="e-mail">
                            </div>
                            <div class="form-group">
                                <label>Задача</label>
                                <textarea class="form-control" rows="3" name="text"><?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?></textarea>
                            </div>
                            <label>Выполнение</label>
                            <input type="checkbox" value=1 name="iscomplete" <?php if($data['iscomplete'] != 0){ echo 'checked';} ?>>
                            <button type="submit" class="btn btn-primary btn-block">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>