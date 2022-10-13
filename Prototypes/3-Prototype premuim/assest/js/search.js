
type="text/javascript">
               $(document).ready(function(){
                  $("#live_search").keyup(function(){
                     var input = $(this).val();
                     // alert(input);
                     if(input!= " " ){
                        $.ajax({
                           url:"../Data_access_layer/livesearch.php",
                           method:"POST",
                           data:{input:input},

                           success:function(data){
                              $("#searchresult").html(data);
                           }
                        }); 
                     }
                  });
               });
  