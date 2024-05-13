<html>
    <head>
        <title>entry</title>
        <link rel="stylesheet" href="res.css" /><style>
        #back a
            {
             position:absolute;
             left:5%;
             bottom:450px;   
        font-size: 20px;
        text-decoration: none;
        list-style-type:none;
        background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
            }</style>

        <script>
            function validate()
            {
                const reg=document.getElementById("reg").value;
                const dob=document.getElementById("dob").value;
                const name=document.getElementById("name").value;
                const dept=document.getElementById("dept").value;
                const one=document.getElementById("1").value;
                const two=document.getElementById("2").value;
                const three=document.getElementById("3").value;
                const four=document.getElementById("4").value;
                const five=document.getElementById("5").value;
                
                
                const regerror=document.getElementById("reg-error");
                const doberror=document.getElementById("dob-error");
                const nameerror=document.getElementById("name-error");
                const depterror=document.getElementById("dept-error");
                const oneerror=document.getElementById("1-error");
                const twoerror=document.getElementById("2-error");
                const threeerror=document.getElementById("3-error");
                const fourerror=document.getElementById("4-error");
                const fiveerror=document.getElementById("5-error");

                regerror.textContent="";
                doberror.textContent="";
                nameerror.textContent="";
                depterror.textContent="";
                oneerror.textContent="";
                twoerror.textContent="";
                threeerror.textContent="";
                fourerror.textContent="";
                fiveerror.textContent="";
                
                let isvalid=true;
                if(reg=="")
                {
                    regerror.textContent="enter Register no*";
                    isvalid=false;
                }
                if(dob=="")
                {
                    doberror.textContent="enter db*";
                    isvalid=false;
                }
                if(name=="")
                {
                    nameerror.textContent="name**";
                    isvalid=false;
                }
                if(dept=="")
                {
                    depterror.textContent="enter dept*";
                    isvalid=false;
                }
                if(one=="")
                {
                    oneerror.textContent="Missing values*";
                    isvalid=false;
                }
                if(two=="")
                {
                    twoerror.textContent="Missing values*";
                    isvalid=false;
                }
                if(three=="")
                {
                    threeerror.textContent="Missing values*";
                    isvalid=false;
                }
                if(four=="")
                {
                    fourerror.textContent="Missing values*";
                    isvalid=false;
                }
                if(five=="")
                {
                    fiveerror.textContent="Missing values*";
                    isvalid=false;
                }
                return isvalid;
            }
            </script>
    </head>
    </head><div id="back">
    <a href="pass1.php">back</a>
</div>
    <body><center><h1>Update Results</h1></center>
        <form name="gana" method="post" onsubmit="return validate()">
            <table  border="1" align="center">
                <tr>
                    <td>
                        Register number
        </td><td>
                            <input type="text" name="txtreg" id="reg">
                        <span
                            id="reg-error"
                            class="error-message">
                        </span>
                        </td>
                    </td>
                </tr>
                <tr><td>
                        Date of birth </td><td>
                            <input type="text" name="txtdob" id="dob"><span
                            id="dob-error"
                            class="error-message"></span></td>
                </tr>
                <tr><td>
                        Name </td><td>
                            <input type="text" name="txtname" id="name"><span
                            id="name-error"
                            class="error-message"></span></td>
                </tr>
                <tr><td>
                        Dept</td><td>
                            <input type="text" name="txtdept" id="dept" value="MCA"><span
                            id="dept-error"
                            class="error-message"></span></td>
                </tr>
                <tr><td>
                        Tamil </td><td>
                            <input type="text" name="txt1" id="1"><span
                            id="1-error"
                            class="error-message"></span></td>
                </tr>
                <tr><td>
                        English </td><td>
                            <input type="text" name="txt2" id="2"><span
                            id="2-error"
                            class="error-message"></span></td>
                </tr><tr><td>
                        Maths </td><td>
                            <input type="text" name="txt3" id="3"><span
                            id="3-error"
                            class="error-message"></span></td>
                </tr>
                <tr><td>
                        Science </td><td>
                            <input type="text" name="txt4" id="4"><span
                            id="4-error"
                            class="error-message"></span></td>
                </tr>
                <tr><td>
                        Social science </td><td>
                            <input type="text" name="txt5" id="5"><span
                            id="5-error"
                            class="error-message"></span></td>
                        
                        </td>
                </tr>
                <tr>
              
                    <td>
                        <input type="submit" name="btnsubmit" value="Insert">
                    </td></tr>
           </table>
           <body>
           <?php
           if(isset($_POST["btnsubmit"]))
           {
            $a=$_POST["txt1"];
            if($a>40)
            {
                $tg=1;
            }
            else{
                $tg=0;
            }
            $b=$_POST["txt2"];
            if($b>40)
            {
                $eg=1;
            }
            else{
                $eg=0;
            }
            $c=$_POST["txt3"];
            if($c>40)
            {
                $mg=1;
            }
            else{
                $mg=0;
            }
            $d=$_POST["txt4"];
            if($d>40)
            {
                $sg=1;
            }
            else{
                $sg=0;
            }
            $e=$_POST["txt5"];
            if($e>40)
            {
                $ssg=1;
            }
            else{
                $ssg=0;
            }
            $tot=$a+$b+$c+$d+$e;
            $per=$tot/5;
            $grade=0;
            if(($tg==1)&&($eg==1)&&($mg==1)&&($sg==1)&&($ssg==1))
            {
            if(($per>=95)&&($per<=100))
            {
                $grade=1;
            } 
            elseif(($per<95)&&($per>90))
            {
                $grade=2;
            } 
            elseif(($per>=80)&&($per<=90))
            {
                $grade=3;
            }
            elseif(($per>=70)&&($per<=80))
            {
                $grade=4;
            }  
        }
            else
            {
                $grade=0;
            }
            include("connect.php");
            $qry="INSERT INTO `result`(`rego`, `dob`, `name`, `dept`, `tamil`,`tg`,`english`,`eg`, `maths`,`mg`, `science`,`sg`, `ss`,`ssg`,`total`,`per`,`grade`) VALUES
             ('".$_POST["txtreg"]."','".$_POST["txtdob"]."','".$_POST["txtname"]."','".$_POST["txtdept"]."',
             '".$_POST["txt1"]."',".$tg.",'".$_POST["txt2"]."',".$eg.",'".$_POST["txt3"]."',".$mg.",'".$_POST["txt4"]."',".$sg.",'".$_POST["txt5"]."',".$ssg.",".$tot.",".$per.",".$grade.")";
            $res=$cn->query($qry);
            if(!$res)
            {
                echo "not";

            }
            else
            {
                echo "inserted";
            }
           }
           ?>
        </form>
    </body>
</html>