<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            ['title' => 'Goblin', 'genre_id' => 1, 'photo' => 'Goblin', 'description' => 'Kim Shin (Gong Yoo) is a decorated military general during the Goryeo Dynasty who is betrayed by the jealous king he served. When Kim Shin is faced with death instead of honor after fighting a mighty battle, God turns Kim Shin into a goblin instead, tasked with protecting certain people from a life of misery.', 'rating' => 5],
            ['title' => 'Oh My Venus', 'genre_id' => 1, 'photo' => 'Venus', 'description' => 'Young-ho is a personal trainer of Hollywood stars in America where he uses the alias John Kim. After a Hollywood scandal with a famous actress puts the spotlight on him, Young-ho returns to Korea to wait for the scandal to die down. On the plane back to Korea, Young-ho saves Kang Joo-eun after she suddenly collapses.', 'rating' => 4.5],
            ['title' => 'Cheese in the Trap', 'genre_id' => 1, 'photo' => 'Cheese', 'description' => 'The drama focuses on the life and relationships of a group of university students, particularly the difficult relationship between hard-working scholarship student Hong Seol (Kim Go-eun) and her deceptively kind senior, Yoo Jung (Park Hae-jin).', 'rating' => 3.5],
            ['title' => 'The K2', 'genre_id' => 1, 'photo' => 'K2', 'description' => 'The K2 tells the story of a bodyguard (Ji Chang Wook) who is dedicated to his country but is betrayed by it.  When seeking revenge, he becomes involved with a woman (Yoona) who is the secret daughter of a presidential candidate.', 'rating' => 4],
            ['title' => "It's Okay to Not Be Okay", 'genre_id' => 1, 'photo' => 'Okay', 'description' => "Moon Gang-tae (Kim Soo-hyun) lives with his autistic older brother Moon Sang-tae (Oh Jung-se). They frequently moves from town to town, ever since Sang-tae witnessed their mother's murder. Gang-Tae takes up jobs as a caretaker in a psychiatric ward at every place they settle in. While working in a hospital, he meets a famous children's book writer Ko Moon-young (Seo Ye-ji),who some people suggest has antisocial personality disorder.", 'rating' => 4.9],
            ['title' => 'Masha and the Bear', 'genre_id' => 2, 'photo' => 'Masha', 'description' => 'The show focuses on the adventures of a little girl named Masha and a fatherly bear that always keeps her safe from disasters.', 'rating' => 5],
            ['title' => 'Oggy and the Cockroaches', 'genre_id' => 2, 'photo' => 'Oggy', 'description' => 'Oggy, an anthropomorphic cat, would prefer to spend his days watching television and eating, but is continuously pestered by three roaches: Joey, Marky and Dee Dee.', 'rating' => 4],
            ['title' => 'Bernard', 'genre_id' => 2, 'photo' => 'Bernard', 'description' => 'The show centers on a curious polar bear named Bernard, whose bumbling slapstick antics and clumsiness typically result in the bear being knocked unconscious or being severely injured by the end of an episode, Bernard almost does not speak, but he does communicate through guttural sounds.', 'rating' => 5],
            ['title' => 'Tom and Jerry', 'genre_id' => 2, 'photo' => 'Tom', 'description' => 'Series of comedy short films created in 1940 by William Hanna and Joseph Barbera. Best known for its 161 theatrical short films by Metro-Goldwyn-Mayer, the series centers on the rivalry between the titular characters of a cat named Tom and a mouse named Jerry.', 'rating' => 5],
            ['title' => 'Smallville', 'genre_id' => 3, 'photo' => 'Smallville', 'description' => 'A young Clark Kent struggles to find his place in the world as he learns to harness his alien powers for good and deals with the typical troubles of teenage life in Smallville, Kansas.', 'rating' => 3],
            ['title' => 'Arrow', 'genre_id' => 3, 'photo' => 'Arrow', 'description' => 'Arrow follows billionaire playboy Oliver Queen (Stephen Amell), who claimed to have spent five years shipwrecked on Lian Yu, a mysterious island in the North China Sea, before returning home to Starling City (later renamed "Star City") to fight crime and corruption as a secret vigilante whose weapon of choice is a bow and arrow.', 'rating' => 5],
            ['title' => 'Friends', 'genre_id' => 3, 'photo' => 'Friends', 'description' => 'Ross Geller, Rachel Green, Monica Geller, Joey Tribbiani, Chandler Bing, and Phoebe Buffay are six 20 something year olds living in New York City. Over the course of 10 years, these friends go through family, love, drama, friendship, and comedy.', 'rating' => 5],
            ['title' => 'Daredevil', 'genre_id' => 3, 'photo' => 'Daredevil', 'description' => 'A blind lawyer by day, vigilante by night. Matt Murdock fights the crime of New York as Daredevil.', 'rating' => 4.3]
        ]);
    }
}
