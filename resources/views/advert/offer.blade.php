<div class="panel-body">
    <img src="http://lorempixel.com/100/100/animals/i2-{{ $i }}-{{ $j }}" class="img-circle pull-right"> <a href="#">{{ $offer->title }} @ {{ $offer->user->name }}</a>

    <div class="clearfix"></div>

    <p>
        {{ $offer->content }}
    </p>

    <p>
        Стоимость: <strong>{{ $offer->price }}</strong>
    </p>

    @if ($advert->isOwn())
        <div class="row">
            <div class="col-md-6">
                @if ($offer->status == 1)
                    <span class="label label-success">Принят</span>
                @elseif ($offer->status == 2)
                    <span class="label label-default">Отменен</span>
                @else
                    <span class="label label-primary">Новый</span>
                @endif
            </div>

            @if ($offer->status == null)
                <div class="col-md-6">
                    <a class="btn btn-info pull-right" href="{{ url('/advert/' . ((string) $offer->id) . '/accept') }}">Принять</a>
                </div>
            @endif
        </div>
    @endif
</div>

<hr>