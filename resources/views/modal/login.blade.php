<!--login modal-->
<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h2 class="text-center">
                    <img src="/images/warning.png" class="img-circle"><br>
                    Войти
                </h2>
            </div>

            <div class="modal-body">
                {!! $errors->first() !!}

                <form method="POST" action="/auth/login" class="form col-md-12 center-block">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control input-lg" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Пароль">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block">Войти</button>
                        <span><a href="#registrationModal" role="button" data-toggle="modal">Регистрация</a></span>
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