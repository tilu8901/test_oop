<?php 

	/* Variables
	*	$image - used to store the image passed in from the form
	*	$effect - used to store the selected effect from the form
	*	$radius - used to store the entered radius from the form
	*	$size - used to store the entered size from the form
	*   $image_file - the file name/path of the actual image file
	*/

	require_once('func_effect.php');
	require_once('func_size.php');
	require_once('func_radius.php');
	class image_framework {
		private $image;
		private $new_image;
		private $effect;
		private $radius;
		private $size;
		private $image_file;
		
		function __construct($image_file,$effect,$radius,$size){
			$this->effect = $effect;
			$this->radius = $radius;
			$this->size = $size;
			$this->image_file = $image_file;
		}
		function apply(){ //This is the function to be called to start the image manipulations
			if(!is_string($this->image_file)){
				echo "[Error] - The Image Name/Path Must Be A String.<br>";
				exit(0);
			}
			if(!file_exists ( $this->image_file )){
				echo "[Error] - The Image File Does Not Exist.<br>";
				exit(0);
			}
			$this->image = imagecreatefrompng($this->image_file);
			if(empty($this->getImage())){
				/*
				* Perform Error Handling 
				*/
				echo "[Error] - The Image Is Empty.<br>";
				exit(0);
			}
			$new_image = $this->getImage();
			if(!empty($this->getEffect())){
				$obj = new func_effects($this->getEffect());
				$new_image = $obj->change_effect($new_image);
			}
			else{
				echo "[Error] - Effect Is Empty, No Changes Applied.<br>";
			}
			if(!empty($this->getRadius())){
				$obj = new func_radius($this->getRadius());
				$new_image = $obj->change_radius($new_image);
			}
			else{
				echo "[Error] - Radius Is Empty, No Changes Applied.<br>";
			}
			if(!empty($this->getSize())){
				$obj = new func_size($this->getSize());
				$new_image = $obj->resize_image($new_image);
			}
			else{
				echo "[Error] - Size Is Empty, No Changes Applied.<br>";
			}
		}
		function getSize(){
			return $this->size;
		}
		function getRadius(){
			return $this->radius;
		}
		function getEffect(){
			return $this->effect;
		}
		function getImage(){
			return $this->image;
		}
	}
	/*	**Do Your Testings Here**
	*	When the 'Apply' button is clicked, a new instance of $framework will be called.
	*	The image,effect,radius,size values should be passed into the constructor when the object is called.
	*   $framework->apply() will then be called to start the proccess.
	*/
	$framework = new image_framework("dogs.png","effect2",70,30); //Input Values - image name,effect name,radius,size
	$framework->apply();
?>