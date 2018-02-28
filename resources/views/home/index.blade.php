<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
@include('include.head')
<body>

<!--header section -->
@include('include.navbar')
<!--header section --> 
<!--intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="intro-content">
          <h2 class="text-center">About Us</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--intro section --> 
<!--intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12">
      <h2 class="text-center">Destaques</h2>
    </div>
  </div>
    <div class="row">
           <div class="col-xs-4">
            <div class="card" style="width: 40rem;">
              <img class="card-img-top" src="./images/produtos/hall/amr7.jpg" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Movel XPTO</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-4 col-md-offset-1">
                <div class="card" style="width: 40rem;">
                <img class="card-img-top" src="./images/produtos/hall/amr7.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Movel XPTO2</h4>
                </div>
           </div>
         </div>
     </div>
</div>
</section>
<!--intro section --> 

<!--subscribe section -->
<section id="subscribes" class="subscribe">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-5 subscribe-title">
        <h2>Subscreve a nossa Newsletter</h2>
      </div>
      
      <!-- subscribe form -->
      <div class="col-sm-12 col-md-7 subscribe-form"> 
               
        <form method="post" action="php/subscribe.php" name="subscribeform" id="subscribeform">
          <input type="text" name="email" placeholder="Introduza um email válido" id="subemail" />
          <input type="submit" name="send" value="Enviar" id="subsubmit" class="btn2" />
        </form>
        
        <!-- subscribe message -->
        <div id="mesaj"></div>
        <!-- subscribe message --> 
      </div>
      <!-- subscribe form --> 
    </div>
  </div>
</section>
<!--subscribe section --> 

<!-- Footer section --> 
@include('include.footer')
<!-- JS files--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.backstretch.min.js"></script> 
<script src="js/jquery.countdown.js"></script> 
<script type="text/javascript" src="js/jquery.subscribe.js"></script> 
<script src="js/main.js"></script>

</body>
</html>
