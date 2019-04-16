<?php
$link = mysqli_connect("localhost","s1070205","s1070205","s1070205");
mysqli_query($link,"set names utf8");
$sql="select * from taiwanapi where County='".$_POST["id"]."'and PublishTime ='".$_POST["time"]."'";
$ro=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($ro);
$num=mysqli_num_rows($ro);
?>

<?php 
if($num>0){
    do{?>
<tr>
   
    <td class="card-text" align="center"><?=$row["SiteName"]?></td>
    <td class="card-text" align="center"><?=$row["AQI"]?></td>
    <td class="card-text" align="center"><?php 
        if($row["Pollutant"]==null){
            echo "無資料";
        }else{
            echo $row["Pollutant"];
        }

    ?></td>
    <td align="center"><?=$row["Status"]?></td>

</tr>
<?php 
    }while($row=mysqli_fetch_assoc($ro));
}else{?>
    <tr>
        <td class="card-text" align="center" colspan="4"><h4>查無資料</h4></td>
    </tr>
<?php
}
?>