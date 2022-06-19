<?php 
if($xp<=10){
    $medaltype = "Voyaging Novice";
    $medalcolor = "white";
}
if($xp>10){
    $medaltype = "Bronze Medal Advanced Beginner";
    $medalcolor = "#b08d57";
}
if($xp>100){
    $medaltype = "Silver Medal Compentency";
    $medalcolor = "#C0C0C0";
}
if($xp>100){
    $medaltype = "Gold Medal Mastery";
    $medalcolor = "#ffdc73";
}
if($xp>500){
    $medaltype = "Diamond Level Angel";
    $medalcolor = "#b9f2ff ";
}
?>
  <div class="main">
 	 	<div class="medaldetail" style="background-color:<?php echo $medalcolor?>">
 	 		<center><?php echo $medaltype ?></center>
 	 	</div>
 	 	<div class="userdetails" style="background-color:#6b8dfa">
 	 				Username: <b><?php echo $Username ?></b>
 	 	</div>
 	 	<div class="numberofposts" style="background-color:#6b8dfa">
 	 				Number of Posts: <b><?php echo $xp?></b>
 	 	</div>
 	 	<div class="subject">
 	 		<?php echo $Section . " Board - " . $Subject ;?>
 	 	</div>
 	 	<?php 
 	 	for($x=2; $x<=$maxvalue; $x++) {
 	 	    $xp = "xp" . strval($x);
 	 	    $xp = $$xp;
 	 	    
 	 	    $Username = "Username" . strval($x);
 	 	    $Username = $$Username;
 	 	    
 	 	    if($xp<=10){
 	 	        $medaltype = "Voyaging Novice";
 	 	        $medalcolor = "white";
 	 	    }
 	 	    if($xp>10){
 	 	        $medaltype = "Bronze Medal Advanced Beginner";
 	 	        $medalcolor = "#b08d57";
 	 	    }
 	 	    if($xp>100){
 	 	        $medaltype = "Silver Medal Compentency";
 	 	        $medalcolor = "#C0C0C0";
 	 	    }
 	 	    if($xp>100){
 	 	        $medaltype = "Gold Medal Mastery";
 	 	        $medalcolor = "#ffdc73";
 	 	    }
 	 	    if($xp>500){
 	 	        $medaltype = "Diamond Level Angel";
 	 	        $medalcolor = "#b9f2ff ";
 	 	    }
 	 	    $yo1 = "medaldetails" . strval($x);
 	 	    $yo2 = "userdetails" . strval($x);
 	 	    $yo3 = "numberofposts" . strval($x);
     	 	echo "<div class=$yo1 style='background-color: $medalcolor' >";
     	 	echo '<center>' . $medaltype . '</center>';
     	 	echo '</div>';
     	 	echo "<div class=$yo2 style='background-color: #6b8dfa' >";
     	 	echo '			Username: <b>' . $Username . '</b>';
     	 	echo '</div>';
     	 	echo "<div class=$yo3 style='background-color: #6b8dfa' >";
     	 	echo '			Number of Posts: <b>' . $xp . '</b>';
     	 	echo '</div>';
     	 }
 	 	?>
 	 	<div class="message1">
 	 		<?php echo $messagefirst;?>
 	 	</div>
 	 	<?php
        if(isset($messagesecond)){
            echo '<div class="message2">';
            echo $messagesecond;
            echo '</div>';
        }
        if(isset($messagethird)){
            echo '<div class="message3">';
            echo $messagethird;
            echo '</div>';
        }
        if(isset($messagefourth)){
            echo '<div class="message4">';
            echo $messagefourth;
            echo '</div>';
        }
        if(isset($messagefifth)){
            echo '<div class="message5">';
            echo $messagefifth;
            echo '</div>';
        }
        if(isset($messagesixth)){
            echo '<div class="message6">';
            echo $messagesixth;
            echo '</div>';
        }
        if(isset($messageseventh)){
            echo '<div class="message7">';
            echo $messageseventh;
            echo '</div>';
        }
        if(isset($messageeighth)){
            echo '<div class="message8">';
            echo $messageeighth;
            echo '</div>';
        }
        if(isset($messageninth)){
            echo '<div class="message9">';
            echo $messageninth;
            echo '</div>';
        }
        if(isset($messagetenth)){
            echo '<div class="message10">';
            echo $messagetenth;
            echo '</div>';
        }
        ?>
      <div class="footer">
        <center><b>Share your thoughts on this discussion here!!!</b></center>
      	<textarea rows=6 placeholder="What are your thoughts?"></textarea>
      	<div class="buttontop submit"><center><b>Post</b></center></div>
      </div>
  </div>
</div>