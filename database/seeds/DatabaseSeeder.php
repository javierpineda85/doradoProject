<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // ahora creamos 5 grupos

        factory(App\Group::class)->create(['name' => 'PADRES']);
        factory(App\Group::class)->create(['name' => 'PROFESIONAL']);
        factory(App\Group::class)->create(['name' => 'ADMIN 1']);
        factory(App\Group::class)->create(['name' => 'ADMIN 2']);
        factory(App\Group::class)->create(['name' => 'ADMIN 3']);


        factory(App\Level::class)->create(['levelName' => 'Baja']);
        factory(App\Level::class)->create(['levelName' => 'Media']);
        factory(App\Level::class)->create(['levelName' => 'Alta']);
        
        //Ahora creamos 20 usuarios
        
        factory(App\User::class,20)->create()->each(function ($user) { 

            $profile = $user->profile_parent()->save(factory(App\Profile_parent::class)->make());

            
            $user->groups()->attach($this->array('PADRES'));
            

            $user->image()->save(factory(App\Image::class)->make([
                'url' => 'https://lorempixel.com/90/90/'
            ]));

        });

            //Ahora creamos 8 usuarios profesionales

        factory(App\User::class,8)->create()->each(function ($user) { 

            $profile = $user->profile_prof()->save(factory(App\Profile_prof::class)->make());

            

            $user->groups()->attach($this->array(rand(2,5)));
            

            $user->image()->save(factory(App\Image::class)->make([
                'url' => 'https://lorempixel.com/90/90/'
            ]));

        });
            
        //factory(App\School::class, 20)->create(); // crea 20 escuelas
        factory(App\Category::class)->create(['name' => 'PADRES']);
        factory(App\Category::class)->create(['name' => 'PROFESIONAL']);
        factory(App\Category::class)->create(['name' => 'ADMIN 1']);
        factory(App\Category::class)->create(['name' => 'ADMIN 2']);
        factory(App\Category::class)->create(['name' => 'ADMIN 3']);

        factory(App\Tag::class, 6)->create(); // crea 6 etiquetas
        factory(App\Profile_kid::class, 20)->create();

        // aqui crea 40 post
        
        /*factory(App\Post::class, 40)->create()->each(function($post){

            $post->image()->save(factory(App\Image::class)->make()); //crea una imagen
            $post->tags()->attach($this->array(rand(1,12))); //crea entre 1 y 12 tags

            $number_comments=rand(1,6); // crea con el FOR entre 1 y 6 comentarios 

            for ($i=1; $i < $number_comments; $i++) {  
                $post->comments()->save(factory(App\Comment::class)->make());
            }
        });

        factory(App\Video::class, 40)->create()->each(function($video){

            $video->image()->save(factory(App\Image::class)->make());
            $video->tags()->attach($this->array(rand(1,12)));

            $number_comments=rand(1,6);

            for ($i=1; $i < $number_comments; $i++) { 
                $video->comments()->save(factory(App\Comment::class)->make());
            }
        }); */
    }

    // esta funcion permite ser utilizada anteriormente para crear arrays con un
    // numero max determinado por los parametros que pasen las funciones $this->array(rand())
    public function array($max){
        $values=[];

        for ($i=1; $i < $max ; $i++) { 
            $values[]= $i;
        }

        return $values;
    }
}
