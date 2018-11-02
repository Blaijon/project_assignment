<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Companies</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ url('css/base.css') }}" rel="stylesheet">

  </head>
  <body>
    <!-- Pulse Begin Preloader -->
    <div id="preloader">
        <div class="pulse"></div>
    </div>
    <!-- Pulse End Preloader -->
    <!--Begin sub_header -->
    <div class="sub_header bg_1">
      <div id="intro_txt">
        <h1>Company <strong>Properties</strong> Lists</h1>
        <p>
            Pick Your favorite company
        </p>
      </div>
    </div>
    <!--End sub_header -->
    <!-- Begin Position -->
    <div id="position">
      <div class="container">
        <ul>
          <li><a>Category</a></li>
        </ul>
      </div>
    </div><!-- End Position -->
    <!-- Begin container_gray_bg -->
    <div class="container_gray_bg">
      <!--Begin container -->
      <div class="container margin_60">
        <div class="row">
          <div class="col-md-12">
            <!--Begin Loop over companies -->
              @foreach($companies as $company)
                <!--Begin companies -->
                <div class="strip_all_courses_list wow fadeIn" data-wow-delay="0.1s">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <div class="img_list">
                        <a href="/company/{{$company->id}}"><img src="" alt="">
                          <div class="short_info">
                            <h3>{{$company->company_name}}</h3>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="course_list_desc">
                        <h3><strong>{{$company->company_name}}</strong></h3>
                        <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius.
                          e pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate
                          e pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate
                          e pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate....
                        </p>
                        <ul class="add_info">
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><i class="pe-7s-map-marker"></i></span>
                              <div class="tooltip-content">
                                  {{$company->street_address}},
                                  {{$company->city}},
                                  {{$company->state}}
                                  {{$company->zip}}
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><i class="pe-7s-phone"></i></span>
                              <div class="tooltip-content">
                                  {{$company->phone}}
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><i class="pe-7s-clock"></i></span>
                              <div class="tooltip-content">
                                  {{date('M j, Y h:ia',strtotime($company->created_date))}}
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                      <div class="details_list_col">
                        <div>
                          <a href="{{route('company.show', $company->id)}}" class="button_outline">Properties</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <!--End companies -->
              @endforeach
              </div>
              <!--End col-md-9 -->
              <div class="text-center">
                  {!! $companies->links() !!}
              </div>
          </div>
          <!--End row -->
      </div>
      <!--End container -->
    </div>
    <!--End container_gray_bg -->
  <script src="{{ URL::asset('js/jquery-1.11.2.min.js') }}"></script>
  <script src="{{ URL::asset('js/common_scripts_min.js') }}"></script>
  <script src="{{ URL::asset('js/functions.js') }}"></script>
  </body>

</html>
