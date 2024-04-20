export class UserModel {
    email!:string;
    password!:string;
    name?:string; // Login komponens miatt. 
    imageUrl?:string;
    image?:File;
}