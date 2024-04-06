<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Seo;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name'=>'indriya',
            'email'=>'indriya@gmail.com',
            'password'=>Hash::make('12345678'),
            'phone_number'=>'12345678',
        ]);

        Setting::create([
            'name'=>'Indriya',
            'email'=>'indriya@gmail.com',
            'phone_number'=>'9865302145',
            'address'=>'indriyagmailcom',
            'logo'=>'uploads/companyimage/indriya.png',
            'favicon'=>'uploads/companyimage/favicon.png',
            'common_image'=>'uploads/companyimage/indriya.png',
        ]);

        Seo::create([
            'meta_title'=>'Indriya',
            'meta_keyword'=>'Indriya',
            'meta_description'=>'Indriya',
            'og_image'=>'uploads/companyimage/indriya.png',
            'google_tagmanager'=>'uploads/companyimage/indriya.png',
            'google_analytics'=>'uploads/companyimage/indriya.png',
        ]);
    }
}
