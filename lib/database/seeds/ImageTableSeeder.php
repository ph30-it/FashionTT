<?php

use Illuminate\Database\Seeder;
use App\Models\Image;
class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Image::class, 100)->create();
    }
}
