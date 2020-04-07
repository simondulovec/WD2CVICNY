$(document).ready(function(){

	$(document).on('click',".pridaj_pocet",function(){
		var id = $(this).val();
		$.ajax({
		url: "pridaj_pocet.php",
			method: "post",
			data : {id: id},
			async: false
		});
		$("main").load("nacitaj_polozky.php");
	});

	$(document).on('click',".odober_pocet",function(){
		var id = $(this).val();
		$.ajax({
			url: "odober_pocet.php",
			method: "post",
			data: {id: id},
			async:false
		});
		$("main").load("nacitaj_polozky.php");
	});

	$(document).on('click',".zmaz_polozku",function(){
		var id = $(this).val();
		$.ajax({
			url: "zmaz_polozku.php",
			method: "post",
			data: {id: id},
			async:false
		});
		$("main").load("nacitaj_polozky.php");
	});

	$(document).on('click',"#vytvor_polozku",function(){
		var id = $(this).val();
		var nazov= $("#nazov").val();
		var pocet= $("#pocet").val();
		var cena= $("#cena").val();
		$.ajax({
			url: "vytvor_polozku.php",
			method: "post",
			data : {id: id, nazov: nazov, pocet: pocet, cena: cena},
			async:false
		});
		$("main").load("nacitaj_polozky.php");
	});
	
	$(document).on('click',"#new",function(){
		$("#side_menu").load("formular_nova_polozka.php");
	});

	$(document).on('click',".zrus_formular",function(){
		$("#side_menu").load("prazdna_sekcia.php");
	});

	$(document).on('click',".upravit_polozku",function(){
		var id= $(this).val();
		$("#side_menu").load("formular_upravit_polozku.php",
			{id: id});
	});

	$(document).on('click',".zrus_formular",function(){
		$("#side_menu").load("prazdna_sekcia.php");
	});

	$(document).on('click',"#potvrdit_upravy",function(){
		var id = parseInt($(this).val());
		var nazov= $("#upravy_nazov").val();
		var pocet= $("#upravy_pocet").val();
		var cena= $("#upravy_cena").val();
		$.ajax({
			url: "potvrdit_upravy.php",
			method: "post",
			data : {id: id, nazov: nazov, pocet: pocet, cena: cena},
			async:false
		});
		$("main").load("nacitaj_polozky.php");
	});



});
