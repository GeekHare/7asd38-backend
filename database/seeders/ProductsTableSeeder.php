<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::query()->truncate();
        Product::query()->insert([
            [
                'title' => 'Дом «Клевер» в Никола-Ленивце',
                'description' => '«Никола-Ленивец» — это огромный арт-парк в Калужской области с потрясающими арт-объектами размерами с футбольные поля и девятиэтажные дома.',
                'price' => 7500,
                'main_photo_storage_link' => '/products/images/1.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Коттеджи «Черника»',
                'description' => 'Комплекс коттеджей «Черника» расположен рядом с Игорой в Приозерском районе (77 км от центра Санкт-Петербурга). Это очень уютные и в то же время стильные домики с террасами в тихом месте, где есть все необходимое.',
                'price' => 5400,
                'main_photo_storage_link' => '/products/images/2.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Арт-усадьба «Веретьево»',
                'description' => '«Веретьево» — это расположенный в 100 км от Москвы по Дмитровскому шоссе пионерлагерь для взрослых. Дом вожатых, дом пионеров, дом дружбы — все это названия различных корпусов, которые остались здесь со времен существования настоящего пионерского лагеря.',
                'price' => 10100,
                'main_photo_storage_link' => '/products/images/3.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Эко-капсула «Орбита» в загородном клубе «Гуляй Город»',
                'description' => 'В 100 км от Москвы, на берегу Оки расположился загородный клуб «Гуляй Город». Для проживания здесь можно выбрать необычную капсулу «Орбита» с панорамным остеклением и удивительным видом на лес и реку.',
                'price' => 9800,
                'main_photo_storage_link' => '/products/images/4.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Дом на дереве в комплексе «Гнездо»',
                'description' => 'Уютный дом на шести соснах находится совсем недалеко от Тюмени, на берегу реки Пышма. Он расположен на территории природно-реабилитационного комплекса «Гнездо».',
                'price' => 15200,
                'main_photo_storage_link' => '/products/images/5.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'База отдыха «Медвежий угол»',
                'description' => 'Побывать на краю света, познакомиться с загадочным Кольским полуостровом, почувствовать, что значит настоящее уединение и звенящая тишина, увидеть потрясающее северное сияние — все это доступно для гостей базы отдыха «Медвежий угол».',
                'price' => 11400,
                'main_photo_storage_link' => '/products/images/6.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Мини-отель «Таежный»',
                'description' => 'Мини-отель «Таежный» похож на сказочную деревню, затерянную в волшебном лесу: крыши деревянных домов, поросшие мхом, сверкающее на солнце озеро, длинные тропинки, утопающие в цветах. И оказаться в этом удивительном уголке очень просто: он находится в 50 км от центра Москвы по Новорязанскому шоссе.',
                'price' => 8100,
                'main_photo_storage_link' => '/products/images/7.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
