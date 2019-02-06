<?php

use Illuminate\Database\Seeder;

class PluginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $data = array(
            [
                'status' => 1,
                'name' => 'Dracula Hosts',
                'shortname' => 'Hosts',
                'page' => '/dracula/hosts',
                'img' => 'https://i.postimg.cc/wjP4MK4P/59f876c83cec115efb36237f.png',
                'about' => 'Lista de hosts infectados.',
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()         
            ]            
        );
        if(DB::table('plugins')->where('page','=','/dracula/hosts')->count()<=0)
            DB::table('plugins')->insert($data);
    }
}
