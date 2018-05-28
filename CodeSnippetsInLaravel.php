 /*
 Multiple image upload to server in Laravel 5
 */
 
 //Get image requests and count of image files
$images = $request->file('images');
$image_count = count($images);
	
  //for loop
for($i = 0;$i<$image_count;$i++)
{
    //Upload to server 
		move_uploaded_file($_FILES['images']['tmp_name'][$i], "images/gallery/".$this->replace_tr($request->input('name')).$i.".".pathinfo($_FILES['images']['name'][$i],PATHINFO_EXTENSION));
	 
    //Getting and saving path of image
    $imagesName ="/public/images/gallery/".$this->replace_tr($request->input('name')).$i.".".pathinfo($_FILES['images']['name'][$i],PATHINFO_EXTENSION);
	  
    // Creating record in images table for each image
    $newImage = new Images;
		$newImage->album_id = $new_album_id;
		$newImage->subtext =$request->input('subtext');
		$newImage->image=$imagesName;
		$newImage->save();
				 	
}
