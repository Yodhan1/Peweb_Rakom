<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Peweb Jordan 084 Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">-->
  </head>
  <style>
      * { margin: 0; padding: 0; }
      html , body { width:100%; height:100%; }
      canvas { display: block;}
  </style>
  <style>
    body {
      background-image: url("/RaKom/image/ComputerBack.jpg");
      background-size: 100% 100%;
    }
    footer {
      background-color: #777;
      padding: 10px;
      text-align: center;
      color: white;
    }

    
    .navul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333333;
    }
    
    .navli {
      float: left;
    }
    
    .navli a {
      display: block;
      color: white;
      text-align: center;
      padding: 16px;
      text-decoration: none;
    }
    
    .navli a:hover {
      background-color: #111111;
    }
  </style>
  
  <body>
    <nav> 
      <a href="/RaKom/HTML/Home.html"> 
        <img src="/RaKom/image/Logo.jpg" alt="Logo"style="width:228px;height:128px;float: left" > 
      </a>
      <h1 style="font-size:700%;text-align: center;text-align: middle;"><strong>Rakit Komputer</strong></h1>
      <br>
      <ul class = "navul">
        <li class = "navli"><a href="/RaKom/PHP/Home.PHP">Home</a></li>
        <li class = "navli"><a href="/RaKom/PHP/Part.PHP">Add Part</a></li>
        <li class = "navli" ><a href="/RaKom/PHP/About.PHP">About</a></li>
        <li class = "navli" style='float: right'><a href="/RaKom/PHP/Logout.PHP">Logout</a></li>
      </ul>
      <hr>
    </nav>

    <section style=padding-left:1em;>
      <br>
      <h3> Rakit Komputer</h3>
      <br>
    <dl style=padding-left:1em;>
      <li><a href="/RaKom/PHP/Part_motherboard.PHP">MotherBoard</a></li>
      <li><a href="/RaKom/PHP/Part_cpu.PHP">CPU</a></li>
      <li><a href="/RaKom/PHP/Part_gpu.PHP">GPU</a></li>
      <li><a href="/RaKom/PHP/Part_memory.PHP">Memory</a></li>
      <li><a href="/RaKom/PHP/Part_psu.PHP">PSU</a></li>
    </dl>    
    </section>
    <article>

    </article>
    <aside></aside>
    <footer>
      <h4 style="text-align: center">
        2020
      </h4>
    </footer>
  </body>
</html>
 