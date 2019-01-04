//Add button
$("#add_user_button").click(function(e) {
      var new_row = "<div class='formgroup'></div>";
      $("form#registry .formgroup:last").after(new_row);
      $("form#registry .formgroup:last").html("<div class='row py-3'><div class='col-6'><input type='text' class='form-control' id='usrname' name='usremail' autofocus placeholder='Nombre'></div><div class='col-6'><input type='email' class='form-control' id='usremail' name='usremail' placeholder='Email'></div>");
      e.preventDefault();
      });
   
   /*
    //Remove Button
    $("div#btns button#two").click(function() {
      $("form#registry div.formgroup:last").hide().remove();
      var rowCount = $("div.formgroup").size();
      $("span#countRow").text(rowCount);
      e.preventDefault();
    });
    //Count Lines Button
    $("div#btns button#three").click(function() {
      var rowCount = $("div.formgroup").size();
      $("span#countRow").text(rowCount);
      alert('This quote has ' + rowCount + ' elements');
      e.preventDefault();
    });

    //Clear all button
    $("div#btns button#four").click(function() {
      $("form#registry tr input").val(" ");
      e.preventDefault();
    });
    
    */