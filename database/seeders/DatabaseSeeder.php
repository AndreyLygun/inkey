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

        $phone = '89588087121';
        $a = Article::create([  'phone'=>$phone,
                                'title'=>'Помещение в 100 метрах от м. "Павелецкая", 82 кв.м',
                                'photo'=>'1_0.jpg',
                                'description'=>'Сдается помещение внутри Садового кольца площадью 82 м2, в 100 метрах от м "Павелецкая". Располагается на цокольном этаже жилого дома, состоит из двух комнат - 33 м2 и 49 м2, отдельный вход со двора. Потолки 2.1 м. Высокий пешеходный трафик. Электричество 15 Квт. Идеально под пункт самовывоза интернет-магазина, бытовые услуги, салон оперативной печати. Кроме общепита. Прямая аренда на длительный срок. Возможно выделение двух парковочных мест во дворе дома. Предоставляются арендные каникулы.']);
        $id = $a->id;
        Photo::create(['article_id'=>$id, 'file'=>'1_1.jpg']);
        Photo::create(['article_id'=>$id, 'file'=>'1_2.jpg']);
        Photo::create(['article_id'=>$id, 'file'=>'1_3.jpg']);
        Photo::create(['article_id'=>$id, 'file'=>'1_4.jpg']);
        Photo::create(['article_id'=>$id, 'file'=>'1_5.jpg']);

        $a = Article::create([  'phone'=>$phone,
                                'title'=>'Офис, 16 кв.м (Марьино)',
                                'photo'=>'2_0.jpg',
                                'description'=>'Сдам светлый, уютный офис с окном. Офис 16 кв.м - 15000р/мес.(УСН) находящийся в Жилом доме на 1 этаже (Отдельный вход). Офис меблирован (Фото актуальны). Прямой договор! Предоставляю Юридический адрес по 23 ИФНС (не массовый). Почтовое обслуживание. Звоните! Покажу помещение оперативно!']);
        $id = $a->id;
        Photo::create(['article_id'=>$id, 'file'=>'2_1.png']);
        Photo::create(['article_id'=>$id, 'file'=>'2_2.png']);
        Photo::create(['article_id'=>$id, 'file'=>'2_3.png']);
        // \App\Models\User::factory(10)->create();
    }
}
