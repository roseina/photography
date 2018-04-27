
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300);
body{
  margin:0;
  padding:0;
  font-family: 'Open Sans Condensed', sans-serif;
}
.s3-container{
  position:relative;
  -webkit-perspective:1000;
  perspective:1000;
  
  .s3-flip-cards{
    width:200px;
    height:291px;
    position:relative;
    float:left;    
    margin:15px;
    -webkit-transition: all 1s ease;
    transition: all 1s ease;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    
    &:hover{
      transform: rotateY( 180deg );
      -webkit-transform: rotateY(180deg);
  }
  
  div{
      width:200px;
      height:291px;
      position:absolute;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
  }
  
  .s3-front-card{
      color:white;
      padding:0.3em;
      text-align:center;
      z-index: 2;
      background:black;
      -webkit-box-shadow: 0 4px 3px -3px black;
      -moz-box-shadow: 0 4px 3px -3px black;
      box-shadow: 0 4px 3px -3px black;
  }
  
  .s3-reverse-card{
      padding:0.3em;
      h1{
        margin:0;
        padding:0;
        border-bottom:solid 1px #f0f0f0;
    }
    p{}
    a{
        text-decoration:none;
        color:black;
        background:white;
        padding:0.5em;
        display:block;
        &:hover{
            color:white;
            background:black;
        }
    }
    border:solid 1px #ccc;
    background:#f0f0f0;
    -webkit-box-shadow: 0 8px 6px -6px black;
    -moz-box-shadow: 0 8px 6px -6px black;
    box-shadow: 0 8px 6px -6px black;
    -webkit-transform: rotateY(180deg);
    transform: rotateX( 180deg );
}
}

}



</style>
<div class="s3-container">
  <div class="s3-flip-cards">
    <div class="s3-front-card">
      <h1>Title</h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  </div>
  <div class="s3-reverse-card">
      <h1>Title</h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <a href="#">Read More</a>
  </div>
</div>
<div class="s3-flip-cards">
    <div class="s3-front-card">
      <h1>Title</h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  </div>
  <div class="s3-reverse-card">
      <h1>Title</h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <a href="#">Read More</a>
  </div>
</div>
<div class="s3-flip-cards">
    <div class="s3-front-card">
      <h1>Title</h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  </div>
  <div class="s3-reverse-card">
      <h1>Title</h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <a href="#">Read More</a>
  </div>
</div>
<div class="s3-flip-cards">
    <div class="s3-front-card">
      <h1>Title</h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  </div>
  <div class="s3-reverse-card">
      <h1>Title</h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <a href="#">Read More</a>
  </div>
</div>
</div>