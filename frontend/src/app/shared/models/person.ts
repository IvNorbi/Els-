export interface  People {
    id: number;
    name: string;
    birth_date: string;
    country: string;
    roles_people: RolePeople[];
  }
  
  export interface  RolePeople {
    id: number;
    people_id: number;
    movie_id: number;
    role_id: number;
    rolename: string;
    movies: {
      id: number;
      name: string;
    };
    roles: {
      id: number;
      name: string;
    };
  }
  