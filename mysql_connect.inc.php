<?php
  function create_connection()
  {
    $link = mysqli_connect("localhost", "root", "aa0937764221")
      or die("�L�k�إ߸�Ƴs��: " . mysqli_connect_error());
	  
    mysqli_query($link, "SET NAMES utf8");
			   	
    return $link;
  }
	
  function execute_sql($link, $database, $sql)
  {
    mysqli_select_db($link, $database)
      or die("�}�Ҹ�Ʈw����: " . mysqli_error($link));
						 
    $result = mysqli_query($link, $sql);
		
    return $result;
  }
?>
