<?

//
function lat($st)
{
    $char=array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','з'=>'z','и'=>'i',
        'й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t',' '=>'_',
        'у'=>'u','ф'=>'f','х'=>'h',"'"=>'','ы'=>'i','э'=>'e','ж'=>'zh','ц'=>'ts','ч'=>'ch','ш'=>'sh',
        'щ'=>'j','ь'=>'','ю'=>'yu','я'=>'ya','Ж'=>'ZH','Ц'=>'TS','Ч'=>'CH','Ш'=>'SH','Щ'=>'J',
        'Ь'=>'','Ю'=>'YU','Я'=>'YA','ї'=>'i','Ї'=>'Yi','є'=>'ie','Є'=>'Ye','А'=>'A','Б'=>'B','В'=>'V',
        'Г'=>'G','Д'=>'D','Е'=>'E','Ё'=>'E','З'=>'Z','И'=>'I','Й'=>'Y','К'=>'K','Л'=>'L','М'=>'M','Н'=>'N',
        'О'=>'O','П'=>'P','Р'=>'R','С'=>'S','Т'=>'T','У'=>'U','Ф'=>'F','Х'=>'H','Ъ'=>"'",'Ы'=>'I','Э'=>'E');
    $st=strtr($st,$char);
    return $st;
}
function checkuser($key){
    connect();
    $sql = mysql_query("select * from user_l where key_p='".$key."'");
    $res = mysql_fetch_array($sql);

    $ssql = mysql_query("select * from profile where login = '".$res['login']."'");
    $r = mysql_fetch_array($ssql);
    $ident = 0;
    if(!empty($r['f'])){
        $ident += 10;
    }
    if(!empty($r['i'])){
        $ident += 10;
    }
    if(!empty($r['o'])){
        $ident += 10;
    }
    if(!empty($r['number_phone'])){
        $ident += 10;
    }
    if(!empty($r['city'])){
        $ident += 10;
    }
    if(!empty($r['address'])){
        $ident += 10;
    }
    if(!empty($r['email'])){
        $ident += 10;
    }

    return $ident;
}
//

//function getText($key,$t){
//    $sql = mysql_query("select * from user_l where key_p='".$key."'");
//    $res = mysql_fetch_array($sql);
//
//    $ssql = mysql_query("select * from profile where login = '".$res['login']."'");
//    $r = mysql_fetch_array($ssql);
//
//    return $r[$t];
//}

?>