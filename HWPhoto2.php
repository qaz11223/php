Session_start();
2	 if( $_SESSION["Checknum"] == $_POST['checknum'] )
3
4	 {
5	     $msg = "您所輸入的驗證碼正確！";
6	 }
7	 else
8	 {
9	     $msg = "您所輸入的驗證碼錯誤！請回上一頁重新輸入。 ";
10	 } 