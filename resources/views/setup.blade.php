

<h1>phpmyadminga borib data yaratamin</h1>
<h1>.env file togirlaymiz</h1>
<h1> php artisan tinker</h1>
<H1>>>> DB::connection()->getPdo();
    PDOException with message 'SQLSTATE[HY000] [1045] Access denied for user 'mysql'@'localhost' (using password: YES)'


    dont fix that section
</H1>

{{--//////////////////////10////////////////////////--}}

{{--jadval yaratish u-n table yaratib beradi--}}
php artisan make:migration create_companies_table



php artisan migrate  //dont work

php artisan migrate:rollback  //orqaga qaytaradi



composerda chiqarildi





model yaratish
php artisan make:model


model standatlari


//  jadval nomi -  positions
//  model nomi ->  Position

{{-- php artisan make:model Position --migration--}}  model yasash migrate bilan birga yasab beradi
bu model appning ichidagi model filaening ichida bo'ladi


{{-- php artisan make:model Company--}}  modelning o'zini yaratish






{{--/////////////////////////////////////////////////--}}

factoriesning vazifasi sohta malumotlar generatsiya qiladi

seederslar esa usha sohta malumotlarni malumotlat bazasiga qo'shiba beradi











////factory hosil qilish
php artisan make:factory CompanyFactory



////seeder hosil qilish
php artisan make:seed CompanySeeder





controller yaratish
php artisan make:controller CompaniesController  --resource


natijani ko'rish uchun
php artisan route:list







{{--////////////17////////////--}}
php artisan make:rule PhoneNumber





////23/////
composer require laravel/ui   //install qilib olamiz

php artisan ui bootstrap --auth  //install qilib olamiz  yes yes bosamiz

npm install && npm run dev



Thank you your watching
