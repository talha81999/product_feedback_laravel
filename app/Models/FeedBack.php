<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    use HasFactory;
    protected $table      = "tbl_feedback";
    protected $primarykey = "feedback_id";
}