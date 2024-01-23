<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\People;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds-
     */
    public function run(): void
    {
        $people = new People();
        $people->name = "Hiroaki Hirata";
        $people->birth_date = new \DateTime('1963-08-07');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Mayumi Tanaka";
        $people->birth_date = new \DateTime ('1955-01-15');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Akemi Okamura";
        $people->birth_date = new \DateTime('1969-03-12');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Kaori Nazuka";
        $people->birth_date = new \DateTime('1985-04-24');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Kenjirô Tsuda";
        $people->birth_date = new \DateTime('1971-06-11');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Kappei Yamaguchi";
        $people->birth_date = new \DateTime('1965-05-23');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Yao Kazuki";
        $people->birth_date = new \DateTime('1959-06-17');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Ikue Ôtani";
        $people->birth_date = new \DateTime('1965-08-18');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Kazuya Nakai";
        $people->birth_date = new \DateTime('1967-11-25');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Yuriko Yamaguchi";
        $people->birth_date = new \DateTime('1965-11-21');
        $people->country = "Japán";
        $people->save();

        $people = new People();
        $people->name = "Brooklyn El-Omar";
        $people->birth_date = null;
        $people->country = "Ausztrália";
        $people->save();

        $people = new People();
        $people->name = "Tsutomu Kuroiwa";
        $people->birth_date = new \DateTime('1973-07-19');
        $people->country = "Japán";
        $people->save();
        
        $people = new People();
        $people->name = "Eiichiro Oda";
        $people->birth_date = new \DateTime('1975-01-01');
        $people->country = "Japán";
        $people->save();
        
        $people = new People();
        $people->name = "Gorô Taniguchi";
        $people->birth_date = new \DateTime('1966-10-18');
        $people->country = "Japán";
        $people->save();
        
        $people = new People();
        $people->name = "Christian Bale";
        $people->birth_date = new \DateTime('1974-01-30');      
        $people->country = "UK";
        $people->save();
        
        $people = new People();
        $people->name = "Michael Caine";
        $people->birth_date = new \DateTime('1933-03-14');
        $people->country = "UK";
        $people->save();
        
        $people = new People();
        $people->name = "Anne Hathaway";
        $people->birth_date = new \DateTime('1982-11-12');  
        $people->country = "USA";
        $people->save();
        
        $people = new People();
        $people->name = "Tom Hardy";
        $people->birth_date = new \DateTime('1977-09-15');
        $people->country = "UK";
        $people->save();
        
        $people = new People();
        $people->name = "Joseph Gordon-Levitt";
        $people->birth_date = new \DateTime('1981-02-17');
        $people->country = "USA";
        $people->save();
        
        $people = new People();
        $people->name = "Liam Neeson";
        $people->birth_date = new \DateTime('1952-06-07');
        $people->country = "Észak-Írország";
        $people->save();

        $people = new People();
        $people->name = "Marion Cotillard";
        $people->birth_date = new \DateTime('1975-09-30');
        $people->country = "Franciaország";
        $people->save();

        $people = new People();
        $people->name = "Gary Oldman";
        $people->birth_date = new \DateTime('1958-03-31');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Morgan Freeman";
        $people->birth_date = new \DateTime('1937-06-01');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Christopher Nolan";
        $people->birth_date = new \DateTime('1970-06-30');
        $people->country = "UK";
        $people->save();
        
        $people = new People();
        $people->name = "Bob Kane";
        $people->birth_date = new \DateTime('1915-10-24');
        $people->country = "USA";
        $people->save();
        
        $people = new People();
        $people->name = "David S- Goyer";
        $people->birth_date = new \DateTime('1965-12-22');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Jonathan Nolan";
        $people->birth_date = new \DateTime('1976-06-06');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Wally Pfister";
        $people->birth_date = new \DateTime('1961-07-08');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Charles Roven";
        $people->birth_date = new \DateTime('1949-08-02');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Emma Thomas";
        $people->birth_date = new \DateTime('1971-12-09');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Hans Zimmer";
        $people->birth_date = new \DateTime('1957-09-12');
        $people->country = "Németország";
        $people->save();

        $people = new People();
        $people->name = "Lee Smith";
        $people->birth_date = new \DateTime('1960-06-10');
        $people->country = "Ausztrália";
        $people->save();

        
		
        






        $people = new People();
        $people->name = "Elijah Wood";
        $people->birth_date = new \DateTime('1981-01-28');
        //$people->role = "Zsákos Frodó";
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Sir Ian McKellen";
        $people->birth_date = new \DateTime('1939-05-25');
        //$people->role = "Gandalf";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Viggo Mortensen";
        $people->birth_date = new \DateTime('1958-10-20');
        //$people->role = "Aragorn";
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Orlando Bloom";
        $people->birth_date = new \DateTime('1977-01-13');
        //$people->role = "Legolas";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Sean Astin";
        $people->birth_date = new \DateTime('1971-02-25');
        //$people->role = "Csavardi Samu";
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "John Rhys-Davies";
        $people->birth_date = new \DateTime('1944-05-05');
        //$people->role = "Gimli";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Billy Boyd";
        $people->birth_date = new \DateTime('1968-08-28');
        //$people->role = "Tuk Peregrin";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Sean Bean";
        $people->birth_date = new \DateTime('1959-04-17');
        //$people->role = "Boromir";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Christopher Lee";
        $people->birth_date = new \DateTime('1922-05-27');
        //$people->role = "Szarumán";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Hugo Weaving";
        $people->birth_date = new \DateTime('1960-04-04');
        //$people->role = "Elrond";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Dominic Monaghan";
        $people->birth_date = new \DateTime('1976-12-08');
        //$people->role = "Borbak Trufiádok";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Liv Tyler";
        $people->birth_date = new \DateTime('1977-07-01');
        //$people->role = "Arwen";
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Sir Ian Holm";
        $people->birth_date = new \DateTime('1931-09-12');
        //$people->role = "Zsákos Bilbó";
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Cate Blanchett";
        $people->birth_date =new \DateTime('1969-05-14');
        //$people->role = "Galadriel";
        $people->country = "Ausztrália";
        $people->save();

        $people = new People();
        $people->name = "Craig Parker";
        $people->birth_date = new \DateTime('1970-11-12');
        //$people->role = "Haldir";
        $people->country = "Új-Zéland";
        $people->save();

        $people = new People();
        $people->name = "Csókás Márton";
        $people->birth_date = new \DateTime('1966-06-30');
        //$people->role = "Celeborn";
        $people->country = "Új-Zéland";
        $people->save();

        $people = new People();
        $people->name = "Andy Serkis";
        $people->birth_date = new \DateTime('1964-04-20');
        //$people->role = "Gollam/Sméagol";
        $people->country = "UK";
        $people->save();
    }
}
