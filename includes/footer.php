<!--footer-->
<div class="footer">
    <!-- container -->
    <div class="container">
      <div class="col-md-6 footer-left">
        <ul>
        </ul>
       
      </div>
      <div class="col-md-3 footer-middle">
        <?php
$sql="SELECT * from page where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
        <h3>Address</h3>
        <div class="address">
          <p><?php  echo htmlentities($row->PageDescription);?>
          </p>
        </div>
        <div class="phone">
          <p><?php  echo htmlentities($row->MobileNumber);?></p>
        </div>
      <?php $cnt=$cnt+1;}} ?></div>
      <div class="col-md-3 footer-right">
        <h3>Production System</h3>
        <p>This Online Production System in PHP and MySQL, allows baker and supervisor to easily manage their production , recipe , and ingeredient to produce the cake or other. </p>
      </div>
      <div class="clearfix"> </div> 
    </div>
    <!-- //container -->
  </div>
<!--/footer-->
<!--copy-rights-->
<div class="copyright">
    <!-- container -->
    <div class="container">
      <div class="copyright-left">
      <p>© <?php echo date('Y');?> Ryan Bakery | Production Management System </p>
      </div>
      <div class="copyright-right">
        <ul>
          <li><a href="#" class="twitter"> </a></li>
          <li><a href="#" class="twitter facebook"> </a></li>
          <li><a href="#" class="twitter chrome"> </a></li>
          <li><a href="#" class="twitter pinterest"> </a></li>
          <li><a href="#" class="twitter linkedin"> </a></li>
          <li><a href="#" class="twitter dribbble"> </a></li>
        </ul>
      </div>
      <div class="clearfix"> </div>
      
    </div>
    <!-- //container -->
    <!---->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
        */
    $().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
  </div>