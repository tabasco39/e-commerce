<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $prod1 = new Produit;
        $prod1->nom = 'voiture 1';
        $prod1->prix = 12.5;
        $prod1->description = "voiture de course";
        $prod1->photo = "img1.jpg";
        $prod1->save();

        $prod2 = new Produit;
        $prod2->nom = 'voiture 2';
        $prod2->prix = 17.5;
        $prod2->description = "voiture plaisir";
        $prod2->photo = "img2.jpg";
        $prod2->save();

        $prod3 = new Produit;
        $prod3->nom = 'voiture 3';
        $prod3->prix = 26.5;
        $prod3->description = "voiture de luxe";
        $prod3->photo = "img3.jpg";
        $prod3->save();

        $prod4 = new Produit;
        $prod4->nom = 'voiture 4';
        $prod4->prix = 45.5;
        $prod4->description = "voiture biturbine avec nitrous";
        $prod4->photo = "img4.jpg";
        $prod4->save();

        $prod5 = new Produit;
        $prod5->nom = 'voiture 5';
        $prod5->prix = 12.5;
        $prod5->description = "voiture très puissante";
        $prod5->photo = "img5.jpg";
        $prod5->save();

        $prod6 = new Produit;
        $prod6->nom = 'voiture 6';
        $prod6->prix = 500.5;
        $prod6->description = "voiture futuriste";
        $prod6->photo = "img6.jpg";
        $prod6->save();

        $prod7 = new Produit;
        $prod7->nom = 'voiture 7';
        $prod7->prix = 260.5;
        $prod7->description = "voiture de classique";
        $prod7->photo = "img7.jpg";
        $prod7->save();

        $prod8 = new Produit;
        $prod8->nom = 'voiture 8';
        $prod8->prix = 360.5;
        $prod8->description = "voiture créatif";
        $prod8->photo = "img8.jpg";
        $prod8->save();

        $prod9 = new Produit;
        $prod9->nom = 'voiture 9';
        $prod9->prix = 678.5;
        $prod9->description = "voiture élégante";
        $prod9->photo = "img9.jpg";
        $prod9->save();
    }
}
