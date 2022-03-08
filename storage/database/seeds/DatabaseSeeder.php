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
        // $this->call(UsersTableSeeder::class);
        $this->call([
            UsersTableSeeder::class,
            UsersLevelSeeder::class,
            AdminsTableSeeder::class,
            AdminsRoleSeeder::class,
            TechsTableSeeder::class,
            CompanyInfoTableSeeder::class,
            TasksLevelSeeder::class,
            TasksStatusSeeder::class,
            UserTypeSeeder::class,
            LacakStatusSeeder::class,
            DepartmentSeeder::class,
            KnowledgeCategorySeeder::class,
            TechsDocsCatsSeeder::class,
            ProjectReportCategoryStatus::class,
            ProjectToolReportStatus::class,
            ProjectExpenseStatusSeeder::class,
            ProjectCategorySeeder::class,
            CashAdvanceStatusSeeder::class,
            ProjectToolStatusSeeder::class,
            ProjectsTaskStatusSeeder::class,
            ProjectPurchaseRequisitionSeeder::class,
        ]);
    }
}
