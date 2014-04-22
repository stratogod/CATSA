

function charsLimit(charsToCount, countField, limit) {
	if (charsToCount.value.length > limit){
		charsToCount.value = charsToCount.value.substring(0, limit);
	}else{
		countField.innerText = String(limit - charsToCount.value.length);
		// alert(countField.innerText);
	}
}
// similar to VB Trim (but only better =)
function trim(s){
	 var r=/\b(.*)\b/.exec(s);
	 return (r==null)?"":r[1];
}

// pop up window called in cls_database
function pop_up(URL)
{
	window.self.name = 'main';
	var remote = window.open(URL, 'popup', 'width=450, height=500, screenX=100, screenY=100, left=100, top=100, toolbar=0,location=0,directories=0,resizable=1,status=0,menubar=1,scrollbars=1');
}

// inline edit function ------ do not modify
function toggleEditOn(dvTxt, dvtTA, ta){
	if (document.all) { // IE;
		document.getElementById(ta).innerText = document.getElementById(dvTxt).innerText;
	}else{  // Mozilla
		document.getElementById(ta).textContent = document.getElementById(dvTxt).textContent;
	}		
	document.getElementById(dvTxt).style.display="none";
 	document.getElementById(dvtTA).style.display="block";
 	document.getElementById(ta).focus();
}

// inline edit off function ------ do not modify
function toggleEditOff(dvTxt, dvtTA, ta){
	if (document.all) { // IE;
	    if(document.getElementById(dvTxt).innerText != document.getElementById(dvtTA).innerText){
	        // hightlight value changed cell 
	        document.getElementById(dvTxt).parentNode.parentNode.style.background = "yellow";
	    }
		document.getElementById(dvTxt).innerText = document.getElementById(dvtTA).innerText;
	}else{   // Mozilla
	    if(document.getElementById(dvTxt).textContent != document.forms[0].elements[ta].value){
	        // hightlight value changed cell 
	        document.getElementById(dvTxt).parentNode.parentNode.style.background = "yellow";
	    }
		document.getElementById(dvTxt).textContent = document.forms[0].elements[ta].value;  
	}	
	document.getElementById(dvTxt).style.display="block";
	document.getElementById(dvtTA).style.display="none";
	
}

// call ajax_function to save the cell content  -- do not modify
function toggleEditOffAjax(dvTxt, dvtTA, ta){
    var newValue = "";
	if (document.all) { // IE;
	
	    newValue = document.getElementById(dvtTA).innerText;
	    if(document.getElementById(dvTxt).innerText != newValue){
	    
	        updateCellContent(ta, newValue);
	    }
		document.getElementById(dvTxt).innerText = newValue;
	}else{   // Mozilla
	
	    newValue = document.forms[0].elements[ta].value;
	    if(document.getElementById(dvTxt).textContent != newValue){
	        
	        updateCellContent(ta, newValue);
	    }
		document.getElementById(dvTxt).textContent = newValue;  
	}	
	document.getElementById(dvTxt).style.display="block";
	document.getElementById(dvtTA).style.display="none";
	
	
}

