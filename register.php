<script>
    //XML Object
    let xhttp = new XMLHttpRequest();
    let isDataOK = false;

        xhttp.onreadystatechange = function(){
            if (xhttp.readyState == 4 && xhttp.status == 200){
                if (xhttp.responseText == 0){
                    document.getElementById('mesg').innerHTML = 'ok' ;
                    isDataOK = true ;
                }else{
                    document.getElementById('mesg').innerHTML = 'XX' ;
                }
            }
        }

    function isNewAccount(){
        let account = document.getElementById('account').value;  //check account
        //alert(account);
        xhttp.open('GET','isNewAccount.php?account=' + account, true);
        xhttp.send();

    }

    function isSubmit(){
        return true/ false;
    }

</script>



<form method='post' action="register2.php" onsubmit="return true" enctype="multipart/form-data">
    Account: <input type="text" id="account" name="account" onchange="isNewAccount()" />
    <span id='mesg'></span>
    <br>


    Password: <input type="password" name="passwd" /><br>
    Realname: <input type="text" name="realname" /><br>
    Icon: <input type="file" name="icon" /><br>
    <input type="submit" name="Register" />

</form>

