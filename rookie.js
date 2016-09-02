/**
 * JS for rookie site
 */

function S(obj)
{
  return O(obj).style
}

function O(obj)
{
  if (typeof obj == 'object') return obj
  else return document.getElementById(obj)
}

function C(name)
{
  var elements = document.getElementsByTagName('*')
  var objects  = []
  for (var i = 0 ; i < elements.length ; ++i)
    if (elements[i].className == name)
      objects.push(elements[i])
  return objects
}


window.onload = function(){
	setTimeout('toggle()',5000)
	
}

function passValidate(){
	//O('confPassword').value = "hhhfy"
	if( O('confPassword').value != O('password').value ){
		var objs = C('multimark')
		for(var i = 0; i < objs.length; i++){
			S(objs[i]).display = 'inline';
		}
		O('signSubmit').disabled = true;
	}
	else{
		var objs = C('multimark')
		for(var i = 0; i < objs.length; i++){
			S(objs[i]).display = 'none';
		}
		O('signSubmit').disabled = false;
	}
}// passValidate

function toggle(){
	try{
		S('changes').display = 'none'
	}catch(e){
	}
	try{
		S('deleted').display = 'none'
	}catch(e){
	}
}// toggle

function No(){
	S('sure').display = 'none';
}// No

function View(){
	S('sure').display = 'block';
}// View
