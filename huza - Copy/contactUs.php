<!DOCTYPE html>
<html>
    <head>
        <title>
            contactUs    
        </title>
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
      body{
		background-image:url(top-view-chat-bubbles-with-telephone-receiver-copy-space_23-2148796078.avif);
		background-size:cover;
       flex-wrap:wrap;
	   padding:2px;
	   margin:2px;
		}
    ul img{
  height: 2%;
  padding-bottom: 0px;
  margin-right: 20px;
  margin-left: -20px;
  width: 10%;
}
ul{
list-style:none;
/* background:#666666; */
}
ul li{
display:inline-block;
position:relative;
}
ul li a{
display:block;
padding:20px 25px 0px;
color:#fff;
text-decoration:none;
text-align:center;
font-size:20px;
transition: 0.4s ease;
margin-left: 30px;
border-radius: 5px;
box-shadow: 3px solid #666666;
}
ul li ul.dropdown li{
display:block;
}
ul li ul.dropdown{
width:150px;
background:black;
position:absolute;
z-index:900;
display:none;
}
ul li a:hover {
background:rgb(145, 160, 145);
transition: 0.4s ease;
}
ul li:hover ul.dropdown {
display:block;
}
li a{
margin-left:2%;
text-align:center;
margin-right:2%;
}
.page{
  border-radius: 8px;
  box-shadow: 50px 50px 80px 50px rgb(92, 92, 90 );
height: 0px;
margin-top: 0px;
margin-bottom: 120px;
}
form{
		background:#006666;
		text-align:center;
		width:300px;
		height:400px;
		border-radius:12px;
		}
		label{
		color:#FFFFFF;
		}
		.center{
		display:flex;
		justify-content:center;
		padding-top:20px;
		}
		input{
		border-radius:8px;
		}
		textarea{
		border-radius:8px;
		
		}
		.submit{
		background:#00CC66;
		color:#FFFFFF;
		border-radius:5px;
		}
		h1{
		padding-top:10px;
		}
		i{
		padding:10px;
		}
		.munu a{
		text-decoration:none;
		text-align:center;
		padding:20px;
		margin-left:180px;
		display:flex-block;
		color:#FFFFFF;
		}
			.munu {
			display:flex;
			background:#333333;
			border-radius:12px;
		}
		pre{
		color:#FFFFFF;
		}
    i{
      text-align: center;
      align-items: center;
    }
    .foot{
  margin-left: 20px;
  color: rgb(166, 164, 175);
  display: block;
  width: 98%;
background: #006666;
  
}
li{
  text-align: center;
  color: rgb(41, 245, 23);
  margin-inline-end: 80px;
  font-size: large;
  margin: 0%;
  text-decoration: none;
}
ol li{
  margin: 10px;
  margin-inline-end: 80px;
  color: white;

}
ol li a{
  color: white;
  margin-left: 10px;;
}

.foot-content{
  display: inline-block;
  margin-bottom: 0%;
  color: brown;
  }
.foot-content h4{
  font-size: large;
  display: inline-block;
  text-decoration: none;
  color: rgb(241, 115, 11);
}
.foot-content h4:hover{
  font-size: 40px;
  color: white;
  background-color: black;
  

}
.foot-content a{
  display: inline-block;
  text-decoration: none;
  margin-bottom: 0%;
} 
.foot-content a:hover{
  padding-left: 4px;
  color:black;
  font-size: 30px;
  background-color: chocolate;
}
      </style>
      <body>
    <div class="page">
      <ul>
      <img src="huzalog.jpg">
    <li><a href="home.html">home </a> 
    </li>
    <li>
    <a href="#">park</a>
    <ul class="dropdown">
    <a href="akagera.html">Akagera</a>
        <a href="nyungwe.html">Nyungwe</a>
        <a href="volcanoes.html">Volcanoes</a>
        <a href="Gishwati.html">Gishwati</a>
    <a href="mukura.html">Mukura</a></li>
    </ul>
    </li>
    <li><a href="visitors.html">Visitors</a></li>
    <li>
    <a href="aboutUs.html">aboutUs</a>
    </li>
    <li>
    <a href="contactus.html">contact_us</a>
    </li>
    <button>
    <input type="text" id="search" placeholder="search...">
    <a href="#"><i class='bx bxl-search'></i></a>
    <a href="#"><i class="fa fa-search"></i> </a>
    </button>
    </ul>
    </div><br>
     <div class="welcoming">
        <h1>welcome to magic website!! contact_us as huza rwanda national parks </h1>
    </div>
   <hr width="800"><br>
   
        <div class="center">
        <i>please fill this table :</i><br>
          <form>
        <label for="fname">first name:</label><br>
        <input type="text"id="name"placeholder="your fname please"><br>
        <label for="fname">last name:</label><br>
        <input type="text"id="name"placeholder="your lname please"><br>
        <label for="fname">email:</label><br>
        <input type="text"id="name"placeholder="your email please" required><br>
        <label for="fname">subject:</label><br>
        <textarea id="text"row="20"column="20">write something to us</textarea><br>
        <pre>
         by submitting this form,
         you're interested with
         our staff and conditions
         </pre><br>
        <button class="submit">submit</button><br>
          <!-- <h1> contact us</h1><br>
    <p>you can als find us on:</p><br>
     <i class='bx-fw bx bxl-facebook-square'>smd250ation</i><br>
    <i class='bx bxl-gmail'>smdation@gmail.com</i><br>
    <i class='bx bxs-phone-call'> 0728043108</i> -->
        </form>
         </div>
         <img src="gollira.jpg" width="100%" height="15%">
         <section class="foot">
          <div class="foot-content">
             <h4>project</h4>
             <ol>
             <li><a href="#">telephone</a></li>
             <li><a href="#">radio</a></li>
            <li><a href="#">speaker</a></li>
             <li><a href="#">eye grass</a></li>
          </ol>
          </div>
          <div class="foot-content">
             <h4>basic page</h4>
             <ol>
             <li><a href="#">products</a></li>
             <li><a href="#">aboutus</a></li>
             <li><a href="#">contactus</a></li>
             <li><a href="#">services</a></li>
          </ol>
          </div>
          <div class="foot-content">
             <h4>movement</h4>
             <ol>
             <li><a href="#">our work</a></li>
             <li><a href="#">capital</a></li>
             <li><a href="#">security</a></li>
             <li><a href="#">payment</a></li>
          </ol>
          </div>
          <div class="foot-content">
             <h4>help</h4>
             <ol>             <li><a href="#">privacy</a></li>
             <li><a href="#">condition</a></li>
             <li><a href="#">blog</a></li>
             <li><a href="#">FAQs</a></li>
          </ol>

          </div>
           
          <div class="foot-content">
             <h4>our plantform</h4>
              <ol><li><a href="#"><i class='fab fa-facebook-circle'>fecbook</i></a></li>
                <li><a href="#"><i class='fab fa-twitter'>twitter</i></a></li>
                   <li><a href="#"><i class='fab fa-instagram'>instagram</i></a></li>
                      <li><a href="#"><i class='fab fa-youtube'>youtube</i></a></li>
                         <li> <a href="#"><i class='fab fa-whatsapp'>whatsapp</i></a></li>
                         </ol>
             </div>
          <div class="foot-content">
             <h4>location</h4>
               <div class="main">
                <img src="map.jpg" width="170px" height="150px" ="map.jpg" >
             </div>  
          </div> 
    </body>
</html>