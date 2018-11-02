<?php
session_start();

$_SESSION["count"] = $_SESSION["count"]+1;
?>


<form action="another.php" target="_blank" method ="POST" >
    
    <?php $babyName = array(); ?>
   
    
    Top 5 Baby Names:    <br>
    <input type="radio"  id="item1"  name="babyNames[]"  value="Name 1" >
          <input type="text" id="name1"/> <br>
    <input type="radio"  id="item2"  name="babyNames[]" value="Name 2">
          <input type="text" id="name2"/> <br>
    <input type="radio"  id="item3"  name="babyNames[]"  value="Name 3" >
        <input type="text" id="name3"/> <br>
    <input type="radio"  id="item4"  name="babyNames[]"  value="Name 4" >
         <input type="text" id="name4"/> <br>
    <input type="radio"  id="item5"  name="babyNames[]"  value="Name 5" >
         <input type="text" id="name5"/> <br>
 
     <div>
        Favorite Name: <?php echo $_POST["name1"];?>
         
     </div>
    <br/><br/>
    <input type="submit" value="Save" />
  </form>
