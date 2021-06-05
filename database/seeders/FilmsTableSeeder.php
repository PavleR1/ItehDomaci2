<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert(
            [
                ['naziv' => 'John Wick', 'oblast' => 'akcija', 'slika' => 'https://upload.wikimedia.org/wikipedia/en/9/98/John_Wick_TeaserPoster.jpg', 'url' => 'https://www.youtube.com/embed/C0BMx-qxsP4', 'zanr' => 'akcija', 'glumci' => 'Keanu Reeves', 'reziser' => 'Chad Stahelski', 'sadrzaj' => 'Prica filma prati Dzona Vika (Keanu Reevs) koji je nekada bio placeni ubica. Zbog ljubavi prema supruzi, ostavlja posao, i odlucuje da potpuno promeni zivot, ali onda jednoga dana...'],
                ['naziv' => 'Godfather', 'oblast' => 'triler', 'slika' => 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_UY1200_CR107,0,630,1200_AL_.jpg', 'url' => 'https://www.youtube.com/embed/C0BMx-qxsP4', 'zanr' => 'akcija', 'glumci' => 'Keanu Reeves', 'reziser' => 'Chad Stahelski', 'sadrzaj' => 'Prica filma prati Dzona Vika (Keanu Reevs) koji je nekada bio placeni ubica. Zbog ljubavi prema supruzi, ostavlja posao, i odlucuje da potpuno promeni zivot, ali onda jednoga dana...'],
                ['naziv' => 'Ice Age', 'oblast' => 'animirana avantura', 'slika' => 'https://m.media-amazon.com/images/M/MV5BMmYxZWY2NzgtYzJjZC00MDFmLTgxZTctMjRiYjdjY2FhODg3XkEyXkFqcGdeQXVyNjk1Njg5NTA@._V1_UY1200_CR85,0,630,1200_AL_.jpg', 'url' => 'https://www.youtube.com/embed/C0BMx-qxsP4', 'zanr' => 'akcija', 'glumci' => 'Keanu Reeves', 'reziser' => 'Chad Stahelski', 'sadrzaj' => 'Prica filma prati Dzona Vika (Keanu Reevs) koji je nekada bio placeni ubica. Zbog ljubavi prema supruzi, ostavlja posao, i odlucuje da potpuno promeni zivot, ali onda jednoga dana...'],
                ['naziv' => 'Pompeii', 'oblast' => 'akcija', 'slika' => 'https://upload.wikimedia.org/wikipedia/en/9/98/John_Wick_TeaserPoster.jpg', 'url' => 'https://www.youtube.com/embed/C0BMx-qxsP4', 'zanr' => 'akcija', 'glumci' => 'Keanu Reeves', 'reziser' => 'Chad Stahelski', 'sadrzaj' => 'Prica filma prati Dzona Vika (Keanu Reevs) koji je nekada bio placeni ubica. Zbog ljubavi prema supruzi, ostavlja posao, i odlucuje da potpuno promeni zivot, ali onda jednoga dana...'],
                ['naziv' => 'The Amazing Spiderman', 'oblast' => 'akcija', 'slika' => 'https://upload.wikimedia.org/wikipedia/en/9/98/John_Wick_TeaserPoster.jpg', 'url' => 'https://www.youtube.com/embed/C0BMx-qxsP4', 'zanr' => 'akcija', 'glumci' => 'Keanu Reeves', 'reziser' => 'Chad Stahelski', 'sadrzaj' => 'Prica filma prati Dzona Vika (Keanu Reevs) koji je nekada bio placeni ubica. Zbog ljubavi prema supruzi, ostavlja posao, i odlucuje da potpuno promeni zivot, ali onda jednoga dana...'],
                ['naziv' => 'Inception', 'oblast' => 'akcija', 'slika' => 'https://upload.wikimedia.org/wikipedia/en/9/98/John_Wick_TeaserPoster.jpg', 'url' => 'https://www.youtube.com/embed/C0BMx-qxsP4', 'zanr' => 'akcija', 'glumci' => 'Keanu Reeves', 'reziser' => 'Chad Stahelski', 'sadrzaj' => 'Prica filma prati Dzona Vika (Keanu Reevs) koji je nekada bio placeni ubica. Zbog ljubavi prema supruzi, ostavlja posao, i odlucuje da potpuno promeni zivot, ali onda jednoga dana...']
            ]
        );
    }
}
