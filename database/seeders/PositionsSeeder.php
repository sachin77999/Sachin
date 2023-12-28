<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::insert("INSERT INTO positions(`positions`,`deleted_at`,`created_by`,`updated_by`,`created_at`,`updated_at`) 
        VALUES
        ('County Super Agent',NULL,NULL,NULL,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
        ('County Agent - Inside',NULL,NULL,NULL,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
        ('County Agent - Outside',NULL,NULL,NULL,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
        ('County campaign Manager',NULL,NULL,NULL,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
        ('County Campaign Team Member',NULL,NULL,NULL,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
        ('County Mobilizer',NULL,NULL,NULL,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
        ('Constituency Super Agent',NULL,NULL,NULL,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
        ('Constituency Agent - Inside',NULL,NULL,NULL,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
        ('Constituency Agent - Outside',NULL,NULL,NULL,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
        ('Constituency Campaign manager',NULL,NULL,NULL,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
        ('Constituency Campaign Team Member',NULL,NULL,NULL,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
        ('Constituency Mobilizer',NULL,NULL,NULL,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
        ('Ward Super Agent',NULL,NULL,NULL,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
        ('Ward Agent',NULL,NULL,NULL,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
        ('Ward Campaign manager',NULL,NULL,NULL,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)
        ");
    }
}
