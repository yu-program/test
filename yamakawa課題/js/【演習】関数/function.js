document.write("問1" + "<br>");

function circle(radius,pi = 3.14){
	var result = radius * radius * pi;
	return result;
}
document.write(circle(5) + "<br>");
document.write(circle(7) + "<br>");
document.write(circle(10) + "<br>");

document.write("<br>" + "問2" + "<br>");

function ticketTotalAmount(adult,child){
	var result = 500*adult + 200*child;
	return result;
}

document.write("A グループの合計金額は" + ticketTotalAmount(2,4) + "です。" + "<br>");
document.write("B グループの合計金額は" + ticketTotalAmount(1,5) + "です。" + "<br>");
document.write("C グループの合計金額は" + ticketTotalAmount(3,7) + "です。" + "<br>");