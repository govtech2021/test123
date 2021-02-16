
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<?php include 'headadmin.php';?>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

      <div class="container" data-layout="container">
      

      <?php include 'navigation.php';?>

        <div class="content">
        <?php include 'navigation2.php';?>
          <script>
            var navbarPosition = localStorage.getItem('navbarPosition');
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTopVertical = document.querySelector('.content .navbar-top');
            var navbarTop = document.querySelector('[data-layout] .navbar-top');
            var navbarTopCombo = document.querySelector('.content .navbar-top-combo');

            if (navbarPosition === 'top') {
              navbarTop.removeAttribute('style');
              navbarTopVertical.parentNode.removeChild(navbarTopVertical);
              navbarVertical.parentNode.removeChild(navbarVertical);
              navbarTopCombo.parentNode.removeChild(navbarTopCombo);
            } else if (navbarPosition === 'combo') {
              navbarVertical.removeAttribute('style');
              navbarTopCombo.removeAttribute('style');
              navbarTop.parentNode.removeChild(navbarTop);
              navbarTopVertical.parentNode.removeChild(navbarTopVertical);
            } else {
              navbarVertical.removeAttribute('style');
              navbarTopVertical.removeAttribute('style');
              navbarTop.parentNode.removeChild(navbarTop);
              navbarTopCombo.parentNode.removeChild(navbarTopCombo);
            }
          </script>
      <?php include 'maincontent.php';?>
        
<?php include 'adminfooter.php';?>

        </div>
      

        <?php include 'navigation3.php';?>

      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

   <?php include 'scripts.php';?>

  </body>

</html>