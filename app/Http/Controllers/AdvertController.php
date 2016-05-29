<?php namespace App\Http\Controllers;

use App\{Bulletin, Offer};
use Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;

use Illuminate\Http\Request;


class AdvertController extends Controller {
    public function index($my = null)
    {
        if ($my) {
            $builder = Bulletin::where('user_id', \Auth::user()->id);
        } else {
            $builder = Bulletin::where('is_active', true);
        }

        $adverts = $builder->orderBy('created_at','desc')->get();

        return view('dashboard')->withAdverts($adverts)->withMy(isset($my));
    }

    public function create(Request $request)
    {
        $advert = new Bulletin();

        $advert->user_id   = \Auth::user()->id;
        $advert->title     = $request->get('title');
        $advert->content   = $request->get('content');
        $advert->price     = $request->get('price');
        $advert->is_active = true;

        $advert->save();

        if ($request->hasFile('image')) {
            $imageName = $advert->id . '.' . $request->file('image')->getClientOriginalExtension();

            $request->file('image')->move(base_path() . '/public/images/', $imageName);

            $advert->image = $imageName;

            $advert->save();
        }

        \Session::flash('flash_message','Объявление добавлено');

        return redirect('/adverts/list');
    }

    public function offer(Request $request, $id)
    {
        $advert = Bulletin::find($id);

        if (!$advert || !$advert->is_active) {
            return abort(404);
        }

        $offer = new Offer();

        $offer->user_id   = \Auth::user()->id;
        $offer->advert_id = $id;
        $offer->title     = $request->get('title');
        $offer->content   = $request->get('content');
        $offer->price     = $request->get('price');

        $offer->save();

        \Session::flash('flash_message','Предложение добавлено');

        return redirect('/adverts/list');
    }

    public function accept(Request $request, $id)
    {
        $offer = Offer::find($id);

        if (!$offer || !$offer->advert->isOwn() || $offer->status != null) {
            return abort(404);
        }

        $offer->status = 1;

        $offer->save();

        \Session::flash('flash_message','Предложение принято');

        return redirect('/adverts/list');
    }
}