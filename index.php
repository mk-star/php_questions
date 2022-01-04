<?php
if($_POST['submit']) {

	if($q1=='' || $q2 =='' || $q3 =='')
    $q1 = $_POST["q1"];
	$q2 = $_POST["q2"];
	$q3 = $_POST["q3"];


	if($q1=='' || $q2 =='' || $q3 =='') {
		echo '<h2>Please answer all questions.</h2>';
	}
	else {
		$score = 0;
		if($q1 == "A") { 
		$score++;
		}
		if($q2 == "B") { 
		$score++;
		}
		if($q3 == "C") {
		$score++;
		}
	        $score = $score	/ 3 *100;
		
		if($score < 50)
		{
		echo '<h2>You need to score at least 50% to pass the exam.</h2>';
		}
		else {
		echo '<h2>You have passed the exam and scored '.$score.'%.</h2>';
		}
	}
}
?>

<html>
<head>
<title>PHP Multiple Choice Questions and Answers</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1>Multiple Choice Questions Answers</h1>
<p>Please fill the details and answers the all questions-</p>



<div class="container-fluid">
<hr class="mt-2 mb-3"/>
    <form action="" method="post">

        <h3>Ques1 : Who is the father of PHP? </h3>
        <div class="form-group"> 
            <ol type="A">
            <li>
                <input type="radio" name="q1" value="A" />Rasmus Lerdorf
            </li>
            <li>
                <input type="radio" name="q1" value="B" />Larry Wall
            </li>
            <li>
                <input type="radio" name="q1" value="C" />Zeev Suraski
            </li>
            </ol>
        </div>
        <hr class="mt-2 mb-3"/>

        <div class="form-group"> 
            <h3>Ques2 : Which of the functions is used to sort an array in descending order?</h3>
            <ol type="A">
            <li>
            <input type="radio" name="q2" value="A" />sort()
            </li>
            <li>
            <input type="radio" name="q2" value="B" />asort()
            </li>
            <li>
            <input type="radio" name="q2" value="C" />rsort()
            </li>
            </ol>
        </div>
        <hr class="mt-2 mb-3"/>

        <div class="form-group"> 
            <h3>Ques3 : Which version of PHP introduced the instanceof keyword?</h3>
            <ol type="A">
            <li>
                <input type="radio" name="q3" value="A" />PHP 4 
            </li>
            <li>
            <input type="radio" name="q3" value="B" />PHP 5
            </li>
            <li>
            <input type="radio" name="q3" value="C" />PHP 6
            </li>
            </ol>
        </div>
        <hr class="mt-2 mb-3"/>

        <div class="form-group">
        <input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
        </div>
    </form>
</div>
</div>
</body>
</html>