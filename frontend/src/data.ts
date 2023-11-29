import { Tag } from './app/shared/models/Tag';
import {Film} from './app/shared/models/filmek';

export const sample_films: Film[] =[
    {
        id: '1',
        name: 'One Piece film Red',
        tags: ['anime', 'onepiece', 'shounen'],
        favorite: false,
        stars: 5.0,
        imageUrl :'assets/5270S2R.jpg',
        origins: ['Japán'],
        description: 'Uta - a világ legkedveltebb énekesnője - most először mutatja meg magát a világnak egy élő koncerten. A hang, amelyre az egész világ várt, hamarosan felcsendül.'

    },

 /* KETTES ID-RE KELL VALAMI */

    {
        id: '3',
        name: 'A sötét lovag',
        tags: ['akció', 'thriller', 'comic', 'szuperhős', 'dc'],
        favorite: false,
        stars: 5,
        imageUrl :'assets/dk.jpg',
        origins: ['USA'],
        description: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem cumque inventore laboriosam nisi maiores aliquid doloremque quam sint saepe ipsum sunt, aperiam animi eos id in, dignissimos quis quasi pariatur sit alias! Quia inventore atque eligendi impedit blanditiis, soluta cum unde provident temporibus consequatur voluptatem, neque saepe facilis doloremque suscipit.'
    },
    
    {
        id: '4',
        name: 'Jujutsu Kaisen: 0',
        tags: ['anime', 'shounen', 'japán', 'sorcery', 'lorem', 'ipsum'],
        favorite: false,
        stars: 4.5,
        imageUrl :'assets/jk.jpg',
        origins: ['Japán'],
        description: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem cumque inventore laboriosam nisi maiores aliquid doloremque quam sint saepe ipsum sunt, aperiam animi eos id in, dignissimos quis quasi pariatur sit alias! Quia inventore atque eligendi impedit blanditiis, soluta cum unde provident temporibus consequatur voluptatem, neque saepe facilis doloremque suscipit.'
    },
    {
        id: '5',
        name: 'Gyűrűk ura: A király visszatér',
        tags: ['fantasy', 'lotr', 'frodo', 'hobbit', 'gyűrű', 'entek', 'nem', 'mentek'],
        favorite: false,
        stars: 5.0,
        imageUrl :'assets/lotr.jpg',
        origins: ['USA'],
        description: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem cumque inventore laboriosam nisi maiores aliquid doloremque quam sint saepe ipsum sunt, aperiam animi eos id in, dignissimos quis quasi pariatur sit alias! Quia inventore atque eligendi impedit blanditiis, soluta cum unde provident temporibus consequatur voluptatem, neque saepe facilis doloremque suscipit.'

    },
    {
        id: '6',
        name: 'Sunset Limited',
        tags: ['kamradráma', 'beszélgetés', 'cuccli', 'írdát', 'hely', 'ajaj', 'kisbikfic'],
        favorite: false,
        stars: 5.0,
        imageUrl :'assets/sl.jpg',
        origins: ['USA'],
        description: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem cumque inventore laboriosam nisi maiores aliquid doloremque quam sint saepe ipsum sunt, aperiam animi eos id in, dignissimos quis quasi pariatur sit alias! Quia inventore atque eligendi impedit blanditiis, soluta cum unde provident temporibus consequatur voluptatem, neque saepe facilis doloremque suscipit.'

    },
    {
        id: '2',
        name: 'Csillagok Között',
        tags: ['sci-fi', 'akció', 'űr'],
        favorite: false,
        stars: 4.5,
        imageUrl :'assets/is.jpg',
        origins: ['USA'],
        description: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem cumque inventore laboriosam nisi maiores aliquid doloremque quam sint saepe ipsum sunt, aperiam animi eos id in, dignissimos quis quasi pariatur sit alias! Quia inventore atque eligendi impedit blanditiis, soluta cum unde provident temporibus consequatur voluptatem, neque saepe facilis doloremque suscipit.'
    },
    

]

export const sample_tags:Tag[] = [
    // { name: 'minden', count: 6 },
    { name: 'akció', count: 4 },
    { name: 'kamradráma', count: 2 },
    { name: 'anime', count: 3 },
]