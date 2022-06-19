<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #748ee8;
  
}

.navbar a {
  float: right;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 1vw;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #224bd6;
  color:white;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: blue;
  padding: 12xp 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: blue;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 900px) {
  .nothome {
      display: none;
  }
.home {
      float: right;
   }
}
</style>
</head>
<body>

<div class="navbar">
  <div class="dropdown nothome">
    <button class="dropbtn">Mathematics Subjects
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Further Mathematics</a>
      <a href="#">Mathematical Methods</a>
      <a href="#">Specialist Mathematics</a>
    </div>
  </div> 
  
    <div class="dropdown">
    <button class="dropbtn nothome">Science Subjects
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Physics</a>
      <a href="#">Chemistry</a>
      <a href="#">Biology</a>
      <a href="#">Psychology</a>
      <a href="#">Biology</a>
      <a href="#">Environmental Science</a>
    </div>
  </div>
  
  <div class="home">
    <a href="#home" style="background-color:blue">Login Now</a>
  </div>
</div>


</body>
</html>