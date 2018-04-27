<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Issue extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function category(){
        return $this->belongsTo("App\Category", "category_id");
    }

    public function project(){
        return $this->belongsTo("App\Project", "project_id");
    }

    public function reporterUser(){
        return $this->belongsTo("App\User", "reporter");
    }

    public function assignTo(){
        return $this->belongsTo("App\User", "assigned_to");
    }

    public function getIssueNumberAttribute(){
        return str_pad($this->id, 6, '0', STR_PAD_LEFT);
    }
}
