<?php

namespace App;

use Illuminate\Database\eloquent\Model;

$categories = [];

foreach (app('Webkul\Category\Repositories\CategoryRepository')->getVisibleCategoryTree(core()->getCurrentChannel()->root_category_id) as $category) {
    if ($category->slug)
    array_push($categories, $category);
}