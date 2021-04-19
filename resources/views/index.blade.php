@extends('layout')
@section('content')
 <div class="container">
        <h1 class="display-4 text-center" style="font-size: 7.0rem;font-family: cursive;">{{ __('lang.welcome', ['Name' => 'to Food Shop'])}}</h1>
        <h3 class="display-4 text-center" style="font-size: 5.0rem;font-family: fantasy;color: cadetblue">{{ __('lang.title') }}</h3>
        <h4 class="display-4 text-center" style="font-size: 3.0rem;font-family: fantasy;color:chocolate">{{ __("lang.body")}}</h4>
        <br><br>
        <h4 class="display-4 text-center" style="font-size: 5.0rem;font-family: cursive;color: rosybrown">{{ __("lang.Healthy and good life")}}</h4>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-box {
  background-color:orange;
  width:1050px;
  height: 400px;
  border: 90px solid #DAF7A6;
  perspective: 1000px;
   display: flex;
  justify-content: space-between;
  flex-flow: row;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);

}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #90FEF3 ;
  color: black;
}

.flip-box-back {
  background-color: pink;
  color: white;
  transform: rotateY(180deg);
}
</style>
</head>
<body>

<h1></h1>


<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
        <h2>Free shipping
</h2>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzC_tuWhxuu_851CK9TEtVonUXcP-5_fZbsg&usqp=CAU"width="200">
    
    </div>
    <div class="flip-box-back">
      <h2>Deliver day to day the time you choose!</h2>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR15oButabZ2ZnLOor4mYuwh1Auewu66Jhv1Q&usqp=CAU"width="100">
 

    </div>
  </div>
  <div class="flip-box-inner">
    <div class="flip-box-front">
        <h2>
Bonus programs
</h2>
      <img src="http://blog.timesunion.com/opinion/files/2012/12/freemoney.jpg"width="100">
    
    </div>
    <div class="flip-box-back">
      <h2>We will accrue bonuses for each order</h2>
      <img src="https://www.asicentral.com/media/13603/corporate-incentives-479.jpg"width="100">
 

    </div>
  </div>
  <div class="flip-box-inner">
    <div class="flip-box-front">
        <h2>

Freshness guarantee 
</h2>
      <img src="https://media.gettyimages.com/photos/fresh-vegetables-still-life-picture-id1125868202?s=612x612"width="200">
    
    </div>
    <div class="flip-box-back">
      <h2>Selected products with return option</h2>
      <img src="https://cdn.technologynetworks.com/tn/images/thumbs/jpeg/640_360/rapid-reliable-way-to-determine-the-freshness-of-fruit-289704.jpg"width="200">
 

    </div>
  </div>
</div>
</body>
</html>
    


<img src="https://www.thelocalvoice.net/oxford/wp-content/uploads/2019/12/healthy-lifestyle.jpg">
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			
			<div class="fakeimg">
				<img src="https://cdn.britannica.com/22/75922-050-D3982BD0/flowers-fruits-garden-strawberry-plant-species.jpg" width="900">
		
				
			</div>
			 

<body>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-box {
  background-color:orange;
  width:1050px;
  height: 400px;
  border: 90px solid #DAF7A6;
  perspective: 1000px;
   display: flex;
  justify-content: space-between;
  flex-flow: row;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);

}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #90FEF3 ;
  color: black;
}

.flip-box-back {
  background-color: pink;
  color: white;
  transform: rotateY(180deg);
}
</style>
</head>
<body>

<h1></h1>


<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
        <h2>Free shipping
</h2>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzC_tuWhxuu_851CK9TEtVonUXcP-5_fZbsg&usqp=CAU"width="200">
    
    </div>
    <div class="flip-box-back">
      <h2>Deliver day to day the time you choose!</h2>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR15oButabZ2ZnLOor4mYuwh1Auewu66Jhv1Q&usqp=CAU"width="100">
 

    </div>
  </div>
  <div class="flip-box-inner">
    <div class="flip-box-front">
        <h2>
Bonus programs
</h2>
      <img src="http://blog.timesunion.com/opinion/files/2012/12/freemoney.jpg"width="100">
    
    </div>
    <div class="flip-box-back">
      <h2>We will accrue bonuses for each order</h2>
      <img src="https://www.asicentral.com/media/13603/corporate-incentives-479.jpg"width="100">
 

    </div>
  </div>
  <div class="flip-box-inner">
    <div class="flip-box-front">
        <h2>

Freshness guarantee 
</h2>
      <img src="https://media.gettyimages.com/photos/fresh-vegetables-still-life-picture-id1125868202?s=612x612"width="200">
    
    </div>
    <div class="flip-box-back">
      <h2>Selected products with return option</h2>
      <img src="https://cdn.technologynetworks.com/tn/images/thumbs/jpeg/640_360/rapid-reliable-way-to-determine-the-freshness-of-fruit-289704.jpg"width="200">
 

    </div>
  </div>
</div>
</body>
</html>


			@stop
