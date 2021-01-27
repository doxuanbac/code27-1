<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    .content {
        width: 500px;
        padding: 10px;
        border: 2px solid #ddd;
        height: auto;
        margin: 10px auto;
    }
</style>

<body>
    <div class="content">
        <?php
        $group = array("1" => "Admin", "2" => "Maneger", "3" => "Member", "4" => "Gust");
        $city = array("ct" => "Cần Thơ", "tg" => "Tiền Giang", "bl" => "Bạc Liêu" );
        function createSelectbox($name, $attrbutes, $array, $keySelect)
        {
            $xhtml = "";
            if (!empty($array)) {
                $xhtml .= '<select name="'.$name.'" id="'.$name.'" style="'.$attrbutes.'">';
                foreach ($array as $key=>$value) {
                    if ($key == $keySelect) {
                        $xhtml .= '<option value="' . $key . '" selected="selected">' . $value . '</option>';
                    } else {
                        $xhtml .= '<option value=" '.$key.' " >'.$value.'</option>';
                    }
                }
                $xhtml .= '</select>';
            }
            return $xhtml;
        }
        $groupSelect =  createSelectbox("group", "width: 200px", $group, 4);
        $citySelect = createSelectbox("city", "width: 200px", $city, "tg");
        echo $groupSelect . "<br />" . $citySelect;

        ?>
    </div>
</body>

</html>