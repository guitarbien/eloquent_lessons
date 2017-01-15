# Laravel Eloquent 練習

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

8. 若要將資料表全部清空還原，該使用

        php artisan migrate:rollback

9. 執行完 rollback 之後若真的不要某張table了(例如 dogs)，再手動去將 /migrations/xxx_create_table_dogs.php 刪除，因為migrations的執行步驟都會被記錄在資料表 migrations中

10. 建立 model 只要使用 -m 就會按照 laravel 的命名習慣：”資料表複數，model class 單數”的規則來建立 models 和 migrations (-m 會自動拿 model 的名字轉為小寫，並加上複數 來建立 migration 檔案)

        php artisan make:model Dog -m

11. 實際產生資料表

        php artisan migrate
