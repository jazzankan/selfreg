/**
 * Created by Anders on 2017-07-13.
 */
$(document).ready(function(){
if($('.errormsg p').text() != "" || $('#result p').text() != ""){
$('#reginput').hide();
  };

  $('a#comp').click(function(){
    $('#updatepassw').show();

  });
    $('#updatesubmit').click(function(e){
        e.preventDefault();
        var passw = $('#passw').val();
        $.ajax({
            url: 'staffcheck.php',
            type: 'post',
            data : {
                password : passw
            },
            success: function(answer) {
               if(answer == "approved"){
                   $('#result p').text("");
                   $('#reginput').show();
                   $('.update').show();
                   $('#updatepassw').hide();
               }
               else{
                   alert("Lösenordet var fel");
               }
            }
        });


    });

});
