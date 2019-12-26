document.write("問1" + "<br>");	
var star = "★";

for(var i = 0; i < 5; i++){
	document.write(star);
};
document.write("<br>" + "<br>");


document.write("問2" + "<br>");
for(var i = 0; i < 2; i++){
	for(var a = 1; a <= 3; a++){
		document.write(star);
	};
	document.write("<br>");
};
document.write("<br>" + "<br>");


document.write("問3" + "<br>");
var white_star = "☆";

for(var i = 1; i <= 2; i++){
	for(var a = 0; a < 5; a++){
		document.write(white_star);
	};
	document.write("<br>");
};
document.write("<br>" + "<br>");


document.write("問4" + "<br>");
for(var i = 0; i < 4; i++){
	for(var a = 1; a <= 5; a++){
		document.write(star);	
	};
	document.write("<br>");
};
document.write("<br>" + "<br>");


document.write("問5" + "<br>");
for(var i = 0; i < 4; i++){
	for(var a = 0; a < 3; a++){
		document.write(star);
	};
	document.write("<br>");
};
document.write("<br>" + "<br>");


document.write("問6" + "<br>");
for(var i = 0; i < 3; i++){
	for(var a = 0; a < 3; a++){
		if(a % 2 === 0){
	   	document.write(star);
	   } else{
	   	document.write(white_star);
	   };
	};
	document.write("<br>");
};
document.write("<br>" + "<br>");


document.write("問7" + "<br>");
for(var i = 1; i < 6; i++){
	for(var a = 1; a <= 5; a++){
		if(a % 2 === 0){
			document.write(white_star);
		} else {
			document.write(star);
		};	
	};
	document.write("<br>");
};
document.write("<br>" + "<br>");


document.write("問8" + "<br>");
for(var i = 0; i < 5; i++){
	for(var a = 0; a <= i; a++){
		document.write(star)	
	};
	document.write("<br>");
}















