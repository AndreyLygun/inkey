<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Article;
use App\Models\Photo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name'=>'Недвижимость']);
        Category::create(['name'=>'Услуги']);
        Category::create(['name'=>'Товары']);

        $phone = '89171234567';
        $a = Article::create(['phone'=>$phone, 'title'=>'Помещение в 100 метрах от м. "Павелецкая", 82 м²', 'description'=>'Сдается помещение внутри Садового кольца площадью 82 м2, в 100 метрах от м "Павелецкая". Располагается на цокольном этаже жилого дома, состоит из двух комнат - 33 м2 и 49 м2, отдельный вход со двора. Потолки 2.1 м. Высокий пешеходный трафик. Электричество 15 Квт. Идеально под пункт самовывоза интернет-магазина, бытовые услуги, салон оперативной печати. Кроме общепита. Прямая аренда на длительный срок. Возможно выделение двух парковочных мест во дворе дома. Предоставляются арендные каникулы.']);
        $id = $a->id;
        Photo::create(['article_id'=>$id, 'file'=>'1_1.jpg']);
        Photo::create(['article_id'=>$id, 'file'=>'1_2.jpg']);
        Photo::create(['article_id'=>$id, 'file'=>'1_3.jpg']);
        Photo::create(['article_id'=>$id, 'file'=>'1_4.jpg']);
        Photo::create(['article_id'=>$id, 'file'=>'1_5.jpg']);

        $a = Article::create(['phone'=>$phone, 'title'=>'Помещение в 200 метрах от м. "Каширское", 82 м²', 'description'=>'Какое-то описание']);

        // \App\Models\User::factory(10)->create();
    }
}
