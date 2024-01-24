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
        $people->name = "David S. Goyer";
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
        $people->name = "Heath Ledger";
        $people->birth_date = new \DateTime('1979-04-04');
        $people->country = "Ausztrália";
        $people->save();

        $people = new People();
        $people->name = "Aaron Eckhart";
        $people->birth_date = new \DateTime('1968-03-12');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Maggie Gyllenhaal";
        $people->birth_date = new \DateTime('1977-11-16');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Eric Roberts";
        $people->birth_date = new \DateTime('1956-04-18');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Cillian Murphy";
        $people->birth_date = new \DateTime('1976-05-25');
        $people->country = "Írország";
        $people->save();        
		
        $people = new People();
        $people->name = "Anthony Michael Hall";
        $people->birth_date = new \DateTime('1968-04-14');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Michael Jai White";
        $people->birth_date = new \DateTime('1967-11-10');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Nestor Carbonell";
        $people->birth_date = new \DateTime('1967-12-01');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Larry J. Franco";  //41
        $people->birth_date = new \DateTime('1949-04-05');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "James Newton Howard"; //42
        $people->birth_date = new \DateTime('1951-06-09');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Katie Holmes"; //43
        $people->birth_date = new \DateTime('1978-12-18');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Ken Watanabe"; //44
        $people->birth_date = new \DateTime('1959-10-21');
        $people->country = "Japán";
        $people->save();

        $people = new People();
        $people->name = "Rutger Hauer"; //45
        $people->birth_date = new \DateTime('1944-01-23');
        $people->country = "Hollandia";
        $people->save();

        $people = new People();
        $people->name = "Tom Wilkinson"; //46
        $people->birth_date = new \DateTime('1948-02-05');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Marina Inoue"; //47
        $people->birth_date = new \DateTime('1985-01-20');
        $people->country = "Japán";
        $people->save();

        $people = new People();
        $people->name = "Koichi Yamadera"; //48
        $people->birth_date = new \DateTime('1961-06-17');
        $people->country = "Japán";
        $people->save();

        $people = new People();
        $people->name = "Chinatsu Akasaki"; //49
        $people->birth_date = new \DateTime('1987-08-10');
        $people->country = "Japán";
        $people->save();

        $people = new People();
        $people->name = "Aya Endô"; //50
        $people->birth_date = new \DateTime('1980-02-17');
        $people->country = "Japán";
        $people->save();

        $people = new People(); //51
        $people->name = "Kana Hanazawa";
        $people->birth_date = new \DateTime('1989-02-25');
        $people->country = "Japán";
        $people->save();

        $people = new People();
        $people->name = "Shou Hayami"; //52
        $people->birth_date = new \DateTime('1958-08-02');
        $people->country = "Japán";
        $people->save();

        $people = new People();
        $people->name = "Yu Hayashi"; //53
        $people->birth_date = new \DateTime('1983-04-02');
        $people->country = "Japán";
        $people->save();

        $people = new People();
        $people->name = "Satoshi Hino"; //54
        $people->birth_date = new \DateTime('1978-08-04');
        $people->country = "Japán";
        $people->save();

        $people = new People();
        $people->name = "Seong-Hu Park"; //55
        $people->birth_date = new \DateTime('');
        $people->country = "Dél-Korea";
        $people->save();

        $people = new People();
        $people->name = "Gege Akutami"; //56
        $people->birth_date = new \DateTime('1992-02-26');
        $people->country = "Japán";
        $people->save();

        $people = new People();
        $people->name = "Hiroshi Seko"; //57
        $people->birth_date = new \DateTime('');
        $people->country = "Japán";
        $people->save();

        $people = new People();
        $people->name = "Alisa Okehazama"; //58
        $people->birth_date = new \DateTime('1993-02-04');
        $people->country = "Japán";
        $people->save();

        $people = new People();
        $people->name = "Yoshimasa Terui"; //59
        $people->birth_date = new \DateTime('');
        $people->country = "Japán";
        $people->save();

        $people = new People();
        $people->name = "Elijah Wood"; //60
        $people->birth_date = new \DateTime('1981-01-28');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Sir Ian McKellen"; //61
        $people->birth_date = new \DateTime('1939-05-25');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Viggo Mortensen"; //62
        $people->birth_date = new \DateTime('1958-10-20');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Orlando Bloom"; //63
        $people->birth_date = new \DateTime('1977-01-13');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Sean Astin"; //64
        $people->birth_date = new \DateTime('1971-02-25');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "John Rhys-Davies"; //65
        $people->birth_date = new \DateTime('1944-05-05');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Billy Boyd"; //66
        $people->birth_date = new \DateTime('1968-08-28');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Sean Bean"; //67
        $people->birth_date = new \DateTime('1959-04-17');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Christopher Lee"; //68
        $people->birth_date = new \DateTime('1922-05-27');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Hugo Weaving"; //69
        $people->birth_date = new \DateTime('1960-04-04');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Dominic Monaghan"; //70
        $people->birth_date = new \DateTime('1976-12-08');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Liv Tyler"; //71
        $people->birth_date = new \DateTime('1977-07-01');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Sir Ian Holm"; //72
        $people->birth_date = new \DateTime('1931-09-12');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Cate Blanchett"; //73
        $people->birth_date = new \DateTime('1969-05-14');
        $people->country = "Ausztrália";
        $people->save();

        $people = new People();
        $people->name = "Craig Parker"; //74
        $people->birth_date = new \DateTime('1970-11-12');
        $people->country = "Új-Zéland";
        $people->save();

        $people = new People();
        $people->name = "Csókás Márton"; //75
        $people->birth_date = new \DateTime('1966-06-30');
        $people->country = "Új-Zéland";
        $people->save();

        $people = new People();
        $people->name = "Andy Serkis"; //76
        $people->birth_date = new \DateTime('1964-04-20');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Peter Jackson"; //77
        $people->birth_date = new \DateTime('1961-10-31');
        $people->country = "Új-Zéland";
        $people->save();

        $people = new People();
        $people->name = "John Ronald Reuel Tolkien"; //78
        $people->birth_date = new \DateTime('1892-01-03');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Frances Walsh"; //79
        $people->birth_date = new \DateTime('1959-01-10');
        $people->country = "Új-Zéland";
        $people->save();

        $people = new People();
        $people->name = "Philippa Boyens"; //80
        $people->birth_date = new \DateTime('1962');
        $people->country = "Új-Zéland";
        $people->save();

        $people = new People();
        $people->name = "Stephen Sinclair"; //81
        $people->birth_date = new \DateTime('1956');
        $people->country = "Új-Zéland";
        $people->save();

        $people = new People();
        $people->name = "Andrew Lesnie"; //82
        $people->birth_date = new \DateTime('1956-01-01');
        $people->country = "Ausztrália";
        $people->save();

        $people = new People();
        $people->name = "Howard Shore"; //83
        $people->birth_date = new \DateTime('1946-10-18');
        $people->country = "Kanada";
        $people->save();
        
        $people = new People();
        $people->name = "Barrie M. Osborne"; //84
        $people->birth_date = new \DateTime('1944-02-07');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Tim Sanders"; //85
        $people->birth_date = new \DateTime('1961-11-06');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "John Gilbert"; //86
        $people->birth_date = new \DateTime('');
        $people->country = "Új-Zéland";
        $people->save();

        $people = new People();
        $people->name = "Miranda Otto"; //87
        $people->birth_date = new \DateTime('1967-12-16');
        $people->country = "Ausztrália";
        $people->save();

        $people = new People();
        $people->name = "Brad Dourif"; //88
        $people->birth_date = new \DateTime('1950-03-18');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Karl Urban"; //89
        $people->birth_date = new \DateTime('1972-06-07');
        $people->country = "Új-Zéland";
        $people->save();

        $people = new People();
        $people->name = "David Wenham"; //90
        $people->birth_date = new \DateTime('1965-09-21');
        $people->country = "Ausztrália";
        $people->save();

        $people = new People();
        $people->name = "Bernard Hill"; //91
        $people->birth_date = new \DateTime('1944-12-17');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Michael Horton"; //92
        $people->birth_date = new \DateTime('');
        $people->country = "Új-Zéland";
        $people->save();

        $people = new People();
        $people->name = ""; //93
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //94
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //95
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //96
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //97
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //98
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //99
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

       
    }
}
