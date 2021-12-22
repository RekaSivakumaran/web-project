<style type="text/css">

html{
    scroll-behavior: smooth;
}

*{margin: 0; padding: 0; box-sizing: boder-box; font-family: 'Mulish', sans-serif;}

.nav_style{
    background-color: #3399ff!important;
}

.nav_style a{
    color:white;
    }

/* main header */

.main_header{
    height: 450px;
    width: 100%;
}

.rightside h1{
    font-size: 3rem;
}

.virus img{
animation: corona 3s linear infinite;
}

@keyframes corona {
    0% { transform: rotate(0); }
    100% {transform: rotate(360deg);}
}

.leftside img{
    animation: world 5s linear infinite;
}

@keyframes world 
{
    0%
    {
        transform: scale(.75);
    }
    20%
    {
        transform: scale(1);
    }
    40%
    {
        transform: scale(.75);
    }
    60%
    {
        transform: scale(1);
    }
    80%
    {
        transform: scale(.75);
    }
    100%
    {
        transform: scale(.75);
    }
}

/*///////// about ///////*/

#content{
    width: 600px;
    max-height: 260px;
    overflow: hidden;
    -webkit-transition: max-height 0.7s;
    -moz-transition: max-height 0.7s;
    transition: max-height 0.7s;

}

#content.open{
    max-height: 1000px;
    -webkit-transition: max-height 0.7s;
    -moz-transition: max-height 0.7s;
    transition: max-height 0.7s;

}

#show-more{
    background: #3399ff;
    color: #fff;
    font-family: calibri;
    display: block;
    width: 140px;
    font-size: 18px;
    text-transform: uppercase;
    padding: 10px;
    text-align: center;
    margin: 20px auto;
    cursor: pointer;
}

#show-more:hover{
    background: #3333ff;
    color: black;
}

#show-more:active{
    background: #330066;
    color: white;
}



/*////////   corona update   ////////*/

.corona_update{
    margin: 0 0 30px 0;
}

.corona_update h3{
    color: #ff7675;
}

.corona_update h1{
    font-size: 2rem;
    text-align: center;

}

.link{
    margin-left: 90px;
}

.link a:link {
  color: blue;
}

.link a:hover {
  text-decoration: underline;
  color: red;
}

.link a:active {
  text-decoration: underline;
  color: green;
}

/*////////////   about section   ////////////*/

.sub_section{
    background-color: #e0e0e0;
}


/*//////////   footer   /////////*/

.footer_style{
    background-color: #3399ff!important;
}

.footer_style p{
    margin bottom: 0!important;
}

/*//////////   top scroll   /////////*/

#myBtn{
    display: none;
    position: fixed;
    bottom: 45px;
    right: 40px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: #0080ff;
    color: white;
    cursor: pointer;
    padding: 10px;
    border-radius: 10px;
}

#myBtn:hover{
    background: #606060;
}

</style>