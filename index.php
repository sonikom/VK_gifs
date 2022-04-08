<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>VK_search</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
 		<link rel="stylesheet" href="assets/css/style.css" />    
                <link rel="stylesheet" href="assets/css/test.css" />  
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
	
                       
        
        </head>
	<body class="is-preload homepage">
<!--            <input class="txt" type="text" value="asd"/><br/>
            <input class="cir" type="radio" value="asd" checked/>asd<br/>
            <input type="checkbox" value="qwe" id="asd"/>qwe<br/> 
            
            
             <div class="radio">
    <input class="radio_input" name="car" type="radio" id="honda">
    <label class="radio_label" for="honda">Honda</label>
</div>
<div class="radio">
    <input class="radio_input" name="car" type="radio" id="renault">
    <label class="radio_label" for="renault">Renault</label>
</div>-->
		<div id="page-wrapper">

			
				<div id="header-wrapper">
					<header id="header" class="container">

						
							<div id="logo">
								<h1><a href="index.php">VK поиск</a></h1>
                                <h5 style='color:#627180; text-align:center'>проект Комаровой Сони</h5>
								<span></span>
							</div>

						
							<nav id="nav">
								<ul>
							                                                                        								

                            <br/>
                            
                            <div class="info">
                                <form class="gif-form">
                                    <input type="text" placeholder="Искать здесь..." id="form-value" class="search-input-rounded"/>
                                    <input type="range" id="my_count" min="1" max="50" step="1" value="20" />
                                    <p title="Не забудьте ввести /gif"><button type="submit" class="search_button"></button></p>

                                </form>
                                 <div>
                                     <img id="gifs_table" src=""/>
                                 </div>
                                <style>     
                                    .flex-container {
                                        /*height: 300px;*/
                                        min-height: 150px;
                                        background-color: #F5F5F5;
                                        padding: 0;
                                        margin: 0;
                                        /*list-style: none;*/
                                        display: -webkit-box;
                                        display: -moz-box;
                                        display: -ms-flexbox;
                                        display: -webkit-flex;                   
                                        display: flex; /*new*/
                                        -webkit-flex-flow: row wrap;
                                        flex-direction: row;
                                        flex-wrap: wrap;
                                        align-items: center; /*new*/
                                        /*border: 3px solid #20b0e5;*/
                                    }

                                         .item_pic {
                                             background: #F5F5F5;
                                             padding: 5px;
                                             width: 6em;
                                             height: 100px;
                                             margin: auto;
                                             color: white;
                                             font-weight: bold;
                                             font-size: 1em;
                                             text-align: center;
                                             /*border: 5px solid #20b0e5;*/
                                         }

                                          .item_pic:hover {
                                             background-color: whitesmoke;
                                             transition: 1s;
                                             /*transform: rotate(360deg);*/
                                             transform: scale(3);
                                         }
                                     </style>
                                     <div  class="flex-containe>
                                    <div id="features-wrapper"> 
                                       <div id="banner" class="box container"r">  
                                           <div class="col-7 col-12-medium">   
                                                    <div id="my_gif" >

                                                    </div>
                                                </div>                                                                                                                                                                      <!--						</div>-->
                                            </div>
                                    </div>
                                    </div>    
                                        
                                        

                                    </div>
                                                                        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
                                                                        
                                                                        <script type="text/javascript">


                                                                            $( document ).ready(function(){

                                                                              $('.search_button').on('click', function(){
                                                                                         
                                                                                var searchGifs = $('#form-value').val().trim();
                                                                                var count = $('#my_count').val().trim();        

                                                                                console.log('user=',searchGifs);        
                                                                                 var s1 = searchGifs.substring(0, 4);
                                                                                 var s3 = searchGifs.substr(4).trim();        
                                                                                console.log('s1=',s1);
                                                                                console.log('s3=',s3);      

                                                                                if(s1=='/gif'){


                                                                                var sbor = 'http://api.giphy.com/v1/gifs/search?q=' + s3 + '&api_key=RihITlppoB1H8EYK9yvaHTOKd2OW5vqq';
                                                                                console.log('URL search',sbor);


                                                                                $.ajax({url: sbor, method: 'GET'}).done(function(response){


                                                                                  console.log('data=',response.data);


                                                                                  var giphySbor = response.data[1].images.fixed_height.url;
                                                                                  console.log('Giphy URL',giphySbor);
                                                                                  console.log('count data',response.data.length);          



                                                                                  var myGif = document.getElementById('my_gif');

                                                                                    myGif.innerHTML = null;
                                                                            for (var i = 0; i < count; i++) {
                                                                                var pic = document.createElement('img');

                                                                                          var giphySbor = response.data[i].images.fixed_height.url;
                                                                                  console.log('PIC',i,'=',giphySbor);

                                                                                pic.src = giphySbor;
                                                                                pic.id = "p-" + i;
                                                                                pic.width = 50;
                                                                                pic.className = "item_pic";
                                                                                myGif.appendChild(pic);
                                                                            }


                                                                                });


                                                                                $('#reset_button').on('click', function(){

                                                                                  $('#gifs_table').attr("src",'');
                                                                                })
                                                                        }
                                                                        else
                                                                        {
                                                                            var myGif = document.getElementById('my_gif');

                                                                            myGif.innerHTML = null;
                                                                            alert('По Вашему запросу ничиго не найдено \n\nПроверьте, что Ваш запрос начинается с /gif');
                                                                        }


                                                                                return false;
                                                                              })


                                                                            });

                                                                        </script>

								</ul>
							</nav>
                                                
                                                

					</header>
				</div>

							

			
							
							

			

			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						
						<div class="row">
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
                                                                           <!-- <br/>
                                                                            <li style=''><img src="images/vk-com-logo.svg" width="80em"></img></li>
                                                                            <li style='padding-bottom: 3em; vertical-align: middle;'>Проект Сони Комаровой</span></li>-->
                                                                            <li style='padding-bottom: 3em; vertical-align: middle;'> <p>Пожалуйста, откройте полноэкранный режим</p></li>                                                                           
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>