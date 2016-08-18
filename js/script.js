$("document").ready(function(){
approve();


});

 function approve(){
   $("#approve").on('click', function(){
   var name1=$('#check:checked').val();
  console.log(name1);

   var url = '/penpal/messageRequest.php?' +
        'name=' + encodeURIComponent(name1)

  window.location.href = url;
   });
 }
