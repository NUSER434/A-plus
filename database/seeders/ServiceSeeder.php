<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            // Визитки
            [
            'category' => 'Визитки', 
            'name' => 'Визитки - Квадратные', 
            'description' => 'Квадратные визитки — стильное решение для вашего бизнеса. Идеально подходят для компаний, которые ценят индивидуальность.',
            'image' => 'https://stilo.ru/wp-content/uploads/2017/09/%D0%BA%D0%B2%D0%B0%D0%B4%D1%80%D0%B0%D1%82-2.jpeg',
            ],
            [
            'category' => 'Визитки', 
            'name' => 'Визитки - Дешевые', 
            'description' => 'Экономичный вариант визиток для массового распространения. Подходит для стартапов и небольших компаний.',
            'image' => 'https://sun9-43.userapi.com/impg/7dDCRA9umhK3xhG1sHmpfO2O62vSsW0oiAsUiA/UpBB_Rse5Y8.jpg?size=1536x1920&quality=96&sign=dff805b83e91a1217879e8814db51559&type=album'
            ],
            [
                'category' => 'Визитки', 
            'name' => 'Визитки - с ламинацией', 
            'image' => 'https://dpl-print.ru/upload/medialibrary/16f/16fa9e51388ba0e6b774365dd298cffd.jpg'
            ],

            // Листовая полиграфия
            ['category' => 'Листовая полиграфия', 'name' => 'Печать флаеров', 'image' => 'https://d-print24.ru/image/catalog/1920-ulotki.jpg'],
            ['category' => 'Листовая полиграфия', 'name' => 'Печать бирок', 'image' => 'https://sun9-54.userapi.com/impg/kzIWoFaJ3baMAFLvDGv01MQlywSSp2AshGRHkg/QloM4xA24BY.jpg?size=1722x2160&quality=96&sign=901979631f27aaadd0e8d3f0f01ecd54&type=album'],
            ['category' => 'Листовая полиграфия', 'name' => 'Печать билетов', 'image' => 'https://th.bing.com/th/id/OIP.vAmATOMaOs3ryKvKWaVtNAHaHa?rs=1&pid=ImgDetMain'],
            ['category' => 'Листовая полиграфия', 'name' => 'Печать бейджей', 'image' => 'https://www.badge.ru/inc/articles/efec5.jpg'],

            // Одежда
            ['category' => 'Одежда', 'name' => 'Футболки', 'image' => 'https://sun9-4.userapi.com/impg/wWgSuwHEHEJQDunkLOZvdLCdUZ94FxVZwB-Mcw/IN585wyb-uQ.jpg?size=1080x1080&quality=96&sign=938b876a1e2dcfc31c9c07064311a325&type=album'],
            ['category' => 'Одежда', 'name' => 'Свитшоты', 'image' => 'https://unifashion.ru/wp-content/uploads/2022/11/005new.png'],

            // Календари
            ['category' => 'Календари', 'name' => 'Настольные календари', 'image' => 'https://static.tildacdn.com/tild6561-3535-4537-b530-336665383162/calendarunderorder_1.jpg'],
            ['category' => 'Календари', 'name' => 'Карманные календари', 'image' => 'https://static.tildacdn.com/tild3862-3261-4633-b261-613763353961/cAnp8gp9jt02.jpg'],
            ['category' => 'Календари', 'name' => 'Квадратные календари', 'image' => 'https://tisso.ru/images/production/calendars/quarter_calendars/quarter_calendars_gal_3.jpg'],

            // Наклейки
            ['category' => 'Наклейки', 'name' => 'Стикерпаки', 'image' => 'https://th.bing.com/th/id/R.b2a0ebefdf252367d4cd379fe4b909a4?rik=PdjdfqGe%2fuLhEQ&pid=ImgRaw&r=0'],

            // Многостраничная полиграфия
            ['category' => 'Многостраничная полиграфия', 'name' => 'Печать блокнотов', 'image' => 'https://avatars.mds.yandex.net/get-mpic/6340948/img_id4918407281844610368.jpeg/orig'],
            ['category' => 'Многостраничная полиграфия', 'name' => 'Печать каталогов', 'image' => 'https://th.bing.com/th/id/OIP.kFc9uRRMKZqlHMoGg6jAAwHaHa?rs=1&pid=ImgDetMain'],
        ];

        foreach ($services as $serviceData) {
            Service::create([
                'category' => $serviceData['category'],
                'name' => $serviceData['name'],
                'slug' => Str::slug($serviceData['name']), // Генерация slug
                'image' => $serviceData['image'],
                'description' => $serviceData['description'] ?? null, // Добавлено поле description
            ]);
        }
    }
}
