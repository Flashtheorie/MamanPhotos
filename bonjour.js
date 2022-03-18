
$("#photos1").load("affichagephotos1.php");
$("#photos2").load("affichagephotos2.php");



    $("#photos1").click(function() {
  $("#photos1").addClass("img-thumbnail");
 $("#photos1").hide("slow", function(){
    var id1 = $("#value_photos_1").val()
     $.ajax({
       url : 'voteupphoto.php', // La ressource ciblée
       type : 'GET', // Le type de la requête HTTP.
       data : 'id=' + id1
    });
    $("#photos1").load("affichagephotos1.php", function(){
        $("#photos1").fadeIn("slow")
    })
 });
  $("#photos2").fadeOut("slow", function(){
    $("#photos2").load("affichagephotos2.php", function(){
        $("#photos2").fadeIn("slow", function(){
            
        })
    })
  });
});

    $("#photos2").click(function() {     
  $("#photos2").addClass("img-thumbnail");
 $("#photos2").hide("slow", function(){
        var id2 = $("#value_photos_2").val()
     $.ajax({
       url : 'voteupphoto.php', // La ressource ciblée
       type : 'GET', // Le type de la requête HTTP.
       data : 'id=' + id2
    });
    $("#photos2").load("affichagephotos2.php", function(){
        $("#photos2").fadeIn("slow")
    })
 });
  $("#photos1").fadeOut("slow", function(){
    $("#photos1").load("affichagephotos1.php", function(){
        $("#photos1").fadeIn("slow")
    })
  });
});
