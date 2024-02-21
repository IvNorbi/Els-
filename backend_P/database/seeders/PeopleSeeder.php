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
        $people->name = "Hiroaki Hirata"; //1
        $people->birth_date = new \DateTime('1963-08-07');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Mayumi Tanaka"; //2
        $people->birth_date = new \DateTime ('1955-01-15');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Akemi Okamura"; //3
        $people->birth_date = new \DateTime('1969-03-12');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Kaori Nazuka"; //4
        $people->birth_date = new \DateTime('1985-04-24');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Kenjirô Tsuda"; //5
        $people->birth_date = new \DateTime('1971-06-11');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Kappei Yamaguchi"; //6
        $people->birth_date = new \DateTime('1965-05-23');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Yao Kazuki"; //7
        $people->birth_date = new \DateTime('1959-06-17');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Ikue Ôtani"; //8
        $people->birth_date = new \DateTime('1965-08-18');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Kazuya Nakai"; //9
        $people->birth_date = new \DateTime('1967-11-25');
        $people->country = "Japán";
        $people->save();
		
        $people = new People();
        $people->name = "Yuriko Yamaguchi"; //10
        $people->birth_date = new \DateTime('1965-11-21');
        $people->country = "Japán";
        $people->save();

        $people = new People();
        $people->name = "Brooklyn El-Omar"; //11
        $people->birth_date = null;
        $people->country = "Ausztrália";
        $people->save();

        $people = new People();
        $people->name = "Tsutomu Kuroiwa"; //12
        $people->birth_date = new \DateTime('1973-07-19');
        $people->country = "Japán";
        $people->save();
        
        $people = new People();
        $people->name = "Eiichiro Oda"; //13
        $people->birth_date = new \DateTime('1975-01-01');
        $people->country = "Japán";
        $people->save();
        
        $people = new People();
        $people->name = "Gorô Taniguchi"; //14
        $people->birth_date = new \DateTime('1966-10-18');
        $people->country = "Japán";
        $people->save();
        
        $people = new People();
        $people->name = "Christian Bale"; //15
        $people->birth_date = new \DateTime('1974-01-30');      
        $people->country = "UK";
        $people->save();
        
        $people = new People();
        $people->name = "Michael Caine"; //16
        $people->birth_date = new \DateTime('1933-03-14');
        $people->country = "UK";
        $people->save();
        
        $people = new People();
        $people->name = "Anne Hathaway"; //17
        $people->birth_date = new \DateTime('1982-11-12');  
        $people->country = "USA";
        $people->save();
        
        $people = new People();
        $people->name = "Tom Hardy"; //18
        $people->birth_date = new \DateTime('1977-09-15');
        $people->country = "UK";
        $people->save();
        
        $people = new People();
        $people->name = "Joseph Gordon-Levitt"; //19
        $people->birth_date = new \DateTime('1981-02-17');
        $people->country = "USA";
        $people->save();
        
        $people = new People();
        $people->name = "Liam Neeson"; //20
        $people->birth_date = new \DateTime('1952-06-07');
        $people->country = "Észak-Írország";
        $people->save();

        $people = new People();
        $people->name = "Marion Cotillard"; //21
        $people->birth_date = new \DateTime('1975-09-30');
        $people->country = "Franciaország";
        $people->save();

        $people = new People();
        $people->name = "Gary Oldman"; //22
        $people->birth_date = new \DateTime('1958-03-31');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Morgan Freeman"; //23
        $people->birth_date = new \DateTime('1937-06-01');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Christopher Nolan"; //24
        $people->birth_date = new \DateTime('1970-06-30');
        $people->country = "UK";
        $people->save();
        
        $people = new People();
        $people->name = "Bob Kane"; //25
        $people->birth_date = new \DateTime('1915-10-24');
        $people->country = "USA";
        $people->save();
        
        $people = new People();
        $people->name = "David S. Goyer"; //26
        $people->birth_date = new \DateTime('1965-12-22');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Jonathan Nolan"; //27
        $people->birth_date = new \DateTime('1976-06-06');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Wally Pfister"; //28
        $people->birth_date = new \DateTime('1961-07-08');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Charles Roven"; //29
        $people->birth_date = new \DateTime('1949-08-02');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Emma Thomas"; //30
        $people->birth_date = new \DateTime('1971-12-09');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Hans Zimmer"; //31
        $people->birth_date = new \DateTime('1957-09-12');
        $people->country = "Németország";
        $people->save();

        $people = new People();
        $people->name = "Lee Smith"; //32
        $people->birth_date = new \DateTime('1960-06-10');
        $people->country = "Ausztrália";
        $people->save();

        $people = new People();
        $people->name = "Heath Ledger"; //33
        $people->birth_date = new \DateTime('1979-04-04');
        $people->country = "Ausztrália";
        $people->save();

        $people = new People();
        $people->name = "Aaron Eckhart"; //34
        $people->birth_date = new \DateTime('1968-03-12');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Maggie Gyllenhaal"; //35
        $people->birth_date = new \DateTime('1977-11-16');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Eric Roberts"; //36
        $people->birth_date = new \DateTime('1956-04-18');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Cillian Murphy"; //37
        $people->birth_date = new \DateTime('1976-05-25');
        $people->country = "Írország";
        $people->save();        
		
        $people = new People();
        $people->name = "Anthony Michael Hall"; //38
        $people->birth_date = new \DateTime('1968-04-14');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Michael Jai White"; //39
        $people->birth_date = new \DateTime('1967-11-10');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Nestor Carbonell"; //40
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
        $people->name = "Samuel L. Jackson"; //93
        $people->birth_date = new \DateTime('1948-12-21');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Tommy Lee Jones"; //94
        $people->birth_date = new \DateTime('1946-09-15');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Cormac McCarthy"; //95
        $people->birth_date = new \DateTime('1933-07-20');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Marco Beltrami"; //96
        $people->birth_date = new \DateTime('1966-10-07');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Paul Elliott"; //97
        $people->birth_date = new \DateTime('1947-10-18');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Barbara A. Hall"; //98
        $people->birth_date = new \DateTime('1960-06-17');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Larry Madaras"; //99
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = "Roberto Silvi"; //100
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = "Matthew McConaughey"; //101
        $people->birth_date = new \DateTime('1969-11-04');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Jessica Chastain"; //102
        $people->birth_date = new \DateTime('1977-03-24');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Mackenzie Foy"; //103
        $people->birth_date = new \DateTime('2000-11-10');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Wes Bentley"; //104
        $people->birth_date = new \DateTime('1978-09-04');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Casey Affleck"; //105
        $people->birth_date = new \DateTime('1975-09-12');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "David Gyasi"; //106
        $people->birth_date = new \DateTime('1980-01-02');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Matt Damon"; //107
        $people->birth_date = new \DateTime('1970-11-08');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Collette Wolfe"; //108
        $people->birth_date = new \DateTime('1980-04-04');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "John Lithgow"; //109
        $people->birth_date = new \DateTime('1945-10-19');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Timothée Chalamet"; //110
        $people->birth_date = new \DateTime('1995-12-27');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Ellen Burstyn"; //111
        $people->birth_date = new \DateTime('1932-12-07');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Leah Cairns"; //112
        $people->birth_date = new \DateTime('1974-06-02');
        $people->country = "Kanada";
        $people->save();

        $people = new People();
        $people->name = "David Oyelowo"; //113
        $people->birth_date = new \DateTime('1976-04-01');
        $people->country = "UK";
        $people->save();

        $people = new People();
        $people->name = "Francis X. McCarthy"; //114
        $people->birth_date = new \DateTime('1942-02-15');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "William Devane"; //115
        $people->birth_date = new \DateTime('1939-09-05');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Bill Irwin"; //116
        $people->birth_date = new \DateTime('1950-04-11');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = "Josh Stewart"; //117
        $people->birth_date = new \DateTime('1977-02-06');
        $people->country = "USA";
        $people->save();

        $people = new People();
        $people->name = ""; //118
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //119
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //120
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //121
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //122
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //123
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //124
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //125
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //126
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //127
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //128
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //129
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //130
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //131
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //132
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //133
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //134
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //135
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //136
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //137
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //138
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //139
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //140
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

        $people = new People();
        $people->name = ""; //1
        $people->birth_date = new \DateTime('');
        $people->country = "";
        $people->save();

       
    }
}
