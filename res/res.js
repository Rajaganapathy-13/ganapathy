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


