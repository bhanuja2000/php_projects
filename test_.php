   
   <html>
    <body>
    <form method="post" action="<?php echo$_SERVER['PHP_SELF'];?>">Name: <input type="text" name="fname"><input type="submit"></form>
        </form>
    </body>
            </html>
   
   
   
            <!-- <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['fname'];
                if (empty($name)) 
                {echo "Name is empty";
                } 
                else {
                    echo $name;
                }
                }?> -->
 <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $NAME=$_POST['fname'];
                if(empty($NAME)){
                    echo "name is emty";
                }
                else{
                    echo "this is your name".$NAME;
                }
            }