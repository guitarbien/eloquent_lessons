# Laravel Eloguent 練習

1. 使用 artisan migrate 準備 create table dogs 的 migration 語法

        php artisan make:migration create_table_dogs --create=dogs

2. 在語法後若加上 `--create=dogs` 會在 up() 中預先寫好了 create 語法

        Schema::create('dogs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

3. 加入 *name* 欄位

4. 根據 .env 的資料庫資訊去實際產生資料表，執行 database/migrations 裡面的每個語法

        php artisan migrate

5. 產生 dogs seeder 檔案

        php artisan make:seeder DogsTableSeeder

6. 在 dogs seeder 檔案中準備資料

        DB::table('dogs')->truncate();
        DB::table('dogs')->insert(['name' => 'Joe']);
        DB::table('dogs')->insert(['name' => 'Jock']);
        DB::table('dogs')->insert(['name' => 'Jackie']);
        DB::table('dogs')->insert(['name' => 'Jane']);


7. 實際在資料表 dogs 中產生剛剛準備的資料

        php artisan db:seed --class=DogsTableSeeder
