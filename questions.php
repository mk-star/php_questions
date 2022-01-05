<?php
/*  <h3>Ques1 : Who is the father of PHP? </h3>
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
*/
$prompts = Array();
$question = array(
"Question"=>"What is the speed of light",
"options"=>[30000,2999792458,10000]
);

array_push($prompts,$question);

foreach($prompts as $prompt){
    echo ($prompt["Question"]);
    echo "<h3>".$prompt['Question']."</h3>";
    foreach($prompt["options"] as $option){
        echo '<li><input type="radio" name="q1" value="A" />'.$option.'</li>';
    }
}
?>
