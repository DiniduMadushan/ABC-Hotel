<?php
    require './Classes/Room.php';
    require './Classes/Reviews.php';
    use Classes\Reviews;
    use Classes\Room;
    
   $room= Room::showRoomDetails();
   
?>

<!DOCTYPE html>

<html data-bs-theme="light" lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Rating Form</title>
        <link rel="stylesheet" href="assets/css/review-Form.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        
    </head>
    <body>
        
        <?php
                $message="";
            if($_SERVER["REQUEST_METHOD"]==="POST"){
               $selected_room_name=$_POST["room_type"];
               $rating=$_POST["rate"];
               $review_body=$_POST["review"];
               
               $review=new Reviews($selected_room_name,  $rating, $review_body);
               $status=$review->addReview();
               
               if($status){
                  
                  $message="<p style='color:blue'>feedback send successfully.</p>";
               }else{
                   $message="<p style='color:red'>failed to send the feedback!</p>";
               }
               
            }
        
        ?>
        
        <section class="shadow contact-clean" style="background: #3269a8">
            <form id="feedbackForm" class="bg-dark border rounded border-secondary shadow-lg" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" style="background: rgb(248,248,249);">
                <h2 class="text-center text-white">Ratings and reviews</h2>
                <?=$message?>
                <div class="form-group mb-3">
                    <label class="form-label">&nbsp;Select the Room</label>
                    <select class="form-select"  name="room_type">
                        <?php
                        foreach ($room as $room){
                          ?>  
                        <option><?=$room->getRoomType();?></option>
                       <?php }?>
                    </select>
                    <br>
                </div>
                <div class="form-group mb-3">
                    <label for="rate" class="form-label">&nbsp;Select your Rating</label>
                    <select class="form-select"  name="rate">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>


                    </select>
                    <br>
                </div>

                <div class="form-group mb-3"><textarea class="form-control" name="review" placeholder="Review" rows="14" required/></textarea></div>
                <div class="form-group mb-3"><button class="btn btn-primary" type="submit">Post </button>&nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-primary" type="reset">Reset </button></div>
                <div class="form-group mb-3">
                    <br>
                    <p class="text-center text-info" style="font-size: 12px;">Copyright © 2023 UWU/CST. All Rights Reserved.</p>
                </div>
            </form>
        </section>
        
        
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/bs-init.js"></script>
</body>

</html>
