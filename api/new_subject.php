<?php
include_once "db.php";

/**
 * 資料表的欄位名稱=>資料內容
 */

//依據後端表單add_subject_form傳過來的問卷主題欄位subject建立一個資料陣列
$topic=['topic'=>$_POST['subject']];

//使用insert自訂函式到資料庫新增主題
insert('topics',$topic);


//新增完畢，導向回後台首頁
to("../backend");

?>