<?php

use Illuminate\Database\Seeder;

use App\Offer;

class OfferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->delete();

        Offer::create(array(
            'user_id'   => 1,
            'advert_id' => 1,
            'title'     => 'Nulla posuere, dolor laoreet cursus lobortis',
            'content'   => 'Morbi euismod, tellus tincidunt lobortis aliquet, felis diam dapibus mi, vel bibendum felis justo sit amet nulla. Praesent viverra mi ex. Vestibulum ornare metus ac augue mollis, sed ultricies lacus dignissim. Mauris lectus odio, dictum a faucibus eu, bibendum vitae ligula. Ut facilisis imperdiet lacinia. Quisque malesuada sem in maximus porta. Vestibulum gravida scelerisque purus vitae aliquam. Aenean mattis id quam eget interdum. Ut eleifend pharetra nulla sed ultrices.',
            'price'     => rand(100, 10000) / 100,
        ));

        Offer::create(array(
            'user_id'   => 2,
            'advert_id' => 1,
            'title'     => 'Nulla posuere, dolor laoreet cursus lobortis',
            'content'   => 'Morbi euismod, tellus tincidunt lobortis aliquet, felis diam dapibus mi, vel bibendum felis justo sit amet nulla. Praesent viverra mi ex. Vestibulum ornare metus ac augue mollis, sed ultricies lacus dignissim. Mauris lectus odio, dictum a faucibus eu, bibendum vitae ligula. Ut facilisis imperdiet lacinia. Quisque malesuada sem in maximus porta. Vestibulum gravida scelerisque purus vitae aliquam. Aenean mattis id quam eget interdum. Ut eleifend pharetra nulla sed ultrices.',
            'price'     => rand(100, 10000) / 100,
        ));

        Offer::create(array(
            'user_id'   => 1,
            'advert_id' => 2,
            'title'     => 'Nulla posuere, dolor laoreet cursus lobortis',
            'content'   => 'Morbi euismod, tellus tincidunt lobortis aliquet, felis diam dapibus mi, vel bibendum felis justo sit amet nulla. Praesent viverra mi ex. Vestibulum ornare metus ac augue mollis, sed ultricies lacus dignissim. Mauris lectus odio, dictum a faucibus eu, bibendum vitae ligula. Ut facilisis imperdiet lacinia. Quisque malesuada sem in maximus porta. Vestibulum gravida scelerisque purus vitae aliquam. Aenean mattis id quam eget interdum. Ut eleifend pharetra nulla sed ultrices.',
            'price'     => rand(100, 10000) / 100,
        ));

        Offer::create(array(
            'user_id'   => 2,
            'advert_id' => 2,
            'title'     => 'Nulla posuere, dolor laoreet cursus lobortis',
            'content'   => 'Morbi euismod, tellus tincidunt lobortis aliquet, felis diam dapibus mi, vel bibendum felis justo sit amet nulla. Praesent viverra mi ex. Vestibulum ornare metus ac augue mollis, sed ultricies lacus dignissim. Mauris lectus odio, dictum a faucibus eu, bibendum vitae ligula. Ut facilisis imperdiet lacinia. Quisque malesuada sem in maximus porta. Vestibulum gravida scelerisque purus vitae aliquam. Aenean mattis id quam eget interdum. Ut eleifend pharetra nulla sed ultrices.',
            'price'     => rand(100, 10000) / 100,
        ));

        Offer::create(array(
            'user_id'   => 2,
            'advert_id' => 3,
            'title'     => 'Nulla posuere, dolor laoreet cursus lobortis',
            'content'   => 'Morbi euismod, tellus tincidunt lobortis aliquet, felis diam dapibus mi, vel bibendum felis justo sit amet nulla. Praesent viverra mi ex. Vestibulum ornare metus ac augue mollis, sed ultricies lacus dignissim. Mauris lectus odio, dictum a faucibus eu, bibendum vitae ligula. Ut facilisis imperdiet lacinia. Quisque malesuada sem in maximus porta. Vestibulum gravida scelerisque purus vitae aliquam. Aenean mattis id quam eget interdum. Ut eleifend pharetra nulla sed ultrices.',
            'price'     => rand(100, 10000) / 100,
        ));

        Offer::create(array(
            'user_id'   => 1,
            'advert_id' => 3,
            'title'     => 'Nulla posuere, dolor laoreet cursus lobortis',
            'content'   => 'Morbi euismod, tellus tincidunt lobortis aliquet, felis diam dapibus mi, vel bibendum felis justo sit amet nulla. Praesent viverra mi ex. Vestibulum ornare metus ac augue mollis, sed ultricies lacus dignissim. Mauris lectus odio, dictum a faucibus eu, bibendum vitae ligula. Ut facilisis imperdiet lacinia. Quisque malesuada sem in maximus porta. Vestibulum gravida scelerisque purus vitae aliquam. Aenean mattis id quam eget interdum. Ut eleifend pharetra nulla sed ultrices.',
            'price'     => rand(100, 10000) / 100,
        ));

        Offer::create(array(
            'user_id'   => 1,
            'advert_id' => 4,
            'title'     => 'Nulla posuere, dolor laoreet cursus lobortis',
            'content'   => 'Morbi euismod, tellus tincidunt lobortis aliquet, felis diam dapibus mi, vel bibendum felis justo sit amet nulla. Praesent viverra mi ex. Vestibulum ornare metus ac augue mollis, sed ultricies lacus dignissim. Mauris lectus odio, dictum a faucibus eu, bibendum vitae ligula. Ut facilisis imperdiet lacinia. Quisque malesuada sem in maximus porta. Vestibulum gravida scelerisque purus vitae aliquam. Aenean mattis id quam eget interdum. Ut eleifend pharetra nulla sed ultrices.',
            'price'     => rand(100, 10000) / 100,
        ));

        Offer::create(array(
            'user_id'   => 2,
            'advert_id' => 4,
            'title'     => 'Nulla posuere, dolor laoreet cursus lobortis',
            'content'   => 'Morbi euismod, tellus tincidunt lobortis aliquet, felis diam dapibus mi, vel bibendum felis justo sit amet nulla. Praesent viverra mi ex. Vestibulum ornare metus ac augue mollis, sed ultricies lacus dignissim. Mauris lectus odio, dictum a faucibus eu, bibendum vitae ligula. Ut facilisis imperdiet lacinia. Quisque malesuada sem in maximus porta. Vestibulum gravida scelerisque purus vitae aliquam. Aenean mattis id quam eget interdum. Ut eleifend pharetra nulla sed ultrices.',
            'price'     => rand(100, 10000) / 100,
        ));
    }
}
