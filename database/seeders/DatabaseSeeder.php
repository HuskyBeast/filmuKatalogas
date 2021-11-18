<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Drama',
            'description' => "Films full of dramatic twists!"
        ]);

        DB::table('categories')->insert([
            'name' => 'Crime',
            'description' => "Films full of terrible crime!"
        ]);

        DB::table('categories')->insert([
            'name' => 'Action',
            'description' => "Films full of amazing action!"
        ]);

        DB::table('categories')->insert([
            'name' => 'Biography',
            'description' => "Films about the course of a person's life!"
        ]);

        DB::table('categories')->insert([
            'name' => 'History',
            'description' => "Films share a peek at the past!"
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Adventure',
            'description' => "Films full of thrilling adventure!"
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Western',
            'description' => "Films full of the ole West!"
        ]);

        DB::table('films')->insert([
            'name' => 'The Shawshank Redemption',
            'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
            'cover' => '1.jpg',
            'length' => '2h 22m',
            'audience' => 'R',
            'trailer' => 'https://www.youtube.com/watch?v=6hB3S9bIaco',
            'writers' => 'Stephen King (based on the short novel "Rita Hayworth and the Shawshank Redemption"), Frank Darabont (screenplay)',
            'release_date' => '1994-09-22',
            'categories' => '1/2'
        ]);

        DB::table('films')->insert([
            'name' => 'The Godfather',
            'description' => 'The aging patriarch of an organized crime dynasty in postwar New York City transfers control of his clandestine empire to his reluctant youngest son.',
            'cover' => '2.jpg',
            'length' => '2h 55m',
            'audience' => 'R',
            'trailer' => 'https://www.youtube.com/watch?v=5DO-nDW43Ik',
            'writers' => 'Mario Puzo (screenplay), Francis Ford Coppola (screenplay)',
            'release_date' => '1972-03-24',
            'categories' => '1/2'
        ]);

        DB::table('films')->insert([
            'name' => 'The Godfather: Part II',
            'description' => 'The early life and career of Vito Corleone in 1920s New York City is portrayed, while his son, Michael, expands and tightens his grip on the family crime syndicate.',
            'cover' => '3.jpg',
            'length' => '3h 22m',
            'audience' => 'R',
            'trailer' => 'https://www.youtube.com/watch?v=8PyZCU2vpi8',
            'writers' => 'Mario Puzo (screenplay), Francis Ford Coppola (screenplay)',
            'release_date' => '1974-12-18',
            'categories' => '1/2'
        ]);

        DB::table('films')->insert([
            'name' => 'The Dark Knight',
            'description' => 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
            'cover' => '4.jpg',
            'length' => '2h 32m',
            'audience' => 'PG-13',
            'trailer' => 'https://www.youtube.com/watch?v=EXeTwQWrcwY',
            'writers' => 'Jonathan Nolan (screenplay), Christopher Nolan (screenplay), David S. Goyer (story)',
            'release_date' => '2008-07-18',
            'categories' => '1/2/3'
        ]);

        DB::table('films')->insert([
            'name' => '12 Angry Men',
            'description' => 'The jury in a New York City murder trial is frustrated by a single member whose skeptical caution forces them to more carefully consider the evidence before jumping to a hasty verdict.',
            'cover' => '5.jpg',
            'length' => '1h 36m',
            'audience' => '',
            'trailer' => 'https://www.youtube.com/watch?v=_13J_9B5jEk',
            'writers' => 'Reginald Rose (story)',
            'release_date' => '1957-4-10',
            'categories' => '1/2'
        ]);
        
        DB::table('films')->insert([
            'name' => 'Schindler\'s List',
            'description' => 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.',
            'cover' => '6.jpg',
            'length' => '3h 15m',
            'audience' => 'R',
            'trailer' => 'https://www.youtube.com/watch?v=gG22XNhtnoY',
            'writers' => 'Thomas Keneally (book), Steven Zaillian (screenplay)',
            'release_date' => '1994-02-04',
            'categories' => '1/4/5'
        ]);
        
        DB::table('films')->insert([
            'name' => 'The Lord of the Rings: The Return of the King',
            'description' => 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.',
            'cover' => '7.jpg',
            'length' => '3h 21m',
            'audience' => 'PG-13',
            'trailer' => 'https://www.youtube.com/watch?v=r5X-hFf6Bwo',
            'writers' => 'J.R.R. Tolkien (novel "The Return of the King"), Fran Walsh (screenplay), Philippa Boyens (screenplay)',
            'release_date' => '2003-12-17',
            'categories' => '1/3/6'
        ]);

        DB::table('films')->insert([
            'name' => 'Pulp Fiction',
            'description' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
            'cover' => '8.jpg',
            'length' => '2h 34m',
            'audience' => 'R',
            'trailer' => 'https://www.youtube.com/watch?v=s7EdQ4FqbhY',
            'writers' => 'Quentin Tarantino (stories), Roger Avary (stories)',
            'release_date' => '1994-10-14',
            'categories' => '1/2'
        ]);
        
        DB::table('films')->insert([
            'name' => 'The Good, the Bad and the Ugly',
            'description' => 'A bounty hunting scam joins two men in an uneasy alliance against a third in a race to find a fortune in gold buried in a remote cemetery.',
            'cover' => '9.jpg',
            'length' => '2h 58m',
            'audience' => 'R',
            'trailer' => 'https://www.youtube.com/watch?v=WCN5JJY_wiA',
            'writers' => 'Luciano Vincenzoni (story), Sergio Leone (story), Agenore Incrocci (screenplay)',
            'release_date' => '1967-12-26',
            'categories' => '6/7'
        ]);
        
        DB::table('films')->insert([
            'name' => 'The Lord of the Rings: The Fellowship of the Ring',
            'description' => 'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.',
            'cover' => '10.jpg',
            'length' => '2h 58m',
            'audience' => 'PG-13',
            'trailer' => 'https://www.youtube.com/watch?v=V75dMMIW2B4',
            'writers' => 'J.R.R. Tolkien (novel "The Fellowship of the Ring"), Fran Walsh (screenplay), Philippa Boyens (screenplay)',
            'release_date' => '2001-12-19',
            'categories' => '1/3/6'
        ]);
        
        // \App\Models\User::factory(10)->create();
    }
}
