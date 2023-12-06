var cal1=document.getElementById("calories1");
		var cal2=document.getElementById("calories2");
		var cal3=document.getElementById("calories3");
		var cal4=document.getElementById("calories4");
		var cal5=document.getElementById("calories5");
		var cal6=document.getElementById("calories6");
		var cal7=document.getElementById("calories7");
		var cal8=document.getElementById("calories8");

		var totalcal=document.getElementById("total");

		const showSum=()=>{
			totalcal.value = Number(cal1.value)+Number(cal2.value)+Number(cal3.value)+Number(cal4.value)+Number(cal5.value)+Number(cal6.value)+Number(cal7.value)+Number(cal8.value);
		}