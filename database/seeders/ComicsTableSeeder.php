<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_comics = config('db_comics.comics');

        foreach($_comics as $_comic) {

            $comic_obj = new Comic();
        
            $comic_obj->title = $_comic['title'];
            $comic_obj->description = $_comic['description'];
            $comic_obj->thumb = $_comic['thumb'];
            $comic_obj->price = $_comic['price'];
            $comic_obj->series = $_comic['series'];
            $comic_obj->sale_date = $_comic['sale_date'];
            $comic_obj->type = $_comic['type'];
            // $comic_obj->artists = $_comic['artists'];
            // $comic_obj->writers = $_comic['writers'];

            $comic_obj->save();            
        } 


    }
}
