
$(document).ready(function(){
	b1=0;
	b2=0;
	b3=0;
	b4=0;
	b5=0;
	b6=0;
	b7=0;
	b8=0;
	m1=0;
	m2=0;
	m3=0;
	m4=0;
	m5=0;
	m6=0;
	m7=0;
	m8=0;
	c1=0;
	c2=0;
	c3=0;
	c4=0;
	c5=0;
	c6=0;
	c7=0;
	c8=0;

	b11=0;
	b21=0;
	b31=0;
	b41=0;
	b51=0;
	b61=0;
	b71=0;
	b81=0;
	m11=0;
	m21=0;
	m31=0;
	m41=0;
	m51=0;
	m61=0;
	m71=0;
	m81=0;
	c11=0;
	c21=0;
	c31=0;
	c41=0;
	c51=0;
	c61=0;
	c71=0;
	c81=0;

	b111=0;
	b211=0;
	b311=0;
	b411=0;
	b511=0;
	b611=0;
	b711=0;
	b811=0;
	m111=0;
	m211=0;
	m311=0;
	m411=0;
	m511=0;
	m611=0;
	m711=0;
	m811=0;
	c111=0;
	c211=0;
	c311=0;
	c411=0;
	c511=0;
	c611=0;
	c711=0;
	c811=0;
	$('#r1').click(function(){
		$('#bloque1').fadeOut(1000);
		b1=0;
		m1=1;
	});

	$('#r2').click(function(){
		$('#bloque1').fadeOut(1000);
		b1=0;
		m1=1;
	});

	$('#r3').click(function(){
		$('#bloque1').fadeOut(1000);
		b1=2;
		c1=1;
	});
/////////////////////////////////
$('#r4').click(function(){
	$('#bloque2').fadeOut(1000);
	b2=2;
	c2=1;
});

$('#r5').click(function(){
	$('#bloque2').fadeOut(1000);
	b2=0;
	m2=1;
});

$('#r6').click(function(){
	$('#bloque2').fadeOut(1000);
	b2=0;
	m2=1;
});

/////////////////////////////////
$('#r7').click(function(){
	$('#bloque3').fadeOut(1000);
	b3=0;
	m3=1;
});

$('#r8').click(function(){
	$('#bloque3').fadeOut(1000);
	b3=2;
	c3=1;
});

$('#r9').click(function(){
	$('#bloque3').fadeOut(1000);
	b3=0;
	m3=1;
});

/////////////////////////////////
$('#r10').click(function(){
	$('#bloque4').fadeOut(1000);
	b4=0;
	m4=1;
});

$('#r11').click(function(){
	$('#bloque4').fadeOut(1000);
	b4=0;
	m4=1;	
});

$('#r12').click(function(){
	$('#bloque4').fadeOut(1000);
	b4=2;
	c4=1;
});


/////////////////////////////////
$('#r13').click(function(){
	$('#bloque5').fadeOut(1000);
	b5=0;
	m5=1;
});

$('#r14').click(function(){
	$('#bloque5').fadeOut(1000);
	b5=0;
	m5=1;	
});

$('#r15').click(function(){
	$('#bloque5').fadeOut(1000);
	b5=3;
	c5=1;
});

/////////////////////////////////
$('#r16').click(function(){
	$('#bloque6').fadeOut(1000);
	b6=0;
	m6=1;
});

$('#r17').click(function(){
	$('#bloque6').fadeOut(1000);
	b6=3;
	c6=1;	
});

$('#r18').click(function(){
	$('#bloque6').fadeOut(1000);
	b6=0;
	m6=1;
});

/////////////////////////////////
$('#r19').click(function(){
	$('#bloque7').fadeOut(1000);
	b7=3;
	c7=1;
});

$('#r20').click(function(){
	$('#bloque7').fadeOut(1000);
	b7=0;	
	m7=1;
});

$('#r21').click(function(){
	$('#bloque7').fadeOut(1000);
	b7=0;
	m7=1;
});

/////////////////////////////////
$('#r22').click(function(){
	$('#bloque8').fadeOut(1000);
	b8=0;
	m8=1;
});

$('#r23').click(function(){
	$('#bloque8').fadeOut(1000);
	b8=0;
	m8=1;	
});

$('#r24').click(function(){
	$('#bloque8').fadeOut(1000);
	b8=3;
	c8=1;

});
 
$('#ver').click(function(){
	
	lola=Number(b1+b2+b3+b4+b5+b6+b7+b8);
	total=(lola*100)/20
	//buenas=Number(c1)+Number(c2)+Number(c3)+Number(c4)+Number(c5)+Number(c6)+Number(c7)+Number(c8);
	malas=Number(m1+m2+m3+m4+m5+m6+m7+m8);

	$('#resultado').text("Efectividad" +" " + +total+" "+"%");
	$('#misbuenas').text("Su Calificación");
	$('#mismalas').text("Incorrectaa:" +"  " + malas);
	$('#nota').fadeIn(1000);

	
});

$('#trancar').click(function(){
	location.reload();
	
});

//////////////////////////////////////////////////////////////////////////////

$('#r4000').click(function(){
	$('#bloque11').fadeOut(1000);
	b11=0;
	m11=1;
});

$('#r5000').click(function(){
	$('#bloque11').fadeOut(1000);
	b11=0;
	m11=1;
});

$('#r31').click(function(){
	$('#bloque11').fadeOut(1000);
	b11=2;
	c11=1;
});
/////////////////////////////////
$('#r41').click(function(){
$('#bloque21').fadeOut(1000);
b21=2;
c21=1;
});

$('#r51').click(function(){
$('#bloque21').fadeOut(1000);
b21=0;
m21=1;
});

$('#r61').click(function(){
$('#bloque21').fadeOut(1000);
b21=0;
m21=1;
});

/////////////////////////////////
$('#r71').click(function(){
$('#bloque31').fadeOut(1000);
b31=0;
m31=1;
});

$('#r81').click(function(){
$('#bloque31').fadeOut(1000);
b31=2;
c31=1;
});

$('#r91').click(function(){
$('#bloque31').fadeOut(1000);
b31=0;
m31=1;
});

/////////////////////////////////
$('#r101').click(function(){
$('#bloque41').fadeOut(1000);
b41=0;
m41=1;
});

$('#r111').click(function(){
$('#bloque41').fadeOut(1000);
b41=0;
m41=1;	
});

$('#r121').click(function(){
$('#bloque41').fadeOut(1000);
b41=2;
c41=1;
});


/////////////////////////////////
$('#r131').click(function(){
$('#bloque51').fadeOut(1000);
b5=0;
m5=1;
});

$('#r141').click(function(){
$('#bloque51').fadeOut(1000);
b51=0;
m51=1;	
});

$('#r151').click(function(){
$('#bloque51').fadeOut(1000);
b51=3;
c51=1;
});

/////////////////////////////////
$('#r161').click(function(){
$('#bloque61').fadeOut(1000);
b61=0;
m61=1;
});

$('#r171').click(function(){
$('#bloque61').fadeOut(1000);
b61=3;
c61=1;	
});

$('#r181').click(function(){
$('#bloque61').fadeOut(1000);
b61=0;
m61=1;
});

/////////////////////////////////
$('#r191').click(function(){
$('#bloque71').fadeOut(1000);
b71=3;
c71=1;
});

$('#r201').click(function(){
$('#bloque71').fadeOut(1000);
b71=0;	
m71=1;
});

$('#r211').click(function(){
$('#bloque71').fadeOut(1000);
b71=0;
m71=1;
});

/////////////////////////////////
$('#r221').click(function(){
$('#bloque81').fadeOut(1000);
b81=0;
m81=1;
});

$('#r231').click(function(){
$('#bloque81').fadeOut(1000);
b81=0;
m81=1;	
});

$('#r241').click(function(){
$('#bloque81').fadeOut(1000);
b81=3;
c81=1;

});

$('#ver1').click(function(){
	lola11=Number(b11+b21+b31+b41+b51+b61+b71+b81);
	total11=(lola11*100)/20
	//buenas=Number(c1)+Number(c2)+Number(c3)+Number(c4)+Number(c5)+Number(c6)+Number(c7)+Number(c8);
	malas11=Number(m11+m21+m31+m41+m51+m61+m71+m81);

	$('#resultado1').text("Efectividad"+" " + +total11+" "+"%");
	$('#misbuenas1').text("Su Calificación");
	$('#mismalas1').text("Incorrectas:" +"  " + malas11);
	$('#nota1').fadeIn(1000);


});


////////////////////////////////////////////////////////////////////////

$('#r8000').click(function(){
	$('#bloque111').fadeOut(1000);
	b111=0;
	m111=1;
});

$('#r9000').click(function(){
	$('#bloque111').fadeOut(1000);
	b111=0;
	m111=1;
});

$('#r311').click(function(){
	$('#bloque111').fadeOut(1000);
	b111=2;
	c111=1;
});
/////////////////////////////////
$('#r411').click(function(){
$('#bloque211').fadeOut(1000);
b211=2;
c211=1;
});

$('#r511').click(function(){
$('#bloque211').fadeOut(1000);
b211=0;
m211=1;
});

$('#r611').click(function(){
$('#bloque211').fadeOut(1000);
b211=0;
m211=1;
});

/////////////////////////////////
$('#r711').click(function(){
$('#bloque311').fadeOut(1000);
b311=0;
m311=1;
});

$('#r811').click(function(){
$('#bloque311').fadeOut(1000);
b311=2;
c311=1;
});

$('#r911').click(function(){
$('#bloque311').fadeOut(1000);
b311=0;
m311=1;
});

/////////////////////////////////
$('#r1011').click(function(){
$('#bloque411').fadeOut(1000);
b411=0;
m411=1;
});

$('#r1111').click(function(){
$('#bloque411').fadeOut(1000);
b411=0;
m411=1;	
});

$('#r1211').click(function(){
$('#bloque411').fadeOut(1000);
b411=2;
c411=1;
});


/////////////////////////////////
$('#r1311').click(function(){
$('#bloque511').fadeOut(1000);
b51=0;
m51=1;
});

$('#r1411').click(function(){
$('#bloque511').fadeOut(1000);
b511=0;
m511=1;	
});

$('#r1511').click(function(){
$('#bloque511').fadeOut(1000);
b511=3;
c511=1;
});

/////////////////////////////////
$('#r1611').click(function(){
$('#bloque611').fadeOut(1000);
b611=0;
m611=1;
});

$('#r1711').click(function(){
$('#bloque611').fadeOut(1000);
b611=3;
c611=1;	
});

$('#r1811').click(function(){
$('#bloque611').fadeOut(1000);
b611=0;
m611=1;
});

/////////////////////////////////
$('#r1911').click(function(){
$('#bloque711').fadeOut(1000);
b711=3;
c711=1;
});

$('#r2011').click(function(){
$('#bloque711').fadeOut(1000);
b711=0;	
m711=1;
});

$('#r2111').click(function(){
$('#bloque711').fadeOut(1000);
b711=0;
m711=1;
});

/////////////////////////////////
$('#r2211').click(function(){
$('#bloque811').fadeOut(1000);
b811=0;
m811=1;
});

$('#r2311').click(function(){
$('#bloque811').fadeOut(1000);
b811=0;
m811=1;	
});

$('#r2411').click(function(){
$('#bloque811').fadeOut(1000);
b811=3;
c811=1;

});

$('#ver3').click(function(){
/*total111=b111+b211+b311+b411+b511+b611+b711+b811;
buenas111=c111+c211+c311+c411+c511+c611+c711+c811;
malas111=m111+m211+m311+m411+m511+m611+m711+m811;
//alert(total);
$('#resultado3').text(total111);
$('#misbuenas111').text(buenas111);
$('#mismalas111').text(malas111);
$('#nota3').fadeIn(1000);*/


lola111=Number(b111+b211+b311+b411+b511+b611+b711+b811);
total111=(lola111*100)/20
	//buenas=Number(c1)+Number(c2)+Number(c3)+Number(c4)+Number(c5)+Number(c6)+Number(c7)+Number(c8);
	malas111=Number(m111+m211+m311+m411+m511+m611+m711+m811);

	$('#resultado3').text("Efectividad"+" "+ +total111+" "+"%");
	$('#misbuenas111').text("Su Calificación");
	$('#mismalas111').text("Incorrectas :" +"  " + malas111);
	$('#nota3').fadeIn(1000);
});





});



