import { Tag } from "./Tag";

export class Film{
    id!:string;
    release_year!: number
    name!:string;
    tags?: Tag[];
    favorite!: boolean;
    stars!:number;
    
    image!: File;

    imageUrl!: string;
    toplist!: number;
    origin!: string[];
    description!: string;
}