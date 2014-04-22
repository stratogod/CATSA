
var http_request = false;

function updateCellContent(ctrlname, ctrlvalue){
    window.status = "Saving...";   
    http_request = false;

    if (window.XMLHttpRequest) { // Mozilla, Safari,...
	    http_request = new XMLHttpRequest();
	    if (http_request.overrideMimeType) {
		    http_request.overrideMimeType('text/xml');
	    }
    }else if(window.ActiveXObject) { // IE
	    try {
		    http_request = new ActiveXObject("Msxml2.XMLHTTP");
	    }catch(e){
		    try {
			    http_request = new ActiveXObject("Microsoft.XMLHTTP");
		    } catch (e) {}
	    }
    }

    if (!http_request) {
	    return false;
    }
	    
    try{  
        http_request.open('GET', 'include/inlineeditajax_exe.php?ctrlname=' + ctrlname + '&ctrlval=' + ctrlvalue, true);
        http_request.send(null);	
        window.status = "Changes Saved";
    }catch(e){
        window.status = "Update Failed - " + e.toString();
    }
    
}



