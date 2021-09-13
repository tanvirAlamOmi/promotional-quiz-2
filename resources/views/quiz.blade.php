<!DOCTYPE html>
<html lang="en">
  <!DOCTYPE html>
  <html>

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link href="{{asset('img/main-logo.png')}}" rel="icon">
      <title>Delicious Quiz</title>
      <!-- google font-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Pattaya&family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
      
      <!-- Font awesome css file -->
      <link rel="stylesheet" href="{{asset('/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('/css/fontawesome.min.css')}}">
      
      <!-- Boostrap css-->      
      <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
     
      <!-- Main css -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">

      <style>

       </style>
  </head>
  
  <body onload="myFunction()">
    <!--pre loader start-->
    <div id="loader" class="pre-loader">
        <img src="{{asset('img/preloader.gif')}}">
      </div>
    <!-- pre loader end-->
    <!-- change Quiz section start -->
    <section class="quiz-headline" id="myDiv">
       <div class="container">
           <div class="row">
               <div class="col-12">
                 <img src="{{asset('img/main-logo.png')}}" class="img-fluid" alt="main-logo">
                   <h1>Delicious Ultimate Quiz </h1>
               </div>
           </div>
       </div>
    </section>
    <!-- Quiz section end -->
    <!-- quiz body start -->
    <section class="quiz-body">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <!-- 1st checkbox section start-->
                <div id="firstBox" class="row box">
                  <div class="col-12">
                      <div class="qus-headline">
                          <h1>Where would you go for vacation?</h1>
                      </div>
                  </div>
                  
                  <div class="col-6">
                    <div class="card right" style="width: 18rem;">
                        <img src="{{asset('img/Rachel.jpeg')}}" class="img-thumbnail" alt="quiz-banner-img">
                        <div class="card-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1a" id="qus_1_opt_1" name="friends">
                            <label class="form-check-label" for="qus_1_opt_1">
                              RACHEL
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-6">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/joey.png')}}" class="img-thumbnail" alt="quiz-banner-img">
                        <div class="card-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1b" id="qus_1_opt_2" name="friends">
                            <label class="form-check-label" for="qus_1_opt_2">
                              JOEY 
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-6">
                    <div class="card right" style="width: 18rem;">
                        <img src="{{asset('img/Ross.png')}}" class="img-thumbnail" alt="quiz-banner-img">
                        <div class="card-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1c" id="qus_1_opt_3" name="friends">
                            <label class="form-check-label" for="qus_1_opt_3">
                              ROSS 
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-6">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/Phoebe.jpeg')}}" class="img-thumbnail" alt="quiz-banner-img">
                        <div class="card-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1d" id="qus_1_opt_4" name="friends">
                            <label class="form-check-label" for="qus_1_opt_4">
                              PHOEBE
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <!--1st check box section end-->
                <!-- 2nd checkbox section start-->
                
                <div id="secondBox" class="row box">
                  <div class="col-12">
                      <div class="qus-headline">
                          <h1>Where would you go for vacation?</h1>
                      </div>
                  </div>
                  
                  <div class="col-6">
                    <div class="card right" style="width: 18rem;">
                        <img src="{{asset('img/Italy.jpeg')}}" class="img-thumbnail" alt="quiz-banner-img">
                        <div class="card-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2a" id="qus_2_opt_1" name="vacation">
                            <label class="form-check-label" for="qus_2_opt_1">
                            Italy
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-6">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/Turkey.jpeg')}}" class="img-thumbnail" alt="quiz-banner-img">
                        <div class="card-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2b" id="qus_2_opt_2" name="vacation">
                            <label class="form-check-label" for="qus_2_opt_2">
                              Turkey
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-6">
                    <div class="card right" style="width: 18rem;">
                        <img src="{{asset('img/Georgia.jpeg')}}" class="img-thumbnail" alt="quiz-banner-img">
                        <div class="card-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2c" id="qus_2_opt_3" name="vacation">
                            <label class="form-check-label" for="qus_2_opt_3">
                              Georgia
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-6">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/Maldives.jpeg')}}" class="img-thumbnail" alt="quiz-banner-img">
                        <div class="card-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2d" id="qus_2_opt_4" name="vacation">
                            <label class="form-check-label" for="qus_2_opt_4">
                              Maldives
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                    <!--2nd check box section end-->
                    <!-- 3rd checkbox section start-->
                    
                <div id="thirdBox" class="row box">
                    <div class="col-12">
                        <div class="qus-headline">
                            <h1>Where would you spend your perfect Thursday night?</h1>
                        </div>
                    </div>
                    
                    <div class="col-6">
                       <div class="card right" style="width: 18rem;">
                          <img src="{{asset('img/louvre-abu_dhabi.jpeg')}}" class="img-thumbnail" alt="quiz-banner-img">
                          <div class="card-body">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="3a" id="qus_3_opt_1" name="night">
                              <label class="form-check-label" for="qus_3_opt_1">
                               Louvre Abu Dhabi
                              </label>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-6">
                       <div class="card" style="width: 18rem;">
                          <img src="{{asset('img/Mangroves.jpeg')}}" class="img-thumbnail" alt="quiz-banner-img">
                          <div class="card-body">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="3b" id="qus_3_opt_2" name="night">
                              <label class="form-check-label" for="qus_3_opt_2">
                                Mangroves
                              </label>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-6">
                       <div class="card right" style="width: 18rem;">
                          <img src="{{asset('img/corniche.jpeg')}}" class="img-thumbnail" alt="quiz-banner-img">
                          <div class="card-body">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="3c" id="qus_3_opt_3" name="night">
                              <label class="form-check-label" for="qus_3_opt_3">
                                Corniche 
                              </label>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-6">
                       <div class="card" style="width: 18rem;">
                          <img src="{{asset('img/Ferrari World.jpeg')}}" class="img-thumbnail" alt="quiz-banner-img">
                          <div class="card-body">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="3d" id="qus_3_opt_4" name="night">
                              <label class="form-check-label" for="qus_3_opt_4">
                                Ferrari World
                              </label>
                            </div>
                          </div>
                        </div>
                     </div>
                </div>
                     <!--3rd checkbox section end-->
                    <!-- 4th checkbox section start-->
                    
                <div id="fourthBox" class="row box">
                    <div class="col-12">
                        <div class="qus-headline">
                            <h1>How do you cut your Sandwich?</h1>
                        </div>
                    </div>
                    
                    <div class="col-6">
                       <div class="card right" style="width: 18rem;">
                       <!-- change-->
                          <img src="{{asset("img/Don_tcut.jpeg")}}" class="img-thumbnail" alt="quiz-banner-img">
                          <div class="card-body">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="4a" id="qus_4_opt_1" name="Sandwich">
                              <label class="form-check-label" for="qus_4_opt_1">
                                I don’t cut my sandwich
                              </label>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-6">
                       <div class="card" style="width: 18rem;">
                          <img src="{{asset('img/Rectangle.jpeg')}}" class="img-thumbnail" alt="quiz-banner-img">
                          <div class="card-body">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="4b" id="qus_4_opt_2" name="Sandwich">
                              <label class="form-check-label" for="qus_4_opt_2">
                                Rectangles
                              </label>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-6">
                       <div class="card right" style="width: 18rem;">
                          <img src="{{asset('img/Crustless.jpeg')}}" class="img-thumbnail" alt="quiz-banner-img">
                          <div class="card-body">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="4c" id="qus_4_opt_3" name="Sandwich">
                              <label class="form-check-label" for="qus_4_opt_3">
                                Crustless
                              </label>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-6">
                       <div class="card" style="width: 18rem;">
                          <img src="{{asset('img/Triangle.jpeg')}}" class="img-thumbnail" alt="quiz-banner-img">
                          <div class="card-body">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="4d" id="qus_4_opt_4" name="Sandwich">
                              <label class="form-check-label" for="qus_4_opt_4">
                                Triangles
                              </label>
                            </div>
                          </div>
                        </div>
                     </div>
                </div>
            <!--4th checkbox section end-->
            <!-- 5th checkbox section start-->
            
                <div id="fifthBox" class="row box">
                    <div class="col-12">
                        <div class="qus-headline">
                            <h1>Pick your favourite juice at Delicious</h1>
                        </div>
                    </div>
                    
                    <div class="col-6">
                       <div class="card right" style="width: 18rem;">
                          <img src="{{asset('img/Cool Cucumber Juice-7.jpg')}}" class="img-thumbnail" alt="quiz-banner-img">
                          <div class="card-body">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="5a" id="qus_5_opt_1" name="juice">
                              <label class="form-check-label" for="qus_5_opt_1">
                                Cool Cucumber
                              </label>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-6">
                       <div class="card" style="width: 18rem;">
                          <img src="{{asset('img/Super Greenies Juice-4.jpg')}}" class="img-thumbnail" alt="quiz-banner-img">
                          <div class="card-body">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="5b" id="qus_5_opt_2" name="juice">
                              <label class="form-check-label" for="qus_5_opt_2">
                                Super Greenies
                              </label>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-6">
                       <div class="card right" style="width: 18rem;">
                          <img src="{{asset('img/Beats by Beets 6.jpg')}}" class="img-thumbnail" alt="quiz-banner-img">
                          <div class="card-body">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="5c" id="qus_5_opt_3" name="juice">
                              <label class="form-check-label" for="qus_5_opt_3">
                                Beats by beets     
                              </label>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-6">
                       <div class="card" style="width: 18rem;">
                          <img src="{{asset('img/Spicy Red-8.JPG')}}" class="img-thumbnail" alt="quiz-banner-img">
                          <div class="card-body">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="5d" id="qus_5_opt_4" name="juice">
                              <label class="form-check-label" for="qus_5_opt_4">
                                Spicy Red
                              </label>
                            </div>
                          </div>
                        </div>
                     </div>
                </div>
            <!--5th checkbox section end-->
            <!-- 6th checkbox section start-->
            
            <div id="sixthBox" class="row box">
              <div class="col-12">
                  <div class="qus-headline">
                      <h1>Lastly tell us, what are you craving today</h1>
                  </div>
              </div>
              
              <div class="col-6">
                  <div class="card right" style="width: 18rem;">
                    <img src="{{asset('img\veg-sand.jpg')}}" class="img-thumbnail" alt="quiz-banner-img">
                    <div class="card-body">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="-v" id="qus_6_opt_1" name="craving">
                        <label class="form-check-label" for="qus_6_opt_1">
                          Veg
                        </label>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-6">
                  <div class="card" style="width: 18rem;">
                  <img src="{{asset('img\non-veg.jpg')}}" class="img-thumbnail" alt="quiz-banner-img">
                    <div class="card-body">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="-n" id="qus_6_opt_2" name="craving">
                        <label class="form-check-label" for="qus_6_opt_2">
                          non-Veg
                        </label>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <!--6th checkbox section end-->

            <div class="col-12 text-center">
                <button type="button" class="btn btn-primary hide" id="result_button">Show Result</button>
            </div>

          </div>
        </div>
    </section>
    <!-- quiz body end -->
    <!-- change quiz gift update page start-->
    <!-- {{-- <section class="quiz-gift">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 text-center">
            <img src="{{asset('img/gift-img.JPG')}}" id="gift_img" class="img-thumbnail" alt="gift-img">
          </div>
          <div class="col-6">
            <h1 id="gift_name"></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam deleniti beatae expedita dolorem ut fugiat suscipit saepe inventore deserunt modi, iste ullam porro sed natus eligendi recusandae voluptate temporibus ipsa.</p>
            <button type="button" class="btn btn-primary hide" id="coupon_button">Get your coupon now</button>
          </div>
        </div>
      </div>
    </section> --}}
 -->

    <section class="quiz-gift">
      <div class="container">
        <div class="card container-fluid" style="background: beige;">
          <div class="col-12">
            <div class="header row">
              <div class="text-left col-6">
                <h1>Congratulations</h1>
              </div>
              <div class="text-right col-6" style="text-align: right;">
                <img src="https://cdn.iconscout.com/icon/free/png-256/celebration-party-popper-tada-decoration-christmas-38099.png" alt="" 
                style="margin-top: -137px;">
              </div>
            </div>
            <div class="body-part">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <img src="" id="gift_img" class="img-thumbnail" alt="gift-img">
                  </div>
                  <div class="col-6">
                    <h1 id="gift_name"></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam deleniti beatae expedita dolorem ut fugiat suscipit saepe inventore deserunt modi, iste ullam porro sed natus eligendi recusandae voluptate temporibus ipsa.</p>
                    <button type="button" class="btn btn-primary hide" id="coupon_button">Get your coupon now</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- quiz gift update page end-->
    <!--quiz result page start-->
    <section class="quiz-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                 
                    <form id="submitForm">
                      <div class="alert">
                          <ul id="message">
                          </ul>
                      </div>
                      @csrf
                        <div class="mb-3">
                          <label for="customerName" class="form-label">Name</label>
                          <input type="text" class="form-control" id="customerName" name="customerName" aria-describedby="emailHelp">
                        </div>
                      <div class="mb-3">
                        <label for="customerEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="customerEmail" name="customerEmail" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="customerPhone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="customerPhone" name="customerPhone" aria-describedby="emailHelp">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--quiz result page end-->
    <!-- Thank you page start -->
    <section class="thank-you text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <img src="{{asset('img/message.png')}}" alt="">
            <h1>Thank You, Enjoy!</h1>
            <h2>We've sent the coupon to your Email.</h2>
            <a href="#">Back Home</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Thank you page end -->
    <!--change footer start-->
    <section class="quiz-footer">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1>Copyright <script>document.write(new Date().getFullYear())</script> © Delicious</h1>
            <H2>Developed by <a href="https://arbreesolutions.com/" target="_blank">Arbree Solutions</a> </H2>
          </div>
        </div>
      </div>
    </section>
    <!-- footer end-->
    <!-- preloader js start-->
    <script>
    var myVar;

    function myFunction() {
      myVar = setTimeout(showPage, 2000);
    }

    function showPage() {
      document.getElementById("loader").style.display = "none";

    }
    </script>
    <!-- preloader js end-->
    <!-- Boostrap cdn -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    
    <!-- fontawesome js start-->
    <script src="{{asset('js/fontawesome.min.js')}}"></script>
    
    <!-- fontawesome js end-->
    <script src="{{asset('js\jquery-3.6.0.min.js')}}"></script>
    
    <script>
      let boxNum = 0;
      let progressWidth = 0;
      let checkboxNames = ['friends', 'vacation', 'night', 'Sandwich', 'juice', 'craving'];
      let totalPoint = '';
      let prize;
      let progressBarPortion = 16.66; //6 question so (100/6) = 16.66

      (function () {
        $(".box").hide();
        $("#result_button").hide();
        $('.quiz-form').hide();
        $('.quiz-gift').hide();
        $('.thank-you').hide();
        // $('.thank-you').hide();
        contentBoxShow(boxNum);
        progressBarProgress(progressWidth);
      }());

      function contentBoxShow(boxNum){
        $(`.box:eq(${boxNum})`).show();
      }

      function progressBarProgress(progressWidth){
        $('.progress-bar').css('width', `${progressWidth}%`)
      }

      function logic(result){
        switch(result) {
          case '1a2a3a4c5a-n':
            return {
              "name" : "Pesto Chicken",
              "coupon_code" : "Pesto Chicken",
              "img_source" : "pesto_chicken_sandwich.png"
            };

          case '1c2c3d4b5c-n':
            return {
              "name" : "Tikka",
              "coupon_code" : "Pesto Chicken",
              "img_source" : "Tikka_flavoured_sandwich.png"
            };
            
          case '1b2b3c4a5d-n':
            return {
              "name" : "Spicy Meatball",
              "coupon_code" : "Pesto Chicken",
              "img_source" : "Spicy_Meatball_sandwich.png"
            };
            
          case '1d2d3b4d5b-v':
            return {
              "name" : "Veggie Melt",
              "coupon_code" : "Pesto Chicken",
              "img_source" : "Veggie_Melt_sandwich.png"
            };
            
          default:
            switch(vegOrNonveg(result)) {
              case 'n':
                return {
              "name" : "Tikka flavoured sandwich",
              "coupon_code" : "Pesto Chicken",
              "img_source" : "Tikka_sandwich.png"
            };
                
              case 'v':
                return  {
              "name" : "Southern Roasted Veggie",
              "coupon_code" : "Pesto Chicken",
              "img_source" : "Southern_Roasted_Veggie_sandwich.png"
            };
            }
        }
      }

      function vegOrNonveg(result){
        let k = result.split('-');
        return k[1];
      }

      $("input[type='checkbox']").click( () => {
        totalPoint += $(`input:checkbox[name=${checkboxNames[boxNum]}]:checked`).val();
        boxNum++;
        progressWidth = progressWidth + progressBarPortion;
        progressBarProgress(progressWidth)

        if(boxNum < 6){
          $(".box").hide();
        }
        else{
          $("#result_button").show();
          $('.form-check-input').attr("disabled", true);
          return;
        }

        contentBoxShow(boxNum)
      })

      $('#result_button').click( () => {
        $(".box").hide();
        $("#result_button").hide();
        // $("#result_button").hide();
        $('.progress').hide();
        $('.quiz-gift').show();
        
        prize = logic(totalPoint);
        $('#gift_name').html(prize.name);
        $('#gift_img').attr("src", `{{asset('img/prize/${prize.img_source}')}}`);
      })

      $('#coupon_button').click( () => {
        
        $('.quiz-gift').hide();
        $('.quiz-form').show();
        
      })

      $('#submitForm').submit( (event) => {
        event.preventDefault();
        $.ajax({
          type: "POST",
          url: '/submit_form',
          data:{
          "_token": "{{ csrf_token() }}",
          "customerName": $('#customerName').val(),
          "customerEmail": $('#customerEmail').val(),
          "customerPhone": $('#customerPhone').val(),
          "prizeWon": prize.name,
          "coupon_code": prize.coupon_code
          }, 
          success: function(output) {
            if (output.result == "success") {
              $('.thank-you').show();
              $('.quiz-form').hide();

            }
            else if(output.result == "failed"){
              $('#message').html(`<li> ${output.message} </li>`).removeClass('alert-success').removeClass('alert-danger').addClass('alert-danger')
            }
          },
          error:function (response){
            let list = '';
              $.each(response.responseJSON.errors,function(field_name,error){
                list +=`<li> ${error} </li>`;
              })
              $('#message').html(list).removeClass('alert-success').removeClass('alert-danger').addClass('alert-danger')
          }
        });
      })
      
    </script>
  </body>
</html>