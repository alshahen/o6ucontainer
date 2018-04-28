<?php

namespace App;

use App\DataContainer;
use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',  'name',  'desc',  'instructor',  'course',  'url',  'path',  'uploader'
    ];


    public function instructor(){
    	return $this->instructor = DataContainer::getInstructors($this->instructor);
    }
    public function course(){
    	return $this->coruse = DataContainer::getCourses($this->course);
    } 

    public function uploader(){
        return User::findOrFail($this->uploader)->name;
    }
}
