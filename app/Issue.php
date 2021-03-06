<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10/5/18
 * Time: 9:35 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'project_id',
        'reporter', 'assignee', 'type', 'status', 'priority'
    ];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function reporter()
    {
        return $this->belongsTo('App\User', 'reporter', 'id');
    }

    public function assignee()
    {
        return $this->belongsTo('App\User', 'assignee', 'id');
    }
}