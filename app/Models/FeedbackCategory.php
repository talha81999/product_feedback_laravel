<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackCategory extends Model
{
    use HasFactory;
    protected $table      = "tbl_feedback_category";
    protected $primarykey = "category_id";
}
