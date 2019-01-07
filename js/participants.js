//Add button
$("#add_user_button").click(function(e) {
      var new_row = "<div class='formgroup participante'></div>";
      $("#registry .formgroup:last").after(new_row);
      $("#registry .formgroup:last").html("<div class='row py-3'><div class='col-4'><input type='text' class='form-control' id='usrname' name='usremail' autofocus placeholder='Nombre'></div><div class='col-6'><input type='email' class='form-control' id='usremail' name='usremail' placeholder='Email'></div><div class='col-2'><button type='button' class='btn btn-danger delete'><i class='fas fa-times'></i></button></div></div>");
      e.preventDefault();
      });
    //Remove Button
   $(document).on("click", "button.delete", function() {
     $(this).parents("div.formgroup").hide().remove();
   });
   
    /*
    $("button.delete").click(function(e) {
      $(this).parents("div.formgroup").remove();
      var rowCount = $("div.formgroup").size();
      $("span#countRow").text(rowCount);
      e.preventDefault();
    });
    */
    
    //Count Lines Button
    $("button#three").click(function() {
      var rowCount = $("form#registry > div.formgroup").length
      $("span#countRow").text(rowCount);
      alert("This quote has " + rowCount + " elements");
    });
    
    //Count participants on load

    //Clear all button
    $("div#btns button#four").click(function() {
      $("form#registry tr input").val(" ");
      e.preventDefault();
    });