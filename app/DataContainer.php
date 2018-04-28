<?php 

namespace App;


/**
* Data Container for Course & Instructor Name
* @author : Ahmed Hassan 
*/
class DataContainer 
{

	// Instructors List 
	private static $instructors = [
			'Dr. Bassem Shataa',
			'Dr. Mohamed El-Ashry',
			'Dr. Mohamed Abdel Sattar',
			'Dr. Rasha Moussa',
			'Assoc.Prof. Mohammed Khafagy',
			'Dr. Mamdouh Fathallah',
	];

	// Courses List
	private static $courses = [
			'Math I',
			'Math III',
			'Data Structure',
			'Microprocessor',
			'Electronics I',
			'English III',
			'Economics',
	];


	public static function getCourses($index = null){
		if(is_null($index))
			return self::$courses;
		else
			return self::$courses[$index];
	}


	public static function getInstructors($index = null){
		if(is_null($index))
			return self::$instructors;
		else
			return self::$instructors[$index];
	}
}