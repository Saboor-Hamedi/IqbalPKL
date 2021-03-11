<?php  require_once 'app/database/config.php';?>
<?php  require_once 'app/database/database.php';?>

<?php $db =  new database(); ?>


<?php 

 $profileimage = '';
 $userid = '';
 $imageError = '';
 $imageUploadedMessage = '';
 $output_dir = 'public/profile_image/';
 $randomNum = time();
 if(isset($_POST['profileUploadBtn'])){
   //  $profileimage = mysqli_real_escape_string($db->link, $_POST['profileimage']);
    $userid = mysqli_real_escape_string($db->link, $_POST['userid']);
    if(empty($_POST['userid'])){
       $imageError = 'ID required';
    }else{
       $profileimage = validation($_POST['userid']);
    }
    if(empty($_POST['profileimage'])){
       $imageError = 'Image required';
    }else{
       $profileimage = validation($_POST['profileimage']);
    }
    if(!$imageError == ''){   

    }else{
      $imageName = str_replace(' ', '-', strtolower($_FILES['image']['name'][0]));
      $imageType = $_FILES['image']['type'][0];
      $imageExt  = substr($imageName, strrpos($imageName, '.'));
      $imageExt= str_replace('.','', $imageExt);
      $imageName = preg_replace("/\.[^.\s]{3,4}$/", "", $imageName);
      $newImageName = $imageName. '_' .$randomNum.'.'.$imageExt;
      $ret[$newImageName] = $output_dir.$newImageName;
      // make directory if deos not exists
      if(!file_exists($output_dir)){
         @mkdir($output_dir, 0777);

      }
      move_uploaded_file($_FILES['image']['tmp_name'][0], $output_dir.'/'.$newImageName);
      $sql = 'INSERT INTO profile (admin_id, profile_image) VALUES ("'.$userid.'", "'.$newImageName.'")';
      
      if(mysqli_query($db->link, $sql)){
         $imageUploadedMessage = 'Profile uploaded';
      }else{
         $imageUploadedMessage = 'Image not uploaded'. $db->error;
      }

  
    }
    

 }
 
 function validation($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }