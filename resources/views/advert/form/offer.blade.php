<div class="panel-body">
    <div class="well">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/advert/' . ((string) $advert->id) . '/offer') }}">
            <h4>Ответить</h4>

            {!! csrf_field() !!}

            <div class="form-group">
                <input type="text" name="title" value="{{ old('title') }}" class="form-control input-lg" placeholder="Заголовок">
            </div>

            <div class="form-group">
                <textarea name="content" class="form-control input-lg" placeholder="Содержание">{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <input type="text" name="price" value="{{ old('price') }}" class="form-control input-lg" placeholder="Цена">
            </div>

            <button class="btn btn-success pull-right" type="submit">Отправить</button>

            <ul class="list-inline">
                <li><a href="#" onclick="return false;"><i class="glyphicon glyphicon-align-left"></i></a></li>
                <li><a href="#" onclick="return false;"><i class="glyphicon glyphicon-align-center"></i></a></li>
                <li><a href="#" onclick="return false;"><i class="glyphicon glyphicon-align-right"></i></a></li>
            </ul>
        </form>
    </div>
</div>