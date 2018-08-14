/* User_login page */


<?php include "header.php";?>
    <!-- Page Content -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 text-center">

        </div>
          <div class="col-lg-4 ">
              <form action="loginchk.php" method="post">
                  Email: <input type="email" class="form-control" name="uname"><br/>
                  Password: <input type="password" class="form-control" name="upass"><br/>
                  <div>
                  <button type="button" class="btn btn-success" id="spinner" onclick="show()"  name="submit">Login</button>
                   <div id="spinner">
                <img src="loads.gif" alt="Loading" />
              </div>
                </div>
                   

            </form>

        
               
        
          </div>
          <div class="col-lg-4 text-center">

          </div>
      </div>
    </div>
 <script type="text/javascript">
     $(document).ready(function () {

    $('#spinner').bind("ajaxSend", function() {
        $(this).show();
    }).bind("ajaxComplete", function() {
        $(this).hide();
    });

});
 </script>


<?php include "footer.php";?>
