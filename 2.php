<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */

		$number1 = 10;
		$number2 = 20;
		$number3 = $number1 + $number2;
		 echo "<h1>$number3</h1>";
		 $str = 'Mahfuz';
		 echo $str;


		 // arrays
$numberList = array(2,3,5,8,66,4,5,);
echo $numberList[2];
print_r($numberList);
 echo "<br>";
//associative array
$names = array("First_name" => 'Edqin');

print_r($names);

		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>