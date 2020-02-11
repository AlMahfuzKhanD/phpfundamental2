<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
if(3>10){
    echo "three is greater than ten";
}else if(10<3){
    echo "10 is less than three";
}else{
    echo "I love php";
}
$i=0;
for($i=0;$i<11;$i++ )
    echo $i ."<br>";
	//switch statements
$num =38;
switch ($num){
    case 34:
        echo "it is 34";
        break;
    case 35:
        echo "it is 35";
        break;
    case 36:
        echo "it is 35";
        break;
    case 36:
        echo "it is 36";
        break;
    case 37:
        echo "it is 37";
        break;
    case 38:
        echo "it is 38";
        break;
    default:
        echo "nothing matched";
        break;
}
?>








</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>