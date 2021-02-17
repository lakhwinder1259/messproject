// JavaScript Document
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if ((charCode >= 48 && charCode <= 57) || (charCode > 7 && charCode < 9))  
	{
        return true;
    }
	else
	{
    return false;
	}
}
 function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode > 31 && charCode < 33) || (charCode > 7 && charCode < 9) )
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
 }
	
	function regvalidate()
	{
		
		if(document.data.roll_no.value == "")
		{
	document.getElementById('error_rn').innerHTML=" * Please enter the roll no ";
    data.roll_no.focus();
		return(false);
		}
		if(document.data.roll_no.value !== "")
		{
		
         var element =document.getElementById("error_rn");
         element.parentNode.removeChild(element);
		 
		}
		 if(document.getElementById('idcourse').selectedIndex == 0)
		{
			document.getElementById('error_course').innerHTML=" * Please Select the course ";
         data.course.focus();
		return(false);
		}/* 
	if(document.getElementById('idcourse').selectedIndex !== 0)
		{
		var element =document.getElementById('error_course');
         element.parentNode.removeChild(element);
      	}*/
	 if(document.getElementById('idbranch').selectedIndex == 0)
	{
	     document.getElementById('error_branch').innerHTML=" * Please Select the Branch ";
         data.idbranch.focus();
		return(false);
	}/*
	 if(document.getElementById('idbranch').selectedIndex !== 0)
		{
		
         var element =document.getElementById('error_branch');
         element.parentNode.removeChild(element);		
		}*/
 if(document.getElementById('idyear').selectedIndex == 0)
         
		{
	     document.getElementById('error_year').innerHTML=" * Please Select the year ";
         data.idyear.focus();
		return(false);
		
	}/*
	if(document.getElementById('idyear').selectedIndex !== 0)
		{
		
         var element =document.getElementById('error_year');
         element.parentNode.removeChild(element);		
		}*/
	 if(document.getElementById('idroom_no').selectedIndex == 0)
         
		{
	     document.getElementById('error_room_no').innerHTML=" * Please Select the room no ";
         data.idroom_no.focus();
		return(false);
		
	}/*
 if(document.getElementById('idroom_no').selectedIndex !== 0)
		{
		
         var element =document.getElementById('error_room_no');
         element.parentNode.removeChild(element);		
		}*/
	
 if(document.data.name.value == "")
		{
	document.getElementById('error_sname').innerHTML=" * Please enter the student name ";
  data.name.focus();
		return(false);
		}/*
if(document.data.name.value !=="")
		{
		
         var element =document.getElementById("error_sname");
         element.parentNode.removeChild(element);		
		}*/
	if(document.data.father_name.value == "")
		{
	document.getElementById('error_fathername').innerHTML=" * Please enter the father name ";
  data.father_name.focus();
		return(false);
		}/*
		if(document.data.father_name.value!=="")
		{
		
         var element =document.getElementById("error_fathername");
         element.parentNode.removeChild(element);		
		}
		*/
		if(document.data.address.value == "")
		{
	document.getElementById('error_address').innerHTML=" * Please enter the address";
  data.address.focus();
		return(false);
		}/*
		if(document.data.address.value!=="")
		{
		
         var element =document.getElementById("error_address");
         element.parentNode.removeChild(element);		
		}
		*/
		if(document.data.ph_no.value == "")
		{
	document.getElementById('error_ph_no').innerHTML=" * Please enter the phone number";
  data.ph_no.focus();
		return(false);
		}/*
		if(document.data.ph_no.value!=="")
		{
		var element =document.getElementById("error_ph_no");
         element.parentNode.removeChild(element);		
		}
	*/
}