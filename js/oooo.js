
function gradient(id, level)
{
	var box_oo = document.getElementById(id);
	box_oo.style.opacity = level;
	box_oo.style.MozOpacity = level;
	box_oo.style.KhtmlOpacity = level;
	box_oo.style.filter = "alpha(opacity=" + level * 100 + ")";
	box_oo.style.display="block";
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


function openbox_oo(formtitle, fadin)
{
  var box_oo = document.getElementById('box_oo'); 
  document.getElementById('filter_oo').style.display='block';

  var btitle = document.getElementById('boxtitle_oo');
  btitle.innerHTML = formtitle;
  
  if(fadin)
  {
	 gradient("box_oo", 0);
	 fadein("box_oo");
  }
  else
  { 	
    box_oo.style.display='block';
  }  	
}


// Close the lightbox

function closebox_oo()
{
   document.getElementById('box_oo').style.display='none';
   document.getElementById('filter_oo').style.display='none';
}



