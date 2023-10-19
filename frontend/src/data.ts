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
    },

    {
        id: '2',
        name: 'Csillagok Között',
        tags: ['sci-fi', 'akció', 'űr'],
        favorite: true,
        stars: 4.5,
        imageUrl :'assets/683.jpg',
        origins: ['USA'],
    },

]