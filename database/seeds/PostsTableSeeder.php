<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            array(
                [
                    'title' => "Php is awesome",
                    'alias' =>"php_is_awesome",
                    'intro' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. ",
                    'body' => "orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. ",
                ],
                [
                    'title' => "Laravel 5.4",
                    'alias' =>"Laravel5_4",
                    'intro' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. ",
                    'body' => "orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. ",
                ],
                [
                    'title' => "Third",
                    'alias' =>"third",
                    'intro' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. ",
                    'body' => "orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. ",
                ]
            )
    );
    }
}
