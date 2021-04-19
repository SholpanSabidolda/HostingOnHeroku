<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #ff3d47;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <img src="https://massaget.kz/userdata/news/news_38767/image.jpg"width="400">
  <h1>Jemis</h1>
  <p><b>Choice #1 among connoisseurs of natural</b></p>
</div>

<div class="navbar">
  <a href="{{url('index')}}" class="active">Home</a>
  <a href="{{url('Ourachievements')}}">Our achievements</a>
  <a href="{{url('contact')}}">contact</a>
  <a href="{{url('Payment')}}">Payment</a>
   <a href="{{url('Products')}}">Products</a>

   <a href="{{url('http://localhost/Laravel_SendMail/public/email')}}">Send me email</a>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
<div id="app">
    <div style="background-color:#343a40;">
        <nav class="navbar navbar#-expand-lg navbar-dark bg-dark container">
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                                @case('us')
                                <img width="20" src="https://i.pinimg.com/originals/19/e6/9c/19e69c19a0f2458c3a6a0ca22fc83d8b.jpg">                                
                                English

                                @break
                               
                              
                                @case('kz')
                                <img width="20" src="https://pbs.twimg.com/profile_images/1282743766319804416/vcG-kovi.jpg">
                                Kazak
                                @break
                                @case('ru')
                                 <img width="20" src="https://www.brandywineflags.com/wp-content/uploads/2018/04/Russia.jpg">
                                Ru
                                @break
                               
                                @default
                                <img width="20" src="https://i.pinimg.com/originals/19/e6/9c/19e69c19a0f2458c3a6a0ca22fc83d8b.jpg">
                                 English
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="en"><img width="20" src="https://i.pinimg.com/originals/19/e6/9c/19e69c19a0f2458c3a6a0ca22fc83d8b.jpg">English</a>
                            <a class="dropdown-item" href="ru"><img width="20" src="https://www.brandywineflags.com/wp-content/uploads/2018/04/Russia.jpg">russian</a>
                            <a class="dropdown-item" href="kz"><img width="20" src="https://pbs.twimg.com/profile_images/1282743766319804416/vcG-kovi.jpg"> kazakh</a>
                           
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    
<div class="container">
  @yield('content');
</div>
</body>
</html>
