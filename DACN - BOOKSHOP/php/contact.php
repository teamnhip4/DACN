<div id="content" class="row">
<div class="col-sm-12 col-xs-12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
<div id="post-14" class="post-14 page type-page status-publish hentry page instock">
<div class="row">
<div class="span12"><div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.792948659164!2d108.24742201446442!3d15.972185488941012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314210880eedcf27%3A0x88fc9cdcb6d63f85!2zVHLGsOG7nW5nIEPEkCBDw7RuZyBuZ2jhu4cgdGjDtG5nIHRpbiAtIMSQ4bqhaSBo4buNYyDEkMOgIG7hurVuZw!5e0!3m2!1svi!2s!4v1512163373418" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div class="span8"><h2>Thông tin</h2>
<div class="wpcf7" id="wpcf7-f208-p14-o1">
     <?php
        if ($_SERVER["REQUEST_METHOD"]=='POST')
        {
            $ten=$_POST['ten'];
            $email=$_POST['email'];
            $noidung=$_POST['noidung'];
            $query="insert into phanhoi(hoten, email, noidung, ngayph) values('$ten', '$email', '$noidung', now())";
            $rows=$db->exec($query);
            if($rows>0)
            {
                echo "<script>alert('Cảm ơn bạn đã phản hồi với chúng tôi, chúc bạn online vui vẻ')</script>";
            }
        }
        ?>
    
    <div class="contact">
    <form action="" method="post">
    <input type="text" name="ten" value="" size="40" class="" aria-required="true" placeholder="Tên:">
    <input type="email" name="email" value="" size="40" class="" aria-required="true" placeholder="E-mail:">
  <textarea name="noidung" cols="50" rows="10" class="" placeholder="Nội dung:"></textarea>

  <input type="submit" value="Gửi" class="btn btn-danger" style="padding: 15px 35px 15px 35px;">

  </form>
  </div>
</div>
</div>
</div> 

 
</div> 
</div>
</div>

