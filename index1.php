<?php
    $date = getdate();
    switch ($date["weekday"]){
            case "Monday";
                echo "Thứ hai";
                break;
            case "Tuesday":
                echo "Thứ ba";
                break;
            case "Wednesday":
                echo "Thứ tư";
                break;
            case "Thursday":
                echo "Thứ năm";
                break;
            case "Friday":
                echo "Thứ sáu";
                break;
            case "Saturday":
                echo "Thứ bảy";
                break;
            case "Sunday":
                echo "Chủ Nhật";
                break;
    }

?>

<?php
    $year = 2021;
    switch( $mount = 2 ){
        case 1:
            echo "31 ngày";
            break;
        case 2:
            if($year%4 == 0){
                echo "29 ngày";
            } else{
                echo "28 ngày";
            }
        case 3:
            echo "31 ngày";
            break;
        case 4:
            echo "30 ngày";
            break;
        case 5:
            echo "31 ngày";
            break;
        case 6:
            echo "30 ngày";
            break;
        case 7:
            echo "31 ngày";
            break;
        case 8:
            echo "31 ngày";
            break;
        case 9:
            echo "30 ngày";
            break;
        case 10:
            echo "31 ngày";
            break;
        case 11:
            echo "30 ngày";
            break;
        case 12:
            echo "31 ngày";
            break;
    }
?>

<?php
    $aMobie = array("HTC", "Iphone", "Nokia", "Levono", "SamSung");
    $i = 0;
    while($i < count($aMobie)){
        echo "<p>" . $aMobie[$i] . "</p>";
        $i++;
    };
?>

<?php
    $i = 9;
    do{
        echo "</pre>";
        echo $i;
        $i--;
    }while($i>1);
?>  
