<?php

namespace App\Services;

use App\Blog;
use App\Tags;
use App\Users;
use App\Facts;
use App\Contactus;
use DB;
use App;

class BlogService{

	private $userService;

	public function __construct(){
	}

	
	public function saveBlog($blog,$tags,$blogID){
		$b= $this->handleBlogUpdate($blog,$blogID);
		$b->tags()->detach();
        foreach ($tags as $tempTags) {
        	$t= $this->handleTags($tempTags);
        	$b->tags()->save($t);
        }
	}

	public function searchTags($val){
		return Tags::where('tagName', 'LIKE', "%$val%")->get();
	}

	private function handleTags($tempTags){
		if($t=Tags::where('tagName','=',$tempTags['tagName'])->first()){
			return $t;
		}
    	$t= new Tags();
        $t= $t->createFromArray($tempTags);
        return $t;
	}

	private function handleBlogUpdate($blog,$blogID){
		if($blogID){
			$b= $this->getBlog($blogID);
			$b->createFromArray($blog);
			unset($b->tagList);
	        $b->save();
		}else{
			$b= new Blog();
	        $b= $b->createFromArray($blog);
	        $res=$b->save();
    	}
    	return $b;
	}

	public function getBlog($blogID){
		if(!$blogID){
			return NULL;
		}
		$blog= Blog::where('id','=',$blogID)->first();
		if(!$blog){
			return NULL;
		}
		$tagArr=[];
		foreach ($blog->tags as $t){
			$tagArr[]=$t->tagName;
		}
		$blog->tagList= implode(",",$tagArr);

		return $blog;
	}
	
}
