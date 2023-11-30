import express from "express";
import cors from "cors";
import { sample_films, sample_tags } from "./data";
import { Film } from "../../frontend/src/app/shared/models/filmek";

const app = express();
app.use(express.json());
app.use(cors({
    credentials:true,
    origin:["http://localhost:4200"]
}));


app.get("/api/movies", (req, res) => {
    res.send(sample_films);
})

app.get("/api/movies/search/:searchTerm", (req, res) => {
    const searchTerm = req.params.searchTerm;
    const movies = sample_films
    .filter(film => film.name.toLocaleLowerCase()
    .includes(searchTerm.toLocaleLowerCase()));
    res.send(movies)
})

app.get("/api/movies/tags", (req, res) => {
    res.send(sample_tags)
})

app.get("/api/movies/tag/:tagName", (req, res) => {
    const tagName = req.params.tagName;
    const movies  = sample_films.filter(film => film.tags?.includes(tagName))
    res.send(movies)
})

app.get("/api/movies/:movieId", (req, res) => {
    const movieId = req.params.movieId;
    const movie  = sample_films.find(film => film.id == movieId);
    res.send(movie)
})

const port = 5000;
app.listen(port, () => {
    console.log("Weboldal server elindult a hhtp://localhost:" + port + "-on")
})