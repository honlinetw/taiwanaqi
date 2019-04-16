<?php
date_default_timezone_set("Asia/Taipei");
$link = mysqli_connect("localhost","s1070205","s1070205","s1070205");
mysqli_query($link,"set names utf8");
    if(empty($_COOKIE["user"])){
    $curl = curl_init();
    curl_setopt($curl,CURLOPT_USERAGENT,"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36");
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);  
    curl_setopt($curl,CURLOPT_URL,"http://opendata.epa.gov.tw/webapi/Data/REWIQA/?orderby=SiteName&skip=0&top=1000&format=json");
    $result=curl_exec($curl);
    curl_close($curl);
    $array= json_decode($result,true);    
    $sql="select * from taiwanapi order by id desc";
    $ro=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($ro);
        foreach($array as $name){
                if($name["PublishTime"] == $row["PublishTime"])break;
                if($name["PublishTime"] > $row["PublishTime"]){
                $sql="insert into taiwanapi (id,Day,SiteName,County,AQI,Pollutant,Status,PublishTime) value(null,'".date('Y-m-d')."','".$name["SiteName"]."','".$name["County"]."','".$name["AQI"]."','".$name["Pollutant"]."','".$name["Status"]."','".$name["PublishTime"]."')";
                mysqli_query($link,$sql);
                }
        }
        setcookie("user","airqi",time()+360);
    }
    

?>