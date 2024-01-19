<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\People;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $people = new People();
        $people->name = "Christian Bale";
        $people->birth_date = "1974.01.30";
        
        //$people->role = "Bruce Wayne/Batman";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Michael Caine";
        $people->birth_date = "1933.03.14";
        //$people->role = "Alfred";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Anne Hathaway";
        $people->birth_date = "1982.11.12";
        //$people->role = "Selina Kyle/Macskanő";
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Tom Hardy";
        $people->birth_date = "1977.09.15";
        //$people->role = "Bane";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Joseph Gordon-Levitt";
        $people->birth_date = "1981.02.17";
        //$people->role = "John Blake";
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Liam Neeson";
        $people->birth_date = "1952.06.07";
        //$people->role = "Ra's Al Ghul";
        $people->country = "Észak-Írország";
        $people->save();

        $people = new People();
        $people->name = "Marion Cotillard";
        $people->birth_date = "1975.09.30";
        //$people->role = "Miranda Tate";
        $people->country = "Franciaország";
        $people->save();

        $people = new People();
        $people->name = "Gary Oldman";
        $people->birth_date = "1958.03.31";
        //$people->role = "Jim Gordon";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Morgan Freeman";
        $people->birth_date = "1937.06.01";
        //$people->role = "Lucius Fox";
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Elijah Wood";
        $people->birth_date = "1981.01.28";
        //$people->role = "Zsákos Frodó";
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Sir Ian McKellen";
        $people->birth_date = "1939.05.25";
        //$people->role = "Gandalf";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Viggo Mortensen";
        $people->birth_date = "1958.10.20";
        //$people->role = "Aragorn";
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Orlando Bloom";
        $people->birth_date = "1977.01.13";
        //$people->role = "Legolas";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Sean Astin";
        $people->birth_date = "1971.02.25";
        //$people->role = "Csavardi Samu";
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "John Rhys-Davies";
        $people->birth_date = "1944.05.05";
        //$people->role = "Gimli";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Billy Boyd";
        $people->birth_date = "1968.08.28";
        //$people->role = "Tuk Peregrin";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Sean Bean";
        $people->birth_date = "1959.04.17";
        //$people->role = "Boromir";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Christopher Lee";
        $people->birth_date = "1922.05.27";
        //$people->role = "Szarumán";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Hugo Weaving";
        $people->birth_date = "1960.04.04";
        //$people->role = "Elrond";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Dominic Monaghan";
        $people->birth_date = "1976.12.08";
        //$people->role = "Borbak Trufiádok";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Liv Tyler";
        $people->birth_date = "1977.07.01";
        //$people->role = "Arwen";
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Sir Ian Holm";
        $people->birth_date = "1931.09.12";
        //$people->role = "Zsákos Bilbó";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Cate Blanchett";
        $people->birth_date = "1969.05.14";
        //$people->role = "Galadriel";
        $people->country = "Ausztrália";
        $people->save();

        $people = new People();
        $people->name = "Craig Parker";
        $people->birth_date = "1970.11.12";
        //$people->role = "Haldir";
        $people->country = "Új-Zéland";
        $people->save();

        $people = new People();
        $people->name = "Csókás Márton";
        $people->birth_date = "1966.06.30";
        //$people->role = "Celeborn";
        $people->country = "Új-Zéland";
        $people->save();

        $people = new People();
        $people->name = "Andy Serkis";
        $people->birth_date = "1964.04.20";
        //$people->role = "Gollam/Sméagol";
        $people->country = "UK";
        $people->save();
    }
}
