<?php include 'credentials.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Accueil</title>
    <link href="/views/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI Pro -->
    <link href="/views/css/flat-ui-pro.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/7ab095b2cf.js" crossorigin="anonymous"></script>
</head>

<body>

<?php include 'navbar.php';

require_once 'credentials.php'; ?>
<br>
<br>
<br>




<div class="container" align="center">
<h1><i class="fa-solid fa-down"></i> Clique sur ta photo préférée <i class="fa-solid fa-down"></i></h1>

<button class="btn btn-hg btn-danger" id="none"><i class="fa-solid fa-xmark-large"></i> Aucune des deux</button>
<br><br><br>
<div class="row">

<div class="col-sm"  id="photos1" style="width: 500px" onclick="incrementClick()"> </div> 

<div class="col-sm" id="photos2" style="width: 500px" onclick="incrementClick()"> </div> 

</div>

</div>


<hr>
<div align="center">
Merci de voter encore <hspan id="counter-label">50</hspan> fois
<script>
var counterVal = 50;

function incrementClick() {
    updateDisplay(--counterVal);
}

function resetCounter() {
    counterVal = 0;
    updateDisplay(counterVal);
}

function updateDisplay(val) {
    document.getElementById("counter-label").innerHTML = val;
}
</script>
</div>



<script>
	
$("#photos1").load("afficherphotos1.php");
$("#photos2").load("afficherphotos2.php");
$("#none").click(function(){
	$("#photos1").hide('slow');
	$("#photos2").hide('slow');
	$("#photos1").load("/views/afficherphotos1.php", function(){
		$("#photos1").show('slow');
	});
	$("#photos2").load("/views/afficherphotos2.php", function(){
		$("#photos2").show('slow');
	});
})


    $("#photos1").click(function() {

 $("#photos1").hide("slow", function(){
    var id1 = $("#value_photos_1").val()
     $.ajax({
       url : '/views/voteupphoto.php', // La ressource ciblée
       type : 'GET', // Le type de la requête HTTP.
       data : 'id=' + id1
    });
    $("#photos1").load("/views/afficherphotos1.php", function(){
        $("#photos1").fadeIn("slow")
    })
 });
  $("#photos2").fadeOut("slow", function(){
    $("#photos2").load("/views/afficherphotos2.php", function(){
        $("#photos2").fadeIn("slow", function(){
            
        })
    })
  });
});

    $("#photos2").click(function() {     
 
 $("#photos2").hide("slow", function(){
        var id2 = $("#value_photos_2").val()
     $.ajax({
       url : '/views/voteupphoto.php', // La ressource ciblée
       type : 'GET', // Le type de la requête HTTP.
       data : 'id=' + id2
    });
    $("#photos2").load("/views/afficherphotos2.php", function(){
        $("#photos2").fadeIn("slow")
    })
 });
  $("#photos1").fadeOut("slow", function(){
    $("#photos1").load("/views/afficherphotos1.php", function(){
        $("#photos1").fadeIn("slow")
    })
  });
});

</script>

</body>
</html>