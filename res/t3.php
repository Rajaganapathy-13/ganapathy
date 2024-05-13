<html>
<head>
    <style>
.error-message {
    color: red;
    font-size: 14px;
    margin-top: 5px;
}
    </style>
<script> 

function validateform()
{  

    const reg=document.getElementById("regno").value;
    const dob=document.getElementById("dob").value;
    const doberror=document.getElementById("regerror");
    const regerror=document.getElementById("doberror");
    regerror.textContent="";
    doberror.textContent="";
    let isvalid=true;
   
     if(reg == "")
     {
        regerror.textContent="please enter name";
        isvalid=false;
     }
     if(dob == "")
     {
        doberror.textContent="please enter dob";
        isvalid=false;
     }
     return isvalid;

}
</script>
<body>
<form name="gana" method="post" onsubmit="return validate()">
    Reg no
    <input type="text" name="txtreg" id="regno">
    <span
    id="regerror"
    class="error-message"></span>
    dob
    <input type="text" name="txtdob" id="dob">
    <span
    id="doberror"
    class="error-message"></span>
    <input type="submit" name="btnsubmit" value="submit">
    </form>
</body>


