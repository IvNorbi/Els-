import { Tag } from "./Tag";

export class Film{
    id!:string;
    name!:string;
    tags?: Tag[];
    favorite!: boolean;
    stars!:number;
    imageUrl!: string;
    toplist!: number;
    origin!: string[];
    description!: string;
}