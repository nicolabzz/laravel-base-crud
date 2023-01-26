<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('comics');
        foreach ($data as $item) {
            $book = new Comic();
            $book->title = $item['title'];
            $book->description = $item['description'];
            $book->thumb = $item['thumb'];
            $book->price = $item['price'];
            $book->series = $item['series'];
            $book->sale_date = $item['sale_date'];
            $book->type = $item['type'];
            $book->save();
        }
    }
}
