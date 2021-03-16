<?php include 'partials/_header.php'; ?>
<?php include 'partials/_navbar.php'; ?>


<!-- slider -->
	
<div class="slideshow-container">

<?php
	
	$con=mysql_connect('localhost','root','') or die(mysql_error());
	$db=mysql_select_db('db_asian',$con) or die(mysql_error());
	$query="select * from tbl_slider";
	$result=mysql_query($query,$con) or die(mysql_error());
	while ($row=mysql_fetch_array($result)) {


?>
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="backend/<?php echo $row[3]; ?>" style="width:100%; height:500px">
  <div class="text">
	<h5><b><?php echo $row[1];  ?></b></h5>
	<h3><i><?php echo $row[2]; ?></i></h3>
		<a class="get" href="signup.php">Get Started</a><br>
		<a class="does" href="login.php"><i>Doesn't have an account??</i></a>
</div>
</div>

<?php } ?>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<!-- slider end -->

<!-- category -->
<div class="a1">
<h4 class="nob" align="center">Recent Nobels</h4>
<div class=first>
	<div class=fir>
	<img src="img/d1.jpg"   >
 	<img src="img/d3.jpg" >
   	<img src="img/d7.jpg"  >
    <img src="img/55.jpg"  >
   <img src="img/22.jpg"  >
   <img src="img/33.jpg"  >
   <img src="img/o29.png"  >
   <img src="img/p4.jpg"  >
   <img src="img/o6.jpg"  >
    <img src="img/d4.jpg"  >
</div>
</div>
</div>

<div class=a2>
<h4 class="edu" align="center">Recent Educational books</h4>
<div class=second>
	<div class=sec>
	<img src="img/10.png"   >
  <img src="img/2.png" >
   <img src="img/3.png"  >
     <img src="img/4.png"  >
   <img src="img/8.png"  >
   <img src="img/12.png"  >
   <img src="img/16.png"  >
   <img src="img/18.png"  >
   <img src="img/111.jpg"  >
    <img src="img/222.jpg"  >
</div></div>
</div>


<div class=third>
<h4 class="ess" align="center" >Quotes</h4>

	<div class=quotes-main>
		<div class=quotes-sub1>
		<ol>
	<li>"If you can’t feed a hundred people, then feed just one.”    Mother Teresa</li>
<li>"Yesterday is gone. Tomorrow has not yet come. We have only today. Let us begin.”    Mother Teresa</li>
 <li>"Be faithful in small things, because it is in them that your strength lies.”    Mother Teresa</li>
<li>"Not all of us can do great things. But we can do small things with great love.”    Mother Teresa</li>
 <li>"Kind words are short and easy to speak, but their echoes are truly endless.”    Mother Teresa</li>
 <li>"If you judge people, you have no time to love them.”    Mother Teresa</li></ol>
 <ul><li><a href="">for more click here</a></li></ul>
</div>

<div class=quotes-sub2>
	<ol start=57 type=1>
<li>“Be not afraid of life. Believe that life is worth living, and your belief will help create the fact.”– William James</li>
<li>“When I stand before God at the end of my life, I would hope that I would not have a single bit of talent left and could say, I used everything you gave me.”– Erma Bombeck</li>
<li>“Luck is a dividend of sweat. The more you sweat, the luckier you get.”
– Ray Kroc</li>
</ol>
 <ul><li><a href="">for more click here</a></li></ul>
</div>
</div></div>




	<div class=aa>
		<h3 align=center style="font-weight:bolder; font-size:40px; color:white;"><a href="stories.html"><u><b>Recent Stories</b></u></a></h3>
		<div class="story">
	<div class="story1">
	<h2><u>The Obstacle In Our Path (Opportunity)</u></h2>
		<p><em>In ancient times, a King had a boulder placed on a roadway. He then hid himself and watched to see if anyone would move the boulder out of the way. Some of the king’s wealthiest merchants and courtiers came by and simply walked around it.

Many people loudly blamed the King for not keeping the roads clear, but none of them did anything about getting the stone out of the way.

A peasant then came along carrying a load of vegetables. Upon approaching the boulder, the peasant laid down his burden and tried to push the stone out of the road. After much pushing and straining, he finally succeeded.

After</em><a href="stories.html">for more click here</a></p>
</div>
<div class="story2">
	<h2><u>The Four Smart Students</u></h2>
	<p><em>One night four college students were out partying late night and didn’t study for the test which was scheduled for the next day. In the morning, they thought of a plan.

They made themselves look dirty with grease and dirt.

Then they went to the Dean and said they had gone out to a wedding last night and on their way back the tire of their car burst and they had to push the car all the way back. So they were in no condition to take the test.</em><a href="stories.html">for more click here</a></p>
	</div>
	<div class="story3">
	<br><h2><u>Control Your Temper (Anger)</u></h2>
		<p><em>There once was a little boy who had a very bad temper. His father decided to hand him a bag of nails and said that every time the boy lost his temper, he had to hammer a nail into the fence.

On the first day, the boy hammered 37 nails into that fence.

The boy gradually began to control his temper over the next few weeks, and the number of nails he was hammering into the fence slowly decreased.

He discovered it was easier to control his temper than to hammer those nails into the fence.

Finally,<a href="stories.html">for more click here</a></em></p>
	</div></div></div>


  
<?php include 'partials/_footer.php'; ?>

