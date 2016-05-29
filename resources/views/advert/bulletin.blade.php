<div class="col-md-6 col-sm-6">
    <div class="panel panel-default">
        <div class="panel-heading"><a href="#" class="pull-right">Объявление</a> <h4>{{ $advert->title }}</h4></div>
        <div class="panel-body">
            <p>
                {{ $advert->content }}
            </p>

            <p>
                <img class="media-object" src="@if ($advert->image) /images/{{ $advert->image }} @else http://lorempixel.com/200/200/sports/i4-{{ $i }} @endif" width="200" height="200">
            </p>

            <p>
                Стоимость: <strong>{{ $advert->price }}</strong>
            </p>

            <hr>

            <div class="well well-sm">
                <div class="media">
                    <a class="thumbnail pull-left" href="#">
                        <img class="media-object" src="http://lorempixel.com/100/100/animals/i1-{{ $i }}/">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $advert->user->name }}</h4>
                        <p><span class="label label-info">{{ rand(1, 100) }} photos</span> <span class="label label-primary">{{ rand(1, 100) }} followers</span></p>
                        <p>
                            <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Message</a>
                            <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>