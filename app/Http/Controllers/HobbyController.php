<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index(){
        $arrProduct = [
            [
                'name' => 'Xiangling',
                'rarity' => 'R',
                'price' => '100.000',
                'element' => 'Pyro',
                'desc' => "A talented chef from Liyue who is a skilled user of pyro-based attacks. She is known for her passion for cooking and her friendly personality. She is also a formidable fighter, capable of using her cooking utensils as weapons.",
                'img' => 'Xiangling.webp'
            ],
            [
                'name' => 'Razor',
                'rarity' => 'R',
                'price' => '100.000',
                'element' => 'Electro',
                'desc' => "A young man from Wolvendom who is a skilled user of electro-based attacks. He is known for his loyalty to his pack and his love of nature. He is also a powerful fighter, capable of transforming into a wolf to deal massive amounts of damage.",
                'img' => 'Razor.webp'
            ],
            [
                'name' => 'Barbara',
                'rarity' => 'R',
                'price' => '100.000',
                'element' => 'Hydro',
                'desc' => "A kind-hearted nun from Mondstadt who is a skilled user of hydro-based attacks. She is known for her healing abilities and her devotion to her faith. She is also a talented singer, capable of using her voice to boost the morale of her allies.",
                'img' => 'Barbara.webp'
            ],
            [
                'name' => 'Sucrose',
                'rarity' => 'R',
                'price' => '100.000',
                'element' => 'Anemo',
                'desc' => "An alchemist from Mondstadt who is a skilled user of anemo-based attacks. She is known for her intelligence and her love of research. She is also a powerful support character, capable of boosting the effectiveness of her allies' attacks.",
                'img' => 'Sucrose.webp'
            ],
            [
                'name' => 'Noelle',
                'rarity' => 'R',
                'price' => '100.000',
                'element' => 'Geo',
                'desc' => "A maid from Mondstadt who is a skilled user of geo-based attacks. She is known for her dedication to her work and her kind personality. She is also a powerful healer, capable of restoring the health of her allies.",
                'img' => 'Noelle.webp'
            ],
            [
                'name' => 'Fischl',
                'rarity' => 'SR',
                'price' => '300.000',
                'element' => 'Electro',
                'desc' => "A young aristocrat from Mondstadt who is a skilled user of electro-based attacks. She is known for her eccentric personality and her love of all things 'princely'. She is also a formidable fighter, capable of summoning a thunderbird to strike down her enemies.",
                'img' => 'Fischl.webp'
            ],
            [
                'name' => 'Chongyun',
                'rarity' => 'SR',
                'price' => '300.000',
                'element' => 'Cryo',
                'desc' => "A young exorcist from Liyue who is a skilled user of cryo-based attacks. He is known for his serious personality and his dedication to his work. He is also a powerful warrior, capable of imbuing his attacks with cryo energy to deal massive amounts of damage.",
                'img' => 'Chongyun.webp'
            ],
            [
                'name' => 'Xinyan',
                'rarity' => 'SR',
                'price' => '300.000',
                'element' => 'Pyro',
                'desc' => "A rock 'n' roll musician from Liyue who is a skilled user of pyro-based attacks. She is known for her rebellious personality and her love of music. She is also a capable fighter, capable of using her guitar to create powerful shockwaves that deal damage to her enemies.",
                'img' => 'Xinyan.webp'
            ],
            [
                'name' => 'Beidou',
                'rarity' => 'SR',
                'price' => '300.000',
                'element' => 'Electro',
                'desc' => "The captain of the Crux, a group of pirates based in Liyue. She is a skilled user of electro-based attacks and is known for her fearlessness and her determination. She is also a powerful fighter, capable of unleashing a devastating counterattack that can stagger even the strongest enemies.",
                'img' => 'Beidou.webp'
            ],
            [
                'name' => 'Bennett',
                'rarity' => 'SR',
                'price' => '300.000',
                'element' => 'Pyro',
                'desc' => "A young adventurer from Mondstadt who is a skilled user of pyro-based attacks. He is known for his bad luck and his clumsiness, but he never gives up no matter how tough the situation. He is also a powerful support character, capable of boosting the attack power and speed of his allies.",
                'img' => 'Bennett.webp'
            ],
            [
                'name' => 'Mona',
                'rarity' => 'SR',
                'price' => '300.000',
                'element' => 'Hydro',
                'desc' => "A fortune teller from Mondstadt who is a skilled user of hydro-based attacks. She is known for her mysterious personality and her love of money. She is also a powerful fighter, capable of summoning a giant water illusion to deal damage to her enemies.",
                'img' => 'Mona.webp'
            ],
            [
                'name' => 'Diluc',
                'rarity' => 'SSR',
                'price' => '500.000',
                'element' => 'Pyro',
                'desc' => "The owner of the Dawn Winery, a famous winery in Mondstadt. He is a skilled user of pyro-based attacks and is known for his cool and aloof personality. He is also a powerful fighter, capable of imbuing his attacks with pyro energy to deal massive amounts of damage.",
                'img' => 'Diluc.webp'
            ],
            [
                'name' => 'Keqing',
                'rarity' => 'SSR',
                'price' => '500.000',
                'element' => 'Electro',
                'desc' => "The Yuheng of the Liyue Qixing, a group of seven influential people in Liyue. She is a skilled user of electro-based attacks and is known for her sharp mind and her strong sense of justice. She is also a powerful fighter, capable of using her sword to strike down her enemies with lightning speed.",
                'img' => 'Keqing.webp'
            ],
            [
                'name' => 'Qiqi',
                'rarity' => 'SSR',
                'price' => '500.000',
                'element' => 'Cryo',
                'desc' => "An apprentice and herb gatherer at the Bubu Pharmacy in Liyue. She is a skilled user of cryo-based attacks and is known for her kind personality and her love of helping others. She is also a powerful healer, capable of reviving fallen allies and restoring their health.",
                'img' => 'Qiqi.webp'
            ],
            [
                'name' => 'Venti',
                'rarity' => 'SSR',
                'price' => '500.000',
                'element' => 'Anemo',
                'desc' => "A bard from Mondstadt who is a skilled user of anemo-based attacks. He is known for his carefree personality and his love of music. He is also a powerful fighter, capable of using his bow to create gusts of wind that can lift his enemies into the air and deal damage to them.",
                'img' => 'Venti.webp'
            ]
        ];
        return view('hobby', compact('arrProduct'));
    }

    public function detail($name){
        $arrProduct = [
            [
                'name' => 'Xiangling',
                'rarity' => 'R',
                'price' => '100.000',
                'element' => 'Pyro',
                'desc' => "A talented chef from Liyue who is a skilled user of pyro-based attacks. She is known for her passion for cooking and her friendly personality. She is also a formidable fighter, capable of using her cooking utensils as weapons.",
                'img' => 'Xiangling.webp'
            ],
            [
                'name' => 'Razor',
                'rarity' => 'R',
                'price' => '100.000',
                'element' => 'Electro',
                'desc' => "A young man from Wolvendom who is a skilled user of electro-based attacks. He is known for his loyalty to his pack and his love of nature. He is also a powerful fighter, capable of transforming into a wolf to deal massive amounts of damage.",
                'img' => 'Razor.webp'
            ],
            [
                'name' => 'Barbara',
                'rarity' => 'R',
                'price' => '100.000',
                'element' => 'Hydro',
                'desc' => "A kind-hearted nun from Mondstadt who is a skilled user of hydro-based attacks. She is known for her healing abilities and her devotion to her faith. She is also a talented singer, capable of using her voice to boost the morale of her allies.",
                'img' => 'Barbara.webp'
            ],
            [
                'name' => 'Sucrose',
                'rarity' => 'R',
                'price' => '100.000',
                'element' => 'Anemo',
                'desc' => "An alchemist from Mondstadt who is a skilled user of anemo-based attacks. She is known for her intelligence and her love of research. She is also a powerful support character, capable of boosting the effectiveness of her allies' attacks.",
                'img' => 'Sucrose.webp'
            ],
            [
                'name' => 'Noelle',
                'rarity' => 'R',
                'price' => '100.000',
                'element' => 'Geo',
                'desc' => "A maid from Mondstadt who is a skilled user of geo-based attacks. She is known for her dedication to her work and her kind personality. She is also a powerful healer, capable of restoring the health of her allies.",
                'img' => 'Noelle.webp'
            ],
            [
                'name' => 'Fischl',
                'rarity' => 'SR',
                'price' => '300.000',
                'element' => 'Electro',
                'desc' => "A young aristocrat from Mondstadt who is a skilled user of electro-based attacks. She is known for her eccentric personality and her love of all things 'princely'. She is also a formidable fighter, capable of summoning a thunderbird to strike down her enemies.",
                'img' => 'Fischl.webp'
            ],
            [
                'name' => 'Chongyun',
                'rarity' => 'SR',
                'price' => '300.000',
                'element' => 'Cryo',
                'desc' => "A young exorcist from Liyue who is a skilled user of cryo-based attacks. He is known for his serious personality and his dedication to his work. He is also a powerful warrior, capable of imbuing his attacks with cryo energy to deal massive amounts of damage.",
                'img' => 'Chongyun.webp'
            ],
            [
                'name' => 'Xinyan',
                'rarity' => 'SR',
                'price' => '300.000',
                'element' => 'Pyro',
                'desc' => "A rock 'n' roll musician from Liyue who is a skilled user of pyro-based attacks. She is known for her rebellious personality and her love of music. She is also a capable fighter, capable of using her guitar to create powerful shockwaves that deal damage to her enemies.",
                'img' => 'Xinyan.webp'
            ],
            [
                'name' => 'Beidou',
                'rarity' => 'SR',
                'price' => '300.000',
                'element' => 'Electro',
                'desc' => "The captain of the Crux, a group of pirates based in Liyue. She is a skilled user of electro-based attacks and is known for her fearlessness and her determination. She is also a powerful fighter, capable of unleashing a devastating counterattack that can stagger even the strongest enemies.",
                'img' => 'Beidou.webp'
            ],
            [
                'name' => 'Bennett',
                'rarity' => 'SR',
                'price' => '300.000',
                'element' => 'Pyro',
                'desc' => "A young adventurer from Mondstadt who is a skilled user of pyro-based attacks. He is known for his bad luck and his clumsiness, but he never gives up no matter how tough the situation. He is also a powerful support character, capable of boosting the attack power and speed of his allies.",
                'img' => 'Bennett.webp'
            ],
            [
                'name' => 'Mona',
                'rarity' => 'SR',
                'price' => '300.000',
                'element' => 'Hydro',
                'desc' => "A fortune teller from Mondstadt who is a skilled user of hydro-based attacks. She is known for her mysterious personality and her love of money. She is also a powerful fighter, capable of summoning a giant water illusion to deal damage to her enemies.",
                'img' => 'Mona.webp'
            ],
            [
                'name' => 'Diluc',
                'rarity' => 'SSR',
                'price' => '500.000',
                'element' => 'Pyro',
                'desc' => "The owner of the Dawn Winery, a famous winery in Mondstadt. He is a skilled user of pyro-based attacks and is known for his cool and aloof personality. He is also a powerful fighter, capable of imbuing his attacks with pyro energy to deal massive amounts of damage.",
                'img' => 'Diluc.webp'
            ],
            [
                'name' => 'Keqing',
                'rarity' => 'SSR',
                'price' => '500.000',
                'element' => 'Electro',
                'desc' => "The Yuheng of the Liyue Qixing, a group of seven influential people in Liyue. She is a skilled user of electro-based attacks and is known for her sharp mind and her strong sense of justice. She is also a powerful fighter, capable of using her sword to strike down her enemies with lightning speed.",
                'img' => 'Keqing.webp'
            ],
            [
                'name' => 'Qiqi',
                'rarity' => 'SSR',
                'price' => '500.000',
                'element' => 'Cryo',
                'desc' => "An apprentice and herb gatherer at the Bubu Pharmacy in Liyue. She is a skilled user of cryo-based attacks and is known for her kind personality and her love of helping others. She is also a powerful healer, capable of reviving fallen allies and restoring their health.",
                'img' => 'Qiqi.webp'
            ],
            [
                'name' => 'Venti',
                'rarity' => 'SSR',
                'price' => '500.000',
                'element' => 'Anemo',
                'desc' => "A bard from Mondstadt who is a skilled user of anemo-based attacks. He is known for his carefree personality and his love of music. He is also a powerful fighter, capable of using his bow to create gusts of wind that can lift his enemies into the air and deal damage to them.",
                'img' => 'Venti.webp'
            ]
        ];
        foreach ($arrProduct as $singleProduct){
            if($name == $singleProduct['name']){
                return view('detail', compact('singleProduct'));
            }
        }
    }
}
