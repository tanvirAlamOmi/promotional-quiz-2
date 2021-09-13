<!DOCTYPE html>
<html lang="en">
  <!DOCTYPE html>
  <html>

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Quiz</title>
      <!-- Font awesome css file -->
      <link rel="stylesheet" href="css/all.min.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <!-- Boostrap css -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <!-- Main css -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">

      <style>

       </style>
  </head>
  <body>
    <!-- Quiz section start -->
   <section class="quiz-headline">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <h1>This is your heading</h1>
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
                          <img src="{{asset("img/Don't cut.jpeg")}}" class="img-thumbnail" alt="quiz-banner-img">
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
                    <!-- <img src="img/Cool Cucumber Juice-7.jpg" class="img-thumbnail" alt="quiz-banner-img"> -->
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
                    <!-- <img src="img/Super Greenies Juice-4.jpg" class="img-thumbnail" alt="quiz-banner-img"> -->
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
    <!--quiz result page start-->
    <section class="quiz-result">
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


    <!-- Boostrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="./js/all.min.js"></script>
    <script src="./js/fontawesome.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

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
        $('.quiz-result').hide();
        
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
            return "Pesto Chicken";

          case '1c2c3d4b5c-n':
            return "Tikka";
            
          case '1b2b3c4a5d-n':
            return "Spicy Meatball";
            
          case '1d2d3b4d5b-v':
            return "Veggie Melt";
            
          default:
            switch(vegOrNonveg(result)) {
              case 'n':
                return "Tikka flavoured sandwich";
                
              case 'v':
                return "Southern Roasted Veggie";
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

        if(boxNum < 6){
          $(".box").hide();
        }
        else{
          $("#result_button").show();
          $('.form-check-input').attr("disabled", true);
          return;
        }

        progressBarProgress(progressWidth)
        contentBoxShow(boxNum)
      })

      $('#result_button').click( () => {
        $(".box").hide();
        $("#result_button").hide();
        $('.progress').hide();
        $('.quiz-result').show();

        prize = logic(totalPoint);
        console.log(prize);
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
          "prizeWon": prize
          }, 
          success: function(output) {
            if (output.result == "success") {
              $('#message').html(`<li> ${output.message} </li>`).removeClass('alert-success').removeClass('alert-danger').addClass('alert-success')
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