<?php  /* new post add krne liye */
include "config.php";
if(isset($_FILES['fileToUpload'])){  /* ye chack kiya ki ye jo input hea isme file koi upload huyi hea ya nhi  */
    $errors=array();

    $file_name=$_FILES['fileToUpload']['name'];   /* ye file ko upload krne ke liye super global variable ka use kiya */
    $file_size=$_FILES['fileToUpload']['size'];
    $file_tmp=$_FILES['fileToUpload']['tmp_name'];
    $file_type=$_FILES['fileToUpload']['type'];
    $file_ext=end(explode ('.',$file_name));  /* ye explode krke nikala ki file ka last name kya hea */
    $extension=array("jpeg","jpg","png");  /* ye file chack kiya */
    if(in_array($file_ext,$extension)===false){  /* agar iske bahr upload hoti hea te ye call hoga */
        $errors[]="This Extension file not allowed, please a JPG or PNG files";
    }
    if($file_size>2097152){   /* agr file ka size jyada hoga to ye call hoga */
        $errors[]="File size must be 2mb or lower";
    }
    if(empty($errors)===true){  /* agr yha tak koi bi problem nhi ati hea upload krne me to file yha pr upload hogi */
        move_uploaded_file($file_tmp,"upload/".$file_name); /* ye upload kiya */
    }else
    {
        print_r($errors);
        die();
    }

}

session_start();  /* ye session ka use kiya */
$title=mysqli_real_escape_string($conn,$_POST['post_title']);   /* ye post title ke liya */
$description=mysqli_real_escape_string($conn,$_POST['postdesc']);  /* ye decription ke liye */
$category=mysqli_real_escape_string($conn,$_POST['category']); /* ye konsi categorry ke liya */
$date=date("d M,Y");  /* ye date ke liye */
$author=$_SESSION['user_id'];  /* session value utha li yha pr use krli */

$sql="INSERT INTO post(title,description,category,post_date,author,post_img)  /* ye post insert krega */
                values('{$title}','{$description}',{$category},'{$date}',{$author},'{$file_name}');"; 
$sql .="UPDATE category set post=post+1 where category_id={$category}"; /* ye category insert krega */
    if(mysqli_multi_query($conn,$sql)){  /* suucess insert hoti hea  */
        header("location:post.php");  /* is page shoe krdega */
    }
    else{
        echo "<div class='alert alert-danger'>Query Failed</div>";
    }

?>