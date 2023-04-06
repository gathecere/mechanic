
      
   


    

      <br>
      <footer class="container-fluid bg-4 text-center">
        <p>Mechanic Record System Made By Team Eagles</p> 
      </footer>
  
    

     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


      <script type="text/javascript">
         
           function onlyTwo(checkbox) {
              var checkboxes = document.getElementsByName('service')
              checkboxes.forEach((item) => {
                  if (item !== checkbox) item.checked = false
              })
          }

            function onlyOne(checkbox) {
              var checkboxes = document.getElementsByName('status')
              checkboxes.forEach((item) => {
                  if (item !== checkbox) item.checked = false
              })
          }
     </script>



     <script type="text/javascript">







          function phoneMask() { 
                var num = $(this).val().replace(/\D/g,''); 
                $(this).val(num.substring(0,1) + '(' + num.substring(1,4) + ')' + num.substring(4,7) + '-' + num.substring(7,11)); 
            }
            $('[type="tel"]').keyup(phoneMask);


         $(document).ready(function() {
                $('#stop_id').select2();
                $('#day_id').select2();
                 $('#mechanic').select2();
                $('#repair').select2();
            });
       </script>
  </body>
</html>