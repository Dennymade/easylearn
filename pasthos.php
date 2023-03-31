<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="home.css">
<style type="text/css">

/*body, html {margin:0; padding:0; height:100%}*/

#wrapper {
  margin: 0 auto;
  height: 100%;
  background: #ff9;
}
#wrapper div {
  overflow:hidden; /* optional, hide eventual odd pixels overflow */
  width: 800px;
  width: 100%;
  height: 800px;
  height: 100%;
}
#wrapper div div{
  float: left;
  height: 25%;
  width: 25%;
  margin: 0;
}
#wrapper .odd{
  margin-right:-4px; /* avoid wrap when calculated odd pixels are added */
}
#wrapper {
  margin: 0 auto;
  height: 100%;
  background: #ff9;
  a: hover;
}
#wrapper div {
  /*overflow:hidden; /* optional, hide eventual odd pixels overflow */
  width: 800px;
  width: 100%;
  height: 800px;
  height: 800px;
  a: hover;
}
{
  float: left;
  height: 25%;
  width: 25%;
  margin: 0;
  a: hover;
}
#wrapper .odd{
  margin-right:-4px; /* avoid wrap when calculated odd pixels are added */
  a: hover;#wrapper div div
}
  img:hover {
  border: 5px solid #555;
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}
@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
 img, .header, .container, .odsip, .hosimg.row,column,.card. .button{
    width: 100%;
  }
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.hosimg{
  width: 350px;
  height:300px;
}

</style>
</head>
<body bgcolor="#f9dcb5">

<header class="head1">
<div class="header">
  <header id:bghead>
        <table bgcolor="#fffff0" style="border: none;">
          <tr>
            <td ><img src="image/nigerialogo5.jpg" width="70px" height="70px"></td>
            <td  width="2000px" height="7px" >
              
                <center>
                  <font color="purple" size="18"><bold> Ondo State Office of  Establishments and Training</bold></font>
                </center>
                
            </td> 
            <td  float="right"><img src="image/ondologo12.jpg" width="85px" height="80px"></td>
          </tr>
        </table>
      </header>
</div>
</header>


<ul class="toplink">
  <li class="toplink"><a href="index.php" class="toplink">Home</a></li>
  <li class="toplink"><a href="#estabhis" target="_blank" class="toplink">About Us</a></li>
  <li class="toplink"><a href="#home" class="toplink">Gallery</a></li>
  <li class="toplink"><a href="#news" class="toplink">News</a></li>
  <li class="toplink"><a href="Hsignin" class="toplink">Sign In</a></li>
  <li class="toplink"><a href="#news" class="toplink">e-Services</a></li>
  <li class="toplink"><a href="#pasthos.php" target="_blank" class="toplink">HOS office</a></li>
  <li class="toplink"><a href="#news" class="toplink">PS office</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Departments</a>
    <div class="dropdown-content">
      <a href="#">Estabs </a>
      <a href="#">Training</a>
      <a href="#">ILR</a>
    </div>
  </li>
</ul>


<hr>

<div class="odsip">

            <hr>

<h2> "Meet The Present and Past HOS of Ondo State"</h2>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="image/ogundele.jpg" alt="Jane" class="hosimg">
      <div class="container">
        <h2>Kayode Ogundele</h2>
        <p class="title">From 7th August, 2022</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/adeyemo1.jpg" alt="Mike" class="hosimg" >
      <div class="container">
        <h2>Adeniran Adeyemo</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="image/aragbaye1.jpg" alt="John" class="hosimg" >
      <div class="container">
        <h2>Oludare Aragbaye</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<hr>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="image/akinkuotu.jpg" alt="Jane"  class="hosimg">
      <div class="container">
        <h2>Barr. Toyin Akinkuotu</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/kosemani.jpg" alt="Mike"  class="hosimg" >
      <div class="container">
        <h2>Chief Mrs Kosemani Kolawole</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="image/Kudehinbu.jpg" alt="John" class="hosimg" >
      <div class="container">
        <h2>Ajose Kudehinbu</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>





<hr>

        </div>





<hr>

<footer class="footer">
    
<div class="foot2">
      
      <font color="green"><b>Vision:&nbsp;</b> </font>
    <font color="red"> To achieve a better public service , better institutions, better governance and better Ondo State people.</font>
      
    </div>
    
    <div class="foot1">
      
      <font color="green"><b>Mission:&nbsp;</b> </font>

      <font color="red">To develop and coordinate ideas that would enhance productivity, improve processes, and ensure effective service delivery in Ondo state</font>
    </div>

    
  </footer>

</body>
</html>
