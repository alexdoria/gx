var rowCount = $("form#registry > div.formgroup").length

$(function(){
  $("span#countRow").text(rowCount);
})

//Add Participant button
$("#add_user_button").click(function(e) {
      // var inc = parseInt($("span#contRow").val());
      var inc = rowCount + 1;
      var new_row = "<div class='formgroup participante'></div>";
      $("#registry .formgroup:last").after(new_row);
      $("#registry .formgroup:last").html("<div class='row py-3'><div class='col-4'><input type='text' class='form-control' id='usrname" + inc +"' name='usrname" + inc +"' autofocus placeholder='Nombre'></div><div class='col-6'><input type='email' class='form-control' id='usremail" + inc +"' name='usremail" + inc +"' placeholder='Email'></div><div class='col-2'><button type='button' class='btn btn-danger delete'><i class='fas fa-times'></i></button></div></div>");
      rowCount = $("form#registry > div.formgroup").length
      $("span#countRow").text(rowCount);
      e.preventDefault();
      });
    //Remove Button
$(document).on("click", "button.delete", function() { //direct $().click() function was used but it did not work on dinamically added content
    $(this).parents("div.formgroup").hide().remove();
    rowCount = $("form#registry > div.formgroup").length
    $("span#countRow").text(rowCount);
    });
   

    
//Clear all button
$("div#btns button#four").click(function() {
  $("form#registry tr input").val(" ");
  e.preventDefault();
});

/* 
//Count Lines Button or TEST PURPOSES
$("button#three").click(function() {
  var rowCount = $("form#registry > div.formgroup").length
  $("span#countRow").text(rowCount);
  alert("This quote has " + rowCount + " elements");
});
*/

/*
//OLD Delete button function
$("button.delete").click(function(e) {
  $(this).parents("div.formgroup").remove();
  var rowCount = $("div.formgroup").size();
  $("span#countRow").text(rowCount);
  e.preventDefault();
});
*/