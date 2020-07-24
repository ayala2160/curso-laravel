<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    pubic function expenseReport(){
        return $this->belongsTo(ExpenseReport::class);
    }
}
