$(document).ready(function () {

    

    function regsuccess(response) {

        $("#mcon").html(response);
        $("#sendmessage").fadeOut(15000);

        
    };



   

  $("#cform").submit(function (event) {
    

        event.preventDefault();

        var options = {
          url: 'action.php',
          type: 'post',
          data: new FormData(this),
          cache: false,
          processData: false,
          contentType: false,
      //    beforeSend: prog,
          success: regsuccess,
      }

      $.ajax(options);

      
  });



  
    
});