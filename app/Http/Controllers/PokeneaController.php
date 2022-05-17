<?php

namespace App\Http\Controllers;

class PokeneaController extends Controller
{
    public static $pokeneas = array(
        array(
            'id' => 1,
            'name' => 'LuchitoSSJ',
            'height' => '1.50 m',
            'skill' => 'Trapear siendo super sangre joven',
            'image' => 'https://storage.googleapis.com/pokeneasbucket/Luchossj.jpg',
            'phrase' => 'Toy contando ticket ticket como Jimmy Fallon',
        ),
        array(
            'id' => 2,
            'name' => 'Duketo',
            'height' => '1.69 m',
            'skill' => 'Cara de diablo',
            'image' => 'https://storage.googleapis.com/pokeneasbucket/Duki.webp',
            'phrase' => 'Yo quiero salvarte como Naruto a Konoha, estoy usando los poderes super saiyan como Gohan',
        ),
        array(
            'id' => 3,
            'name' => 'Quevedo',
            'height' => '1.76 m',
            'skill' => 'Hacer temones',
            'image' => 'https://storage.googleapis.com/pokeneasbucket/Quevedo.jpg',
            'phrase' => 'Quevedo con el Lin, Quevedo con el Linton',
        ),
        array(
            'id' => 4,
            'name' => 'C.R.O',
            'height' => '1.79 m',
            'skill' => 'Va ciego por el club',
            'image' => 'https://storage.googleapis.com/pokeneasbucket/CRO.jpg',
            'phrase' => 'Ciego por el club, sigo ciego el club, ciego por el club, sigo ciego el club',
        ),
        array(
            'id' => 5,
            'name' => 'Eladio Carrion Sendo Cabron',
            'height' => '1.88 m',
            'skill' => 'Es de la H',
            'image' => 'https://storage.googleapis.com/pokeneasbucket/eladio-carrion.jpg',
            'phrase' => 'Primero la H, despues va la U, despues va la M, la A, C, A, O',
        ),
        array(
            'id' => 6,
            'name' => 'Khea',
            'height' => '1.73m',
            'skill' => 'Flexea jovemente',
            'image' => 'https://storage.googleapis.com/pokeneasbucket/khea.jpg',
            'phrase' => 'Sabe que la quiero pero she dont give a fo',
        ),
        array(
            'id' => 7,
            'name' => 'Seven Kayne',
            'height' => '1.77',
            'skill' => 'Sieteeeeeeee',
            'image' => 'https://storage.googleapis.com/pokeneasbucket/sevenkayne.webp',
            'phrase' => 'Ni droga, ni ropa, ni alcohol, yo queria tu corazon',
        ),
        array(
            'id' => 8,
            'name' => 'Ysy A',
            'height' => '1.72 m',
            'skill' => 'Compra muchos flows',
            'image' => 'https://storage.googleapis.com/pokeneasbucket/ysy%20a.jpg',
            'phrase' => 'Es que yo por alla yo escuche que se dice que le ysy compra flows en otro planeta',
        ),
    );
        
    public function getRandomPokenea()
    {
        $totalPokeneas = (count(PokeneaController::$pokeneas));
        $randomNumber = (rand(0,($totalPokeneas-1)));
        $randomPokenea = PokeneaController::$pokeneas[$randomNumber];
        return response()->json(['ID' => $randomPokenea['id'], 'Name' => $randomPokenea['name'],'Height' => $randomPokenea['height'], 'Skill' => $randomPokenea['skill'], 'server_ip' => gethostbyname(gethostname())]);
    }

    public function getRandomPokeneaImage()
    {
        $pokenea = PokeneaController::$pokeneas[array_rand(PokeneaController::$pokeneas)];
        $viewData = [
            'pokenea' => $pokenea,'docker_container' => gethostbyname(gethostname()),
        ];
        return view('pokeneas.show', $viewData);
    }

}
