<?php
Session_start();
	 if( $_SESSION["Checknum"] == $_POST['checknum'] )

	 {
	     $msg = "驗證碼正確！";
	 }
	 else
	 {
	     $msg = "驗證碼錯誤！";
	 }