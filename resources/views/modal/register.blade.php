<!--registration modal-->
<div id="registrationModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h2 class="text-center">
                    <img src="http://lorempixel.com/100/100/animals/i3-reg" class="img-circle"><br>
                    Зарегистрироваться
                </h2>
            </div>

            <div class="modal-body">
                {!! $errors->first() !!}

                <form method="POST" action="/auth/register" class="form col-md-12 center-block">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control input-lg" placeholder="Имя">
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control input-lg" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control input-lg" placeholder="Пароль">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control input-lg" placeholder="Подтверждение пароля">
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