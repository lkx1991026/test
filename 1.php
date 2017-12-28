<?php
    $salary=$_POST['salary']??0;
    if($salary>13500){
        $tax=($salary-3500)*0.25;
    }elseif($salary>=9000){
        $tax=($salary-3500)*0.2-555;

    }elseif($salary>=5000){
        $tax=($salary-3500)*0.1-105;
    }elseif($salary>=3500){
        $tax=($salary-3500)*0.03;
    }
$salary_after_tax=$salary-$tax;
;
?>


    <form action="" method="post">
        <input type="number" name="salary" placeholder="请输入全额工资" value="<?=$salary?>"><br/>
        <input type="text" id="tax" value="<?=$tax??''?>"><br/>
        <input type="text" id="salary-after-tax" value="<?=$salary_after_tax??''?>"><br/>
        <input type="submit" value="提交" onclick="calculate()">
    </form>


