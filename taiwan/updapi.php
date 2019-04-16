<?php
date_default_timezone_set("Asia/Taipei");
$link = mysqli_connect("localhost","s1070205","s1070205","s1070205");
mysqli_query($link,"set names utf8");
if(!empty($_POST["upd"])){
//使用postman確認API是否可以使用
    //初始化CURL
    $curl = curl_init();
    //設定CURL用戶代理讓對方識別發出請求的軟體類型
    //https://developer.mozilla.org/zh-TW/docs/Web/HTTP/Headers/User-Agent 
    curl_setopt($curl,CURLOPT_USERAGENT,"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36");

    //設定CURL是否驗證伺服器憑證
    //預設是true，如果沒有做任何SSL設定會錯誤
    //所以改成false代表接受所有憑證
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);

    //設定CURL以字串回傳結果，而不是直接echo
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

    //設定網址
    
    curl_setopt($curl,CURLOPT_URL,"http://opendata.epa.gov.tw/webapi/Data/REWIQA/?orderby=SiteName&skip=0&top=1000&format=json");
    
    //執行CURL，以$result 儲存結果
    $result=curl_exec($curl);

    //關閉CURL
    curl_close($curl);

    //JSON轉陣列
    $array= json_decode($result,true);    
    //print_r($array);

    $sql="select * from taiwanapi order by id desc";
    $ro=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($ro);
        foreach($array as $name){
            if($name["PublishTime"] > $row["PublishTime"]){
            $sql="insert into taiwanapi (id,Day,SiteName,County,AQI,Pollutant,Status,PublishTime) value(null,'".date('Y-m-d')."','".$name["SiteName"]."','".$name["County"]."','".$name["AQI"]."','".$name["Pollutant"]."','".$name["Status"]."','".$name["PublishTime"]."')";
            mysqli_query($link,$sql);
            }else{
                echo "1";
            }
        }
}
?>