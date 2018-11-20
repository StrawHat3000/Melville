@extends('layouts.backend')

@section('content')

  <section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
      <div class="row bg-white has-shadow">
        <!-- Item -->
        <div class="col-xl-3 col-sm-6">
          <div class="item d-flex align-items-center">
            <div class="icon bg-violet"><i class="icon-user"></i></div>
            <div class="title"><span>New<br>Clients</span>
              <div class="progress">
                <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
              </div>
            </div>
            <div class="number"><strong>25</strong></div>
          </div>
        </div>
        <!-- Item -->
        <div class="col-xl-3 col-sm-6">
          <div class="item d-flex align-items-center">
            <div class="icon bg-red"><i class="icon-padnote"></i></div>
            <div class="title"><span>Work<br>Orders</span>
              <div class="progress">
                <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
              </div>
            </div>
            <div class="number"><strong>70</strong></div>
          </div>
        </div>
        <!-- Item -->
        <div class="col-xl-3 col-sm-6">
          <div class="item d-flex align-items-center">
            <div class="icon bg-green"><i class="icon-bill"></i></div>
            <div class="title"><span>New<br>Invoices</span>
              <div class="progress">
                <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
              </div>
            </div>
            <div class="number"><strong>40</strong></div>
          </div>
        </div>
        <!-- Item -->
        <div class="col-xl-3 col-sm-6">
          <div class="item d-flex align-items-center">
            <div class="icon bg-orange"><i class="icon-check"></i></div>
            <div class="title"><span>Open<br>Cases</span>
              <div class="progress">
                <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
              </div>
            </div>
            <div class="number"><strong>50</strong></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Dashboard Header Section    -->
  <section class="dashboard-header">
    <div class="container-fluid">
      <div class="row">
        <!-- Statistics -->
        <div class="statistics col-lg-3 col-12">
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
            <div class="text"><strong>234</strong><br><small>Applications</small></div>
          </div>
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
            <div class="text"><strong>152</strong><br><small>Interviews</small></div>
          </div>
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
            <div class="text"><strong>147</strong><br><small>Forwards</small></div>
          </div>
        </div>
        <!-- Line Chart            -->
        <div class="chart col-lg-6 col-12">
          <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
            <canvas id="lineCahrt"></canvas>
          </div>
        </div>
        <div class="chart col-lg-3 col-12">
          <!-- Bar Chart   -->
          <div class="bar-chart has-shadow bg-white">
            <div class="title"><strong class="text-violet">95%</strong><br><small>Current Server Uptime</small></div>
            <canvas id="barChartHome"></canvas>
          </div>
          <!-- Numbers-->
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-green"><i class="fa fa-line-chart"></i></div>
            <div class="text"><strong>99.9%</strong><br><small>Success Rate</small></div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Feeds Section-->
  <section class="feeds no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <!-- Trending Articles-->
        <div class="col-lg-6">
          <div class="daily-feeds card">
            <div class="card-close">
              <div class="dropdown">
                <button type="button" id="closeCard7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                <div aria-labelledby="closeCard7" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
              </div>
            </div>
            <div class="card-header">
              <h3 class="h4">Daily Feeds</h3>
            </div>
            <div class="card-body no-padding">
              <!-- Item-->
              <div class="item">
                <div class="feed d-flex justify-content-between">
                  <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="img/avatar-5.jpg" alt="person" class="img-fluid rounded-circle"></a>
                    <div class="content">
                      <h5>Aria Smith</h5><span>Posted a new blog </span>
                      <div class="full-date"><small>Today 5:60 pm - 12.06.2014</small></div>
                    </div>
                  </div>
                  <div class="date text-right"><small>5min ago</small></div>
                </div>
              </div>
              <!-- Item-->
              <div class="item">
                <div class="feed d-flex justify-content-between">
                  <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="img/avatar-2.jpg" alt="person" class="img-fluid rounded-circle"></a>
                    <div class="content">
                      <h5>Frank Williams</h5><span>Posted a new blog </span>
                      <div class="full-date"><small>Today 5:60 pm - 12.06.2014</small></div>
                      <div class="CTAs"><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-thumbs-up"> </i>Like</a><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-heart"> </i>Love    </a></div>
                    </div>
                  </div>
                  <div class="date text-right"><small>5min ago</small></div>
                </div>
              </div>
              <!-- Item-->
              <div class="item clearfix">
                <div class="feed d-flex justify-content-between">
                  <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="img/avatar-3.jpg" alt="person" class="img-fluid rounded-circle"></a>
                    <div class="content">
                      <h5>Ashley Wood</h5><span>Posted a new blog </span>
                      <div class="full-date"><small>Today 5:60 pm - 12.06.2014</small></div>
                    </div>
                  </div>
                  <div class="date text-right"><small>5min ago</small></div>
                </div>
                <div class="quote has-shadow"> <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Over the years.</small></div>
                <div class="CTAs pull-right"><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-thumbs-up"> </i>Like</a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Check List -->
        <div class="col-lg-6">
          <div class="checklist card">
            <div class="card-close">
              <div class="dropdown">
                <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
              </div>
            </div>
            <div class="card-header d-flex align-items-center">
              <h2 class="h3">To Do List </h2>
            </div>
            <div class="card-body no-padding">
              <div class="item d-flex">
                <input type="checkbox" id="input-1" name="input-1" class="checkbox-template">
                <label for="input-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
              </div>
              <div class="item d-flex">
                <input type="checkbox" id="input-2" name="input-2" class="checkbox-template">
                <label for="input-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
              </div>
              <div class="item d-flex">
                <input type="checkbox" id="input-3" name="input-3" class="checkbox-template">
                <label for="input-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
              </div>
              <div class="item d-flex">
                <input type="checkbox" id="input-4" name="input-4" class="checkbox-template">
                <label for="input-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
              </div>
              <div class="item d-flex">
                <input type="checkbox" id="input-5" name="input-5" class="checkbox-template">
                <label for="input-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
              </div>
              <div class="item d-flex">
                <input type="checkbox" id="input-6" name="input-6" class="checkbox-template">
                <label for="input-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
