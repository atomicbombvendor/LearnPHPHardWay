<?php
echo 'test';
echo 'test';
echo 'test';
echo 'test';
$i=0;
echo '<table width="800" border="1">';

while($i<300){
    //0 - 9 为一行
    //10 -19 为一行
    //因此，每一行都能够被10求默，如为为10的时候，应该显示行开始的标签
    if($i%10 == 0){
        //为了隔行变色，每20，40，60每行的颜色是不同的，因此我们又可以再进行一次取余运算
        if($i%20==0){
            echo '<tr>';
        }else{
            echo '<tr bgcolor="pink">';
        }
    }

    echo '<td>'.$i.'</td>';

    $i++;
    //同理，每一行结束是不是应该有一个</tr>结束标签呢？
    if($i%10==0){
        echo '</tr>';
    }
}
echo '</table>';
echo 'test'
?>