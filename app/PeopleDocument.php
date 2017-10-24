<?php

namespace App;

use Image;
use Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\File;

class PeopleDocument extends Model
{
    protected $fillable = ['person_id', 'path', 'user_id', 'name'];

    protected $file;

    protected $person;

    
    public static function fromFileAndPerson($file, $name, $person)
    {
    	$document = new static;

    	$document->file = $file;

    	$document->person = $person;

    	$document->person_id = $person->id;

    	$document->user_id = auth()->id();

    	$document->name = $name;

        $document->store();

        return $document;
    }

 
    private function store()
    {
       
        $this->path = Storage::putFile($this->baseDir(), $this->file, 'public'); 


	//	$this->thumbnail_path = sprintf("%s/thumbnails/tn-%s", $this->baseDir(), basename($this->path));


        $this->path = Storage::disk('s3')->url($this->path);


       // $this->makeThumbnail();

    }

    public function saveWithResponse()
    {
    	if($this->save())
    	{
    		return true;
        }
            
        return false;
    }


    protected function makeThumbnail()
    {
        $image = Image::make($this->file);

		$image->fit(375, 250, function ($constraint) {
		    $constraint->aspectRatio();
		});

		Storage::put($this->thumbnail_path, (string) $image->encode(), 'public');    

		$this->thumbnail_path = Storage::disk('s3')->url($this->thumbnail_path);
    }


    protected function baseDir()
    {
    	return 'uploads/people/' . $this->person->id . '/documents';
    }
}
