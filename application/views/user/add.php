<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Вход</div>
        <div class="card-body">
            <form action="/user/add" method="post">
                <div class="form-group">
                    <label>Имя пользователя</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control" type="text" name="e-mail">
                </div>
                <div class="form-group">
                    <label>Задача</label>
                    <textarea class="form-control" rows="3" name="text"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Добавить</button>
            </form>
        </div>
    </div>
</div>