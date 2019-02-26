<html>
<head>
   <link href="http://alistgear.com/public/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://alistgear.com/public/assets/css/style.css" rel="stylesheet">
       <!--   <link href="http://alistgear.com/public/assets/css/bootstrap.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
    @media (max-width: 300px) {
  .carosel-item {
    width: 100%;
  }
}
@media (min-width: 300px) {
  .carosel-item {
    width: 50%;
  }
}
@media (min-width: 500px) {
  .carosel-item {
    width: 33.333%;
  }
}
/*@media (min-width: 768px) {
  .carosel-item {
    width: 25%;
  }
}*/
.carosel {
  position: relative;
  background-color: #000;
}
.carosel-inner {
  white-space: nowrap;
  overflow: hidden;
  font-size: 0;
}
.carosel-item {
  display: inline-block;
}
.carosel-control {
  position: absolute;
  top: 50%;
  padding: 15px;
  box-shadow: 0 0 10px 0px rgba(0, 0, 0, 0.5);
  transform: translateY(-50%);
  border-radius: 50%;
  color: rgba(0, 0, 0, 0.5);
  font-size: 30px;
  display: inline-block;
}
.carosel-control-left {
  left: 15px;
}
.carosel-control-right {
  right: 15px;
}
.carosel-control:active,
.carosel-control:hover {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.8);
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<div class="carosel" id="carosel1">
  <a class="carosel-control carosel-control-left glyphicon glyphicon-chevron-left" href="#"></a>

  <div class="carosel-inner">
    <div class="carosel-item" id="carosel-item">
        <div class="influenced">
         1&nbsp; PARENTS
        </div>
        <ul class="influenced-tree">
          <div class="mail">
             <li>
               <a href="JavaScript:void(0)" class="arrow-tm-lock" id="parent_lock10" onclick="lock_parent0(205)">
                    <span class="glyphicon glyphicon-lock"></span>
               </a>

                <a href="JavaScript:void(0)" class="user_tm_name"> 
                   <span>Colin Blakemore</span> </a>
               <a href="JavaScript:void(0)" class="arrow-tm-user">
                    <span class="glyphicon glyphicon-user"></span>
                </a>
            </li>
              </div>
            </ul>
      </div>
   
     <div class="carosel-item" id="firstimage">
            <div class="">
              <a href="JavaScript:void(0)" class="twPc-avatarLink">
               <img alt="abc" src="http://www.cns.nyu.edu/~tony/movshon-nasr.jpg" class="twPc-avatarImg">                    
              </a>
               <a href="JavaScript:void(0)" class="user_tm_name" style="margin-top: 12px;">
                <span>J Anthony Movshon</span> </a>
            </div>
          </div>

      <div class="carosel-item" id="firstparent">
          <div class="influenced">
           1&nbsp; CHILD
          </div>
          <ul class="influenced-tree">
                 <div class="mail">
                 <li>
                  
                   <a href="JavaScript:void(0)" class="arrow-tm-lock" id="parent_lock10" onclick="lock_parent0(205)">
                        <span class="glyphicon glyphicon-lock"></span>
                   </a>

                    <a href="JavaScript:void(0)" class="user_tm_name"> 
                       <span>Colin Blakemore</span> </a>
                   <a href="JavaScript:void(0)" class="arrow-tm-user">
                        <span class="glyphicon glyphicon-user"></span>
                    </a>
                </li>
                 
                </div>
              </ul>
            </div>
    <img class="carosel-item" src="http://placehold.it/500/f4f4f4&amp;text=4" />
    <img class="carosel-item" src="http://placehold.it/500/fcfcfc/333&amp;text=5" />
    <img class="carosel-item" src="http://placehold.it/500/f477f4/fff&amp;text=6" />
  </div>
  <a class="carosel-control carosel-control-right glyphicon glyphicon-chevron-right" href="#"></a>
</div>
</body>

<script type="text/javascript">

    $('.carosel-control-right').click(function() {
  $(this).blur();
  $(this).parent().find('.carosel-item').first().insertAfter($(this).parent().find('.carosel-item').last());
});
$('.carosel-control-left').click(function() {
  $(this).blur();
  $(this).parent().find('.carosel-item').last().insertBefore($(this).parent().find('.carosel-item').first());
});

</script>
</html>
