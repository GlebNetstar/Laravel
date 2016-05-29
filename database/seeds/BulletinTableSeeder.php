<?php

use Illuminate\Database\Seeder;

use App\Bulletin;

class BulletinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bulletins')->delete();

        Bulletin::create(array(
            'user_id'   => 1,
            'title'     => 'Lorem ipsum dolor sit amet',
            'content'   => 'Nunc eu mi porta, vehicula sem quis, pretium dolor. Donec quis mattis dui. Nunc suscipit facilisis lorem, nec ultrices velit sodales non. Vivamus dignissim sodales tincidunt. Duis ut placerat nunc, ut fermentum quam. Aliquam tristique lacus fringilla lorem congue, et fringilla dui tincidunt. Nullam dui neque, pellentesque non odio et, sodales convallis risus. Curabitur et nisi fringilla, consectetur metus vitae, euismod est. Phasellus fermentum risus lacus, id pellentesque turpis mollis at.',
            'price'     => rand(100, 10000) / 100,
            'is_active' => true,
        ));

        Bulletin::create(array(
            'user_id'   => 1,
            'title'     => 'Lorem ipsum dolor sit amet',
            'content'   => 'Nunc eu mi porta, vehicula sem quis, pretium dolor. Donec quis mattis dui. Nunc suscipit facilisis lorem, nec ultrices velit sodales non. Vivamus dignissim sodales tincidunt. Duis ut placerat nunc, ut fermentum quam. Aliquam tristique lacus fringilla lorem congue, et fringilla dui tincidunt. Nullam dui neque, pellentesque non odio et, sodales convallis risus. Curabitur et nisi fringilla, consectetur metus vitae, euismod est. Phasellus fermentum risus lacus, id pellentesque turpis mollis at.',
            'price'     => rand(100, 10000) / 100,
            'is_active' => true,
        ));

        Bulletin::create(array(
            'user_id'   => 2,
            'title'     => 'Lorem ipsum dolor sit amet',
            'content'   => 'Nunc eu mi porta, vehicula sem quis, pretium dolor. Donec quis mattis dui. Nunc suscipit facilisis lorem, nec ultrices velit sodales non. Vivamus dignissim sodales tincidunt. Duis ut placerat nunc, ut fermentum quam. Aliquam tristique lacus fringilla lorem congue, et fringilla dui tincidunt. Nullam dui neque, pellentesque non odio et, sodales convallis risus. Curabitur et nisi fringilla, consectetur metus vitae, euismod est. Phasellus fermentum risus lacus, id pellentesque turpis mollis at.',
            'price'     => rand(100, 10000) / 100,
            'is_active' => true,
        ));

        Bulletin::create(array(
            'user_id'   => 2,
            'title'     => 'Lorem ipsum dolor sit amet',
            'content'   => 'Nunc eu mi porta, vehicula sem quis, pretium dolor. Donec quis mattis dui. Nunc suscipit facilisis lorem, nec ultrices velit sodales non. Vivamus dignissim sodales tincidunt. Duis ut placerat nunc, ut fermentum quam. Aliquam tristique lacus fringilla lorem congue, et fringilla dui tincidunt. Nullam dui neque, pellentesque non odio et, sodales convallis risus. Curabitur et nisi fringilla, consectetur metus vitae, euismod est. Phasellus fermentum risus lacus, id pellentesque turpis mollis at.',
            'price'     => rand(100, 10000) / 100,
            'is_active' => true,
        ));
    }
}
