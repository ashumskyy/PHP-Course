<div id="footer" class="cf">
    <div class="column three">
        <strong>Phone</strong>
        808.581.2351
    </div>
    <!-- column 1 end-->
    <div class="column three">
        <strong>Location</strong>
        123 Nicholas Cage Blvd<br />Hulktown, AL
    </div>
    <!-- column 2 end-->
    <div class="column three last">
        <strong>Hours</strong>
        <em>Tuesday - Thursday</em><br />
        1:00pm - 9:00pm<br /><br />
        <em>Friday - Saturday</em><br />
        4:00pm - 11:00pm<br /><br />
        <em>Sunday - Monday</em><br />
        Closed<br /><br />

        <?php include('StoreHours.php') ?>
    </div>
    <!-- column 3 end-->
</div>
<!-- footer end-->
<small>&copy;
    <?php echo date('Y') ?>
    <?php echo $companyName ?>
</small>
</div>
<!-- content end-->
</div>
<!-- wrapper end -->
<div class="copyright-info">
    <?php include('../../assets/includes/copyright.php') ?>
</div>
<!-- end copyright info-->
</body>

</html>