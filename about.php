<!--    about section     -->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
  <div class="section_header text-center mb-5 mt-4">
    <h1> About COVID-19 </h1>
  </div>
  <div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-5">
      <img src="images/img0.jpg" class="img-fluid">

  </div>

  <div class="col-lg-6 col-md-6 col-12">
    <h2>What is COVID-19(Corona-Virus)</h2>
    <div id="content">
    <p>COVID-19 is the infection disease caused bu the most recently discovered corona-virus. 
      This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019.</p>
    <p>As of now, researchers know that the coronavirus is spread through droplets and virus particles 
      released into the air when an infected person breathes, talks, laughs, sings, coughs or sneezes. 
      Larger droplets may fall to the ground in a few seconds, but tiny infectious particles can linger 
      in the air and accumulate in indoor places, especially where many people are gathered and there is poor
       ventilation. This is why mask-wearing, hand hygiene and physical distancing are essential to 
       preventing COVID-19.</p>
    <p>Corona-viruses are a large family of virus which many cause illness in animals or humans. 
      In humans, several coronaviruses are known to cause respiratory infections ranging from the common
      cold to more severe diseases such as Middle East Respiratory Syndrome (MERS). and severe Acute Respiratory
      Syndrome (SARS). The most recently discovered corona-virus causes corona-virus disease COVID-19.
      Symptoms show up in people within two to 14 days of exposure to the virus. A person infected with
      the coronavirus is contagious to others for up to two days before symptoms appear, and they remain 
      contagious to others for 10 to 20 days, depending upon their immune system and the severity of 
      their illness.</p>
   <p>The virus can spread from an infected person’s mouth or nose in small liquid particles 
   when they cough, sneeze, speak, sing or breathe. These particles range from larger respiratory droplets 
   to smaller aerosols. It is important to practice respiratory etiquette, for example by coughing into a 
   flexed elbow, and to stay home and self-isolate until you recover if you feel unwell.</p>
    </div>
    </div>
</div>
<a id="show-more">show More</a>
</div>



<script type="text/javascript">

var content = document.getElementById("content");
var button = document.getElementById("show-more");

button.onclick = function(){
  if(content.className == "open"){
      //shrink the box
      content.className = "";
      button.innerHTML ="Show More";

  }else{
    //expand the box
    content.className = "open";
    button.innerHTML ="Show Less";

  }
};
</script>


