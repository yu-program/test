document.write("問1" + "<br>");

var star_b="★";
var star_w="☆";

for (var i = 0; i < 5 ; i++){
	if(i % 2 === 0){
		for(var a =0; a < 5; a++){
			if(a % 2 === 0){
			document.write(star_b);
			}else{
			document.write(star_w);
			};	
		};
	}else {
		for(var a = 0; a < 5; a++){
			if(a % 2 === 0){
			document.write(star_w);
			}else{
			document.write(star_b);
			};
		};
	};
document.write("<br>");	
}



document.write("<br>" + "問2" + "<br>");

for(var i = 0; i < 5; i++){
	for(var a = 0; a < 5; a++){
		if(a === i){
			document.write(star_w);
		}else{
			document.write(star_b);
		};
	};
document.write("<br>");
}



document.write("<br>" + "問3" + "<br>");

for(var i=0; i<5; i++){
	for(var b=0; b <= i; b++){
		if(b === i){
			document.write(star_w);
		}else{
			document.write(star_b);
		};
	};
	document.write("<br>");
}
