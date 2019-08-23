<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary btn-block">Сохранить</button>
            </div>
        {{-- закрывает форму обновления страницы--}}
            <div class="card-body">
                    <form method="POST" action="#">
                        <button type="submit" class="btn btn-danger btn-block">Удалить</button>
                    </form>
            </div>
        </div>
    </div>
</div><br>
    <div class="row justify-content-center">
        <div class="com-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id">Номер статьи</label>
                        <input type="text" value="#" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="title">Создано</label>
                        <input type="text" value="#" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="title">Обновлено</label>
                        <input type="text" value="#" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="title">Опубликовано</label>
                        <input type="text" value="#" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="title">Удалено</label>
                        <input type="text" value="#" class="form-control" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>