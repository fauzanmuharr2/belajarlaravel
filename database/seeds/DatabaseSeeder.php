<?php

use Illuminate\Database\Seeder;
use App\Barang;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Barang::class, 100)->create();
        //$this->call(PostTablePenggajian::class);
    }
}
