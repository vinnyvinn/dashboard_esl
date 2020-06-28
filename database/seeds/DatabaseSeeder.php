<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder.
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AccessTableSeeder::class);
        $this->call(HistoryTypeTableSeeder::class);
        $this->call(EmailTemplateTypeTableSeeder::class);
        $this->call(EmailTemplatePlaceholderTableSeeder::class);
        $this->call(EmailTemplateTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(ModulesTableSeeder::class);

        Model::reguard();
        $this->call(UsersTableSeeder::class);
        $this->call(ApplicationmodulesTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(CompanyappsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
    }
}
