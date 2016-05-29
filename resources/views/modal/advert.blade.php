<!--advert modal-->
<div id="advertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h2 class="text-center">
                    Новое объявление
                </h2>
            </div>

            <div class="modal-body">
                <form method="POST" action="/advert/new" enctype="multipart/form-data" class="form col-md-12 center-block">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control input-lg" placeholder="Заголовок">
                    </div>

                    <div class="form-group">
                        <textarea name="content" class="form-control input-lg" placeholder="Содержание">{{ old('content') }}</textarea>
                    </div>

                    <div class="form-group">
                        <input type="file" name="image" placeholder="Изображение">
                    </div>

                    <div class="form-group">
                        <input type="text" name="price" value="{{ old('price') }}" class="form-control input-lg" placeholder="Цена">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Отправить</button>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <div class="col-md-12">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
                </div>
            </div>
        </div>
    </div>
</div>