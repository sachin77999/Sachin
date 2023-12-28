<?php

namespace App\Exports;

use App\Models\AppModelsCategoryController;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Http\Controllers\admin\CategoryController;
use App\Models\Category;

class StudentExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Category::getAllStudents());
    }

    public function headings():array{
        return [
            'Id',
            'Name',
            'Category Description',
            'Seo Information',
            'Slug'
        ];
    }
}
