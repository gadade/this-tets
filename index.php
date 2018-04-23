<?php
include 'function.php';
include 'header.php';
?>

  <section id="sliderSection" >
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          
		<?php
		
			$id = '';
			$news_list = get_News($id);
			for($i = 0; $i < count($news_list);$i++)
			{
				
		?>
         <div class="single_iteam"><a href="news_detail.php?news='<?php echo base64_encode($news_list[$i]['newstitle']); ?>'&  id=<?php echo base64_encode($news_list[$i]['id']); ?>"> <img src="http://waarta.in/News_data/<?php echo $news_list[$i]['news_pic1']; ?>" alt=""></a>
            <div class="slider_article">
              <h2><a style="font-weight:bold" class="slider_tittle" href="news_detail.php?news='<?php echo base64_encode($news_list[$i]['newstitle']);?>'&  id=<?php echo base64_encode($news_list[$i]['id']);?>"><?php echo $news_list[$i]['newstitle']; ?></a></h2>
            </div>
          </div>
		  <?php
			}
		  ?>
		  
		 <!-- <div class="single_iteam"> <a href="news_detail.php"> <img src="images/Sasikala-greets-supporters_PTI.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="news_detail.php">Sasikala convicted: Here's a look at how newspapers covered the Supreme Court verdict</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>-->
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span style="background:#ff0003;">राजकीय</span></h2>
          <div class="latest_post_container" style=" overflow: hidden;" >
            <div id="prev-button"><i class="fa fa-chevron-up" style="color:#ab0306"></i></div>
            <ul class="latest_postnav">
              <li>
			  <?php
			  
			   $id = '';
			   $politicalnews_list = get_newsBypolitical_id($id);
			   
			   for($i = 0; $i < count($politicalnews_list);$i++)
			   {	
				?>
                <div class="media"> 
				<a class="media-left" href="news_detail.php?news='<?php echo base64_encode($politicalnews_list[$i]['newstitle']); ?>'&  id=<?php echo base64_encode($politicalnews_list[$i]['id']); ?>" ><img alt="" src="http://waarta.in/News_data/<?php echo $politicalnews_list[$i]['news_pic1']; ?>" >
                <div class="media-body"> 
					<?php
						
					echo'<a  style="font-weight:bold" href="news_detail.php?news='.base64_encode($politicalnews_list[$i]['newstitle']).'&  id='.base64_encode($politicalnews_list[$i]['id']).'" class="catg_title">'.$politicalnews_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.timeAgo($politicalnews_list[$i]['create_at']).'</p>';
					?>
					</div>
                </div>
				<?php
				}
				?>
              </li>
            </ul>
            <!--div id="next-button"><i class="fa  fa-chevron-down" style="color:#ab0306"></i></div-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span style="background:#ff0003;">ताज्या बातम्या</span></h2>
            <div class="single_post_content col-md-12" >
              <ul class="business_catgnav  wow fadeInDown">
                
				<?php
				$id = '';
				$districtnews_list = get_districtidByNews($id);
				
				for($i = 0; $i<count($districtnews_list);  $i++)
				{	
				?> 
				<li>
                  <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($districtnews_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($districtnews_list[$i]['id']); ?>" class="media-left"><img alt="" style="width:150px; height:130px" src="http://waarta.in/News_data/<?php echo $districtnews_list[$i]['news_pic1']; ?>" > </a>
                    <div class="media-body"> 
					<?php
						
					echo'<a style="font-size:14px;font-weight:bold" href="news_detail.php?news='.base64_encode($districtnews_list[$i]['news_pic1']).'& id='. base64_encode($districtnews_list[$i]['id']).'" class="catg_title">'.$districtnews_list[$i]['newstitle'].'</a>';
					echo'<p style="font-size:13px;line-height: 21px;font-family:Ek Mukta,sans-serif;">'.substr(html_entity_decode($districtnews_list[$i]['description']),0,500).'<a href="news_detail.php?news='.base64_encode($districtnews_list[$i]['news_pic1']).'& id='.base64_encode($districtnews_list[$i]['id']).'" class="catg_title" style="color: #ab0306;" >...आणखी वाचा</a></p>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>';
					
					echo $newDate = date("d-m-Y", strtotime($districtnews_list[$i]['insert_at']));
                    /*$start = date_create($districtnews_list[$i]['insert_at']);
                    $end = date_create($date);
                    $diff=date_diff($end,$start);
					//print_r($diff);
                    echo $diff->h.':'.$diff->i.':'.$diff->s;*/
					echo'</p>';
					?>
					</div>
                  </div>
				  </li>
				  <?php
				  /* if($i==10)
				   {
					 $i = count($districtnews_list);
					?>
					<div class="media wow fadeInDown"> <a href="news_detail.php" class="media-left">आणखी वाचा </a>
					</div>
					<?php
						}*/
						
					    }
					?>
                <li>
                  <div class="media wow fadeInDown" style="float: right; padding-bottom: 10px;" > <a href="news_detail.php" class="media-left" style="color: #ff0003;" >आणखी वाचा ...</a>
				  </div>
				</li>
              </ul>
            </div>
            
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span style="background:#ff0003;">क्रिडा</span></h2>
                
                <ul class="spost_nav">
                  
				   <?php
					$id = '';
					$sportnews_list = get_sportidByNews($id);
					for($i = 0; $i <count($sportnews_list) ;$i++)
					{
						
				  ?>
				  <li>
                    <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($sportnews_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($sportnews_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $sportnews_list[$i]['news_pic1']; ?>" > </a>
					
					<div class="media-body"> 
					<?php
						
					echo'<a style="font-weight:bold" href="news_detail.php?news='.base64_encode($sportnews_list[$i]['news_pic1']).'& id='. base64_encode($sportnews_list[$i]['id']).'" class="catg_title">'.$sportnews_list[$i]['newstitle'].'</a>';
					
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.date("d-m-Y", strtotime($districtnews_list[$i]['insert_at'])).'</p>';
					
					?>
					</div>
					 
                    </div>
					</li>
					<?php
					}
					?>
                  
				  <li>
                  <div class="media wow fadeInDown" style="float: right; padding-bottom: 10px;" > <a href="news_detail.php?cat_id=<?php echo base64_encode('102'); ?>" class="media-left" style="color: #ff0003;" >आणखी वाचा ...</a>
				  </div>
				</li>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span style="background:#ff0003;">फूडसफारी  </span></h2>
                <ul class="spost_nav">
                  <li>
					<?php
					$id = '';
					$politicalnews_list = get_newsBypolitical_id($id);
					
					for($i = 0; $i < count($politicalnews_list);$i++)
					{
						if($politicalnews_list[$i]['cat_id']==124)
						{
				  ?>
                    <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($politicalnews_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($politicalnews_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $politicalnews_list[$i]['news_pic1']; ?>" > </a>
                      <div class="media-body"> 
					<?php
						
					echo'<a style="font-weight:bold" href="news_detail.php?news='.base64_encode($politicalnews_list[$i]['news_pic1']).'& id='. base64_encode($politicalnews_list[$i]['id']).'" class="catg_title">'.$politicalnews_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f;"><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.date("d-m-Y", strtotime($districtnews_list[$i]['insert_at'])).'</p>';
					
					?>
					</div>
                    </div>
					<?php
						}
					}
					?>
                  </li>
                  </li>
                </ul>
              </div>
            </div>
          </div>
		   <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span style="background:#ff0003;">प्रशासकीय </span></h2>
                
                <ul class="spost_nav">
                  
				   <?php
					$id = '';
					$governmentnews_list = get_newsBygovernment_id($id);
					for($i = 0; $i <count($governmentnews_list);$i++)
					{
						
				  ?>
				  <li>
                    <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($governmentnews_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($governmentnews_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $governmentnews_list [$i]['news_pic1']; ?>" > </a>
					
					<div class="media-body"> 
					<?php
						
					echo'<a style="font-weight:bold" href="news_detail.php?news='.base64_encode($governmentnews_list[$i]['news_pic1']).'& id='. base64_encode($governmentnews_list[$i]['id']).'" class="catg_title">'.$governmentnews_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.date("d-m-Y", strtotime($districtnews_list[$i]['insert_at'])).'</p>';
					
					?>
					</div>
					 
                    </div>
					</li>
					<?php
						
					}
					?>
                  
				  <li>
                  <div class="media wow fadeInDown" style="float: right; padding-bottom: 10px;" > <a href="news_detail.php?cat_id=<?php echo base64_encode('99'); ?>" class="media-left" style="color: #ff0003;" >आणखी वाचा ...</a>
				  </div>
				</li>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span style="background:#ff0003;">कृषिविषयक</span></h2>
                <ul class="spost_nav">
                  
					<?php
					$id = '';
					$agriculturenews_list = get_newsByagriculture_id($id);
					for($i = 0; $i < count($agriculturenews_list);$i++)
					{
						
				  ?>
				  <li>
                    <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($news_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($news_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $agriculturenews_list[$i]['news_pic1']; ?>" > </a>
                      <div class="media-body"> 
					<?php
						
					echo'<a style="font-weight:bold" href="news_detail.php?news='.base64_encode($news_list[$i]['news_pic1']).'& id='. base64_encode($news_list[$i]['id']).'" class="catg_title">'.$agriculturenews_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.date("d-m-Y", strtotime($districtnews_list[$i]['insert_at'])).'</p>';
					
					?>
					</div>
                    </div>
					</li>
					<?php
						
					}
					?>
                  
                   <li>
                  <div class="media wow fadeInDown" style="float: right; padding-bottom: 10px;" > <a href="news_detail.php?cat_id=<?php echo base64_encode('120'); ?>" class="media-left" style="color: #ff0003;" >आणखी वाचा ...</a>
				  </div>
				</li>
                </ul>
              </div>
            </div>
          </div>
		  <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span style="background:#ff0003;">सामाजिक </span></h2>
                
                <ul class="spost_nav">
                  
				   <?php
					$id = '';
					$social_news_list = get_socialNewsByid($id);
					for($i = 0; $i < count($social_news_list);$i++)
					{
						
				  ?>
				  <li>
                    <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($social_news_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($social_news_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $social_news_list[$i]['news_pic1']; ?>" > </a>
					
					<div class="media-body"> 
					<?php
						
					echo'<a style="font-weight:bold" href="news_detail.php?news='.base64_encode($social_news_list[$i]['news_pic1']).'& id='. base64_encode($social_news_list[$i]['id']).'" class="catg_title">'.$social_news_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.date("d-m-Y", strtotime($districtnews_list[$i]['insert_at'])).'</p>';
					
					?>
					</div>
					 </div>
					 </li>
					<?php
						
					}
					?>
                  
				  <li>
                  <div class="media wow fadeInDown" style="float: right; padding-bottom: 10px;" > <a href="news_detail.php?cat_id=<?php echo base64_encode('100'); ?>" class="media-left" style="color: #ff0003;" >आणखी वाचा ...</a>
				  </div>
				</li>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span style="background:#ff0003;">निवडणूक विशेष</span></h2>
                <ul class="spost_nav">
                  
					<?php
					$id = '';
					$election_news_list = get_electionNewsByid($id);
					for($i = 0; $i < count($election_news_list);$i++)
					{
						
				  ?>
				  <li>
                    <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($election_news_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($election_news_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $election_news_list[$i]['news_pic1']; ?>" > </a>
                      <div class="media-body"> 
					<?php
						
					echo'<a style="font-weight:bold" href="news_detail.php?news='.base64_encode($election_news_list[$i]['news_pic1']).'& id='. base64_encode($election_news_list[$i]['id']).'" class="catg_title">'.$election_news_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.date("d-m-Y", strtotime($districtnews_list[$i]['insert_at'])).'</p>';
					
					?>
					</div>
                    </div>
					</li>
					<?php
						}
					?>
                  
                  <li>
                  <div class="media wow fadeInDown" style="float: right; padding-bottom: 10px;" > <a href="news_detail.php?cat_id=<?php echo base64_encode('114'); ?>" class="media-left" style="color: #ff0003;" >आणखी वाचा ...</a>
				  </div>
				</li>
                </ul>
              </div>
            </div>
          </div>
		   <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span style="background:#ff0003;">नैसर्गिक आपत्ती  / अपघात</span></h2>
                
                <ul class="spost_nav">
                  
				   <?php
					$id = '';
					$accidentnews_list = get_newsByaccident_id($id);
					for($i = 0; $i < count($accidentnews_list);$i++)
					{
						
				  ?>
				  <li>
                    <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($accidentnews_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($accidentnews_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $accidentnews_list[$i]['news_pic1']; ?>" > </a>
					
					<div class="media-body"> 
					<?php
						
					echo'<a style="font-weight:bold" href="news_detail.php?news='.base64_encode($accidentnews_list[$i]['news_pic1']).'& id='. base64_encode($accidentnews_list[$i]['id']).'" class="catg_title">'.$accidentnews_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.date("d-m-Y", strtotime($districtnews_list[$i]['insert_at'])).'</p>';
					
					?>
					</div>
					 </div>
					 </li>
					<?php
					}
					?>
                  
				  <li>
                  <div class="media wow fadeInDown" style="float: right; padding-bottom: 10px;" > <a href="news_detail.php?cat_id=<?php echo base64_encode('118'); ?>" class="media-left" style="color: #ff0003;" >आणखी वाचा ...</a>
				  </div>
				</li>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span style="background:#ff0003;">दिनविशेष </span></h2>
                <ul class="spost_nav">
                  
					<?php
					$id = '';
					$eventsnews_list = get_newsByevents_id($id);
					for($i = 0; $i < count($eventsnews_list);$i++)
					{
						
				  ?>
				  <li>
                    <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($eventsnews_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($eventsnews_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $eventsnews_list[$i]['news_pic1']; ?>" > </a>
                      <div class="media-body"> 
					<?php
						
					echo'<a style="font-weight:bold" href="news_detail.php?news='.base64_encode($eventsnews_list[$i]['news_pic1']).'& id='. base64_encode($eventsnews_list[$i]['id']).'" class="catg_title">'.$eventsnews_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.date("d-m-Y", strtotime($districtnews_list[$i]['insert_at'])).'</p>';
					
					?>
					</div>
                    </div>
					</li>
					<?php
						}
					?>
                  
                  <li>
                  <div class="media wow fadeInDown" style="float: right; padding-bottom: 10px;" > <a href="news_detail.php?cat_id=<?php echo base64_encode('119'); ?>" class="media-left" style="color: #ff0003;" >आणखी वाचा ...</a>
				  </div>
				</li>
                </ul>
              </div>
            </div>
          </div>
		  <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span style="background:#ff0003;">मनोरंजन / बॉलीवूड </span></h2>
                
                <ul class="spost_nav">
                  
				   <?php
					$id = '';
					$Enter_news_list = get_EnteridByNews($id);
					for($i = 0; $i < count($Enter_news_list);$i++)
					{
						
				  ?>
				  <li>
                    <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($Enter_news_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($Enter_news_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $Enter_news_list[$i]['news_pic1']; ?>" > </a>
					
					<div class="media-body"> 
					<?php
						
					echo'<a style="font-weight:bold" href="news_detail.php?news='.base64_encode($Enter_news_list[$i]['news_pic1']).'& id='. base64_encode($Enter_news_list[$i]['id']).'" class="catg_title">'.$Enter_news_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.date("d-m-Y", strtotime($districtnews_list[$i]['insert_at'])).'</p>';
					
					?>
					</div>
					 </div>
					 </li>
					<?php
						
					}
					?>
                  <li>
                  <div class="media wow fadeInDown" style="float: right; padding-bottom: 10px;" > <a href="news_detail.php?cat_id=<?php echo base64_encode('105'); ?>" class="media-left" style="color: #ff0003;" >आणखी वाचा ...</a>
				  </div>
				</li>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span style="background:#ff0003;">जीवन शैली / आरोग्य </span></h2>
                <ul class="spost_nav">
                  
					<?php
					$id = '';
					$life_news_list = get_lifestyleidByNews($id);
					for($i = 0; $i < count($life_news_list);$i++)
					{
						
				  ?>
				  <li>
                    <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($life_news_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($life_news_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $life_news_list[$i]['news_pic1']; ?>" > </a>
                      <div class="media-body"> 
					<?php
						
					echo'<a style="font-weight:bold" href="news_detail.php?news='.base64_encode($life_news_list[$i]['news_pic1']).'& id='. base64_encode($life_news_list[$i]['id']).'" class="catg_title">'.$life_news_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.date("d-m-Y", strtotime($districtnews_list[$i]['insert_at'])).'</p>';
					
					?>
					</div>
                    </div>
					 </li>
					<?php
						}
					?>
                 
                  <li>
                  <div class="media wow fadeInDown" style="float: right; padding-bottom: 10px;" > <a href="news_detail.php?cat_id=<?php echo base64_encode('112'); ?>" class="media-left" style="color: #ff0003;" >आणखी वाचा ...</a>
				  </div>
				</li>
                </ul>
              </div>
            </div>
          </div>
		  <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span style="background:#ff0003;">स्थानिक स्वराज्य संस्था</span></h2>
                
                <ul class="spost_nav">
                  
				   <?php
					$id = '';
					$health_news_list = get_healthidByNews($id);
					for($i = 0; $i < count($health_news_list );$i++)
					{
						
				  ?>
				  <li>
                    <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($health_news_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($health_news_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $health_news_list[$i]['news_pic1']; ?>" > </a>
					
					<div class="media-body"> 
					<?php
						
					echo'<a style="font-weight:bold" href="news_detail.php?news='.base64_encode($health_news_list[$i]['news_pic1']).'& id='. base64_encode($health_news_list[$i]['id']).'" class="catg_title">'.$health_news_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.date("d-m-Y", strtotime($districtnews_list[$i]['insert_at'])).'</p>';
					
					?>
					</div>
					 </div>
					 </li>
					<?php
						
					}
					?>
                  
				  <li>
                  <div class="media wow fadeInDown" style="float: right; padding-bottom: 10px;" > <a href="news_detail.php?cat_id=<?php echo base64_encode('123'); ?>" class="media-left" style="color: #ff0003;" >आणखी वाचा ...</a>
				  </div>
				</li>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span style="background:#ff0003;">फॅशन</span></h2>
                <ul class="spost_nav">
                  
					<?php
					$id = '';
					$fashion_news_list = get_fashionidByNews($id);
					for($i = 0; $i < count($fashion_news_list);$i++)
					{
						
				  ?>
				  <li>
                    <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($fashion_news_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($fashion_news_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $fashion_news_list[$i]['news_pic1']; ?>" > </a>
                      <div class="media-body"> 
					<?php
						
					echo'<a style="font-weight:bold" href="news_detail.php?news='.base64_encode($fashion_news_list[$i]['news_pic1']).'& id='. base64_encode($fashion_news_list[$i]['id']).'" class="catg_title">'.$fashion_news_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.date("d-m-Y", strtotime($districtnews_list[$i]['insert_at'])).'</p>';
					
					?>
					</div>
                    </div>
					</li>
					<?php
						}
					?>
                  
                  <li>
                  <div class="media wow fadeInDown" style="float: right; padding-bottom: 10px;" > <a href="news_detail.php?cat_id=<?php echo base64_encode('110'); ?>" class="media-left" style="color: #ff0003;" >आणखी वाचा ...</a>
				  </div>
				</li>
                </ul>
              </div>
            </div>
          </div>
		   
		   <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span style="background:#ff0003;">तंत्रज्ञान</span></h2>
                
                <ul class="spost_nav">
                  
				   <?php
					$id = '';
					$tech_news_list = get_techNewsByid($id);
					for($i = 0; $i <count($tech_news_list);$i++)
					{
						
				  ?>
				  <li>
                    <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($tech_news_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($tech_news_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $tech_news_list[$i]['news_pic1']; ?>" > </a>
					
					<div class="media-body"> 
					<?php
						
					echo'<a style="font-weight:bold" href="news_detail.php?news='.base64_encode($tech_news_list[$i]['news_pic1']).'& id='. base64_encode($tech_news_list[$i]['id']).'" class="catg_title">'.$tech_news_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.date("d-m-Y", strtotime($districtnews_list[$i]['insert_at'])).'</p>';
					
					?>
					</div>
					 </div>
					  </li>
					<?php
						
					}
					?>
                 
				  <li>
                  <div class="media wow fadeInDown" style="float: right; padding-bottom: 10px;" > <a href="news_detail.php?cat_id=<?php echo base64_encode('101'); ?>" class="media-left" style="color: #ff0003;" >आणखी वाचा ...</a>
				  </div>
				</li>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span style="background:#ff0003;">आंतरराष्ट्रीय</span></h2>
                <ul class="spost_nav">
                 
					<?php
					$id = '';
					$world_news_list = get_worldNewsByid($id);
					for($i = 0; $i < count($world_news_list);$i++)
					{
						
				  ?>
				   <li>
                    <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($world_news_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($world_news_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $world_news_list[$i]['news_pic1']; ?>" > </a>
                      <div class="media-body"> 
					<?php
						
					echo'<a style="font-weight:bold" href="news_detail.php?news='.base64_encode($world_news_list[$i]['news_pic1']).'& id='. base64_encode($world_news_list[$i]['id']).'" class="catg_title">'.$world_news_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.date("d-m-Y", strtotime($districtnews_list[$i]['insert_at'])).'</p>';
					
					?>
					</div>
                    </div>
					</li>
					<?php
						}
					?>
                  
                  <li>
                  <div class="media wow fadeInDown" style="float: right; padding-bottom: 10px;" > <a href="news_detail.php?cat_id=<?php echo base64_encode('104'); ?>" class="media-left" style="color: #ff0003;" >आणखी वाचा ...</a>
				  </div>
				</li>
                </ul>
              </div>
            </div>
          </div>
		   <div class="single_post_content">
            <h2><span style="background:#ff0003;">आध्यात्मिक</span></h2>
            <div class="col-md-8">
             
                
				<?php
				/*	
					for($i = 0; $i < count($news_list);$i++)
					{
					if($news_list[$i]['cat_id']==104)
						{
				  ?>
                    
                  <figure class="photo grid"> <a href="news_detail.php?news='<?php echo base64_encode($news_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($news_list[$i]['id']); ?>" > <img src="http://waarta.in/News_data/<?php echo $news_list[$i]['news_pic1']; ?>" alt=""/></a> 
				 <figcaption class="col-md-4"><?php
						echo'<a  href="news_detail.php" style="font-size:16px; font-weight:bold;" class="catg_title">'.$news_list[$i]['newstitle'].'</a>';
					?>
				 </figcaption>
				 </figure>
				
               
					<?php
						}
					}*/
					?>
				  
                
              
            </div>
			
          </div>
          <div class="single_post_content">
            <h2><span style="background:#ff0003;">शिक्षण / नोकरी </span></h2>
            <div class="single_post_content col-md-12">
              <ul class="spost_nav">
                <li>
				<?php
					
					/*for($i = 0; $i < count($news_list);$i++)
					{
					if($news_list[$i]['cat_id']==104)
						{
				  ?>
                    <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($news_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($news_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $news_list[$i]['news_pic1']; ?>" > </a>
                      
					  <div class="media-body"> 
					<?php
						
					echo'<a href="news_detail.php?news='.base64_encode($news_list[$i]['news_pic1']).'& id='. base64_encode($news_list[$i]['id']).'" class="catg_title">'.$news_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.timeAgo($news_list[$i]['create_at']).'</p>';
					
					?>
					</div>
                    </div>
					<?php
						}
					}*/
					?>
				  <!--div class="media wow fadeInDown"> <a href="news_detail.php" class="media-left"> <img alt="" src="images/Narendra-Modi-Vladimir-Putin-India-Russia_PTI_380.jpg"> </a>
                    <div class="media-body"> <a href="news_detail.php" class="catg_title"> India-Russia ties should not become passive amid global changes, says MEA secretary Vijay Gokhale</a> </div>
                  </div-->
                </li>
              </ul>
            </div>
			
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="latest_post">
            <h2><span style="background:#ff0003;">लोकप्रिय बातमी</span></h2>
            <ul class="spost_nav">
              <li>
				   <?php
					
					for($i = 0; $i < count($news_list);$i++)
					{
					if($news_list[$i]['cat_id']==103)
					{
				  ?>
				  <div class="media wow fadeInDown"> <a href="news_detail.php?news='<?php echo base64_encode($news_list[$i]['news_pic1']); ?>'& id=<?php echo base64_encode($news_list[$i]['id']); ?>" class="media-left"> <img alt="" src="http://waarta.in/News_data/<?php echo $news_list[$i]['news_pic1']; ?>" > </a>
                     <div class="media-body"> 
					<?php
						
					echo'<a style="font-weight:bold" href="news_detail.php?news='.base64_encode($news_list[$i]['news_pic1']).'& id='. base64_encode($news_list[$i]['id']).'" class="catg_title">'.$news_list[$i]['newstitle'].'</a>';
					echo'<p class="posted-time" style="padding:5px;color:#3f3f3f; "><i class="fa fa-clock-o" aria-hidden="true" style="padding-right: 7px;"></i>'.date("d-m-Y", strtotime($districtnews_list[$i]['insert_at'])).'</p>';
					
					?>
					</div>
                    </div>
					<?php
					}
					}
					?>
              </li>
              
            </ul>
          </div>
		   <div class="single_sidebar wow fadeInDown">
            <h2><span style="background-color:#ff0003">व्हिडिओ</span></h2>
          <div class="single_sidebar">
            <div class="tab-content">
              <div id="video">
                <div class="vide_area"  >
                 <?php
				 $id = '17';
				 $video_list = get_videobyid($id);
				 ?>
				 
				<video  name="media" id="myVideo"  style="    width: 353px;" autoplay="false" controls="controls" preload="metadata" autostart="false" autoplay="0" autostart="0" >
					<source src="http://waarta.in/Video/<?php echo $video_list[0]['video'];?> " type="video/mp4">
				</video>
				<script>
    var vid = document.getElementById("myVideo");
    vid.autoplay = false;
    vid.load();
	</script>
				  <!--iframe width="100%" height="250" src="http://waarta.in/Video/<?php //echo $video_list[0]['video'];?> " frameborder="0" allowfullscreen></iframe-->
                </div>
              </div>
              </div>
          </div>
          
        </aside>
      </div>
    </div>
  </section>
  <?php
  include"footer.php";
  ?>
  <!--footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>झपाटयाची प्रतिमा </h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>टॅग</h2>
            <ul class="tag_nav">
              <li><a href="#">खेळ</a></li>
              <li><a href="#">क्रिडा</a></li>
              <li><a href="#">फॅशन</a></li>
              <li><a href="#">व्यवसाय</a></li>
              <li><a href="#">जीवन आणि शैली</a></li>
              <li><a href="#">तंत्रज्ञान</a></li>
              <li><a href="#">फोटो</a></li>
              <li><a href="#">स्लायडर</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>संपर्क साधा</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <address>
            Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
            </address>
          </div>
        </div>
      </div>
    </div>
    <!--div class="footer_bottom">
      <p class="copyright"> &copy; Publicity Mart 2017 <a href="index.php">NewsFeed</a></p>
      <p class="developer">Developed By Digisky</p>
    </div-->
  <!--/footer-->

  
</div>
</div>

<div class="col-md-1" style="padding:0 6px;"><img style="width: 7%;  margin-top:7px; position: fixed;" src="images/news.jpg"></div>

<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>



</body>
</html>