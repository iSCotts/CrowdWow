// JavaScript Document

function gradient(id, level)
{
	var box = document.getElementById(id);
	box.style.opacity = level;
	box.style.MozOpacity = level;
	box.style.KhtmlOpacity = level;
	box.style.filter = "alpha(opacity=" + level * 100 + ")";
	box.style.display="block";
	return;
}


function fadein(id) 
{
	var level = 0;
	while(level <= 1)
	{
		setTimeout( "gradient('" + id + "'," + level + ")", (level* 1000) + 10);
		level += 0.01;
	}
}


// Open the lightbox


function openbox3(formtitle, fadin)
{
  var box = document.getElementById('box3'); 
  document.getElementById('filter3').style.display='block';

  var btitle = document.getElementById('boxtitle3');
  btitle.innerHTML = formtitle;
  
  
  if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("cc").innerHTML=xmlhttp.responseText;
	
    }
  }

xmlhttp.open("GET","video.php?query="+formtitle,true);

xmlhttp.send();

  
 
  
  
  
  if(fadin)
  {
	 gradient("box3", 0);
	 fadein("box3");
  }
  else
  { 	
    box.style.display='block';
  }  	
}


// Close the lightbox

function closebox3()
{
   document.getElementById('box3').style.display='none';
   document.getElementById('filter3').style.display='none';
}



