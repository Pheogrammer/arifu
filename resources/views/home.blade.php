@extends('layouts.app')

@section('content')
<div class="az-content-body">
    <div class="az-content-body-left">
      <h2 class="az-content-title tx-24 mg-b-5">Hi, welcome back!</h2>
      <p class="mg-b-20">Your product performance and management dashboard template.</p>

      <div class="row row-sm mg-b-20">
        <div class="col-sm-6 col-lg-4">
          <div class="card card-dashboard-twentysix">
            <div class="card-header">
              <h6 class="card-title">Customers</h6>
              <div class="chart-legend">
                <div><span class="bg-primary"></span> New</div>
                <div><span class="bg-teal"></span> Returning</div>
              </div><!-- chart-legend -->
            </div><!-- card-header -->
            <div class="card-body">
              <div class="pd-x-15">
                <h6>156 <span class="tx-success"><i class="icon ion-md-arrow-up"></i> 3.7%</span></h6>
                <label>Avg. Customers/Day</label>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart7" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-6 col-lg-4 mg-t-20 mg-sm-t-0">
          <div class="card card-dashboard-twentysix card-dark-one">
            <div class="card-header">
              <h6 class="card-title">Conversions</h6>
            </div><!-- card-header -->
            <div class="card-body">
              <div class="pd-x-15">
                <h6>0.23% <span><i class="icon ion-md-arrow-up"></i> 0.20%</span></h6>
                <label>Purchased</label>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart8" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
          <div class="card card-dashboard-twentysix card-dark-two">
            <div class="card-header">
              <h6 class="card-title">Revenue</h6>
            </div><!-- card-header -->
            <div class="card-body">
              <div class="pd-x-15">
                <h6>$7,299 <span><i class="icon ion-md-arrow-up"></i> 1.18%</span></h6>
                <label>Total Sales</label>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart9" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
      </div><!-- row -->

      <div class="card card-body card-dashboard-twentyfive mg-b-20">
        <h6 class="card-title">Conversions</h6>
        <div class="row row-sm">
          <div class="col-6 col-sm-4 col-lg">
            <label class="card-label">Conversion Rate</label>
            <h6 class="card-value">0.81<small>%</small></h6>
            <div class="chart-wrapper">
              <div id="flotChart1" class="flot-chart"></div>
            </div><!-- chart-wrapper -->
          </div><!-- col -->
          <div class="col-6 col-sm-4 col-lg">
            <label class="card-label">Revenue</label>
            <h6 class="card-value"><span>$</span>1,095,190</h6>
            <div class="chart-wrapper">
              <div id="flotChart2" class="flot-chart"></div>
            </div><!-- chart-wrapper -->
          </div><!-- col -->
          <div class="col-6 col-sm-4 col-lg mg-t-20 mg-sm-t-0">
            <label class="card-label">Unique Purchases</label>
            <h6 class="card-value">53</h6>
            <div class="chart-wrapper">
              <div id="flotChart3" class="flot-chart"></div>
            </div><!-- chart-wrapper -->
          </div><!-- col -->
          <div class="col-6 col-sm-4 col-lg mg-t-20 mg-lg-t-0">
            <label class="card-label">Transactions</label>
            <h6 class="card-value">31</h6>
            <div class="chart-wrapper">
              <div id="flotChart4" class="flot-chart"></div>
            </div><!-- chart-wrapper -->
          </div><!-- col -->
          <div class="col-6 col-sm-4 col-lg mg-t-20 mg-lg-t-0">
            <label class="card-label">Avg. Order Value</label>
            <h6 class="card-value"><span>$</span>306.20</h6>
            <div class="chart-wrapper">
              <div id="flotChart5" class="flot-chart"></div>
            </div><!-- chart-wrapper -->
          </div><!-- col -->
          <div class="col-6 col-sm-4 col-lg mg-t-20 mg-lg-t-0">
            <label class="card-label">Quantity</label>
            <h6 class="card-value">52</h6>
            <div class="chart-wrapper">
              <div id="flotChart6" class="flot-chart"></div>
            </div><!-- chart-wrapper -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- card -->

      <div class="row row-sm">
        <div class="col-lg-6">
          <div class="card card-dashboard-twentyfour">
            <div class="card-header">
              <h6 class="card-title">Real Time Sales</h6>
              <span>This Week</span>
            </div><!-- card-header -->
            <div class="card-body">
              <div class="card-body-top">
                <div>
                  <h6><span>$</span>150,200<small>.00</small></h6>
                  <label>Total Sales</label>
                </div>
                <div>
                  <h6><span>$</span>21,830<small>.25</small></h6>
                  <label>Avg. Sales per Day</label>
                </div>
              </div><!-- card-body-top -->

              <div class="d-flex justify-content-between mg-b-15">
                <label class="az-content-label">Sales Per Hour</label>
                <div class="chart-legend">
                  <div><span class="bg-primary"></span> Today</div>
                  <div><span class="bg-gray-400"></span> Yesterday</div>
                </div><!-- chart-legend -->
              </div>
              <div class="chart-wrapper">
                <div id="flotBar1" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
          <div class="card card-dashboard-twentyfour">
            <div class="card-header">
              <h6 class="card-title">Store Visitors</h6>
              <span>This Week</span>
            </div><!-- card-header -->
            <div class="card-body">
              <div class="card-body-top">
                <div>
                  <h6>297,506</h6>
                  <label>Total Visitors</label>
                </div>
                <div>
                  <h6>38,130</h6>
                  <label>Visits per Day</label>
                </div>
                <div>
                  <h6>35.07%</h6>
                  <label>Bounce Rate</label>
                </div>
              </div><!-- card-body-top -->

              <div class="d-flex justify-content-between mg-b-15">
                <label class="az-content-label">Visitors Per Hour</label>
                <div class="chart-legend">
                  <div><span class="bg-pink"></span> Today</div>
                  <div><span class="bg-gray-400"></span> Yesterday</div>
                </div><!-- chart-legend -->
              </div>
              <div class="chart-wrapper">
                <div id="flotLine1" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-lg-8 mg-t-20">
          <div class="card card-table-two">
            <h6 class="card-title">Most Recent Earnings</h6>
            <span class="d-block mg-b-20">This is the most recent earnings for today's date.</span>
            <div class="table-responsive">
              <table class="table table-striped table-dashboard-two mg-b-0">
                <thead>
                  <tr>
                    <th class="wd-lg-25p">Date</th>
                    <th class="wd-lg-25p tx-right">Sales Count</th>
                    <th class="wd-lg-25p tx-right">Earnings</th>
                    <th class="wd-lg-25p tx-right">Tax Witheld</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>05 Oct 2018</td>
                    <td class="tx-right tx-medium tx-inverse">25</td>
                    <td class="tx-right tx-medium tx-inverse">$380.50</td>
                    <td class="tx-right tx-medium tx-danger">-$23.50</td>
                  </tr>
                  <tr>
                    <td>04 Oct 2018</td>
                    <td class="tx-right tx-medium tx-inverse">34</td>
                    <td class="tx-right tx-medium tx-inverse">$503.20</td>
                    <td class="tx-right tx-medium tx-danger">-$13.45</td>
                  </tr>
                  <tr>
                    <td>03 Oct 2018</td>
                    <td class="tx-right tx-medium tx-inverse">30</td>
                    <td class="tx-right tx-medium tx-inverse">$489.65</td>
                    <td class="tx-right tx-medium tx-danger">-$20.98</td>
                  </tr>
                  <tr>
                    <td>02 Oct 2018</td>
                    <td class="tx-right tx-medium tx-inverse">27</td>
                    <td class="tx-right tx-medium tx-inverse">$421.80</td>
                    <td class="tx-right tx-medium tx-danger">-$22.22</td>
                  </tr>
                  <tr>
                    <td>01 Oct 2018</td>
                    <td class="tx-right tx-medium tx-inverse">31</td>
                    <td class="tx-right tx-medium tx-inverse">$518.60</td>
                    <td class="tx-right tx-medium tx-danger">-$23.01</td>
                  </tr>
                  <tr>
                    <td>01 Oct 2018</td>
                    <td class="tx-right tx-medium tx-inverse">31</td>
                    <td class="tx-right tx-medium tx-inverse">$518.60</td>
                    <td class="tx-right tx-medium tx-danger">-$23.01</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- card-dashboard-five -->
        </div><!-- col -->
        <div class="col-lg-4 mg-t-20">
          <div class="card card-dashboard-eight bg-white">
            <h6 class="card-title">Your Top Countries</h6>
            <span class="d-block mg-b-20">Sales performance revenue based by country</span>

            <div class="list-group">
              <div class="list-group-item">
                <i class="flag-icon flag-icon-us flag-icon-squared"></i>
                <p>United States</p>
                <span>$1,671.10</span>
              </div><!-- list-group-item -->
              <div class="list-group-item">
                <i class="flag-icon flag-icon-nl flag-icon-squared"></i>
                <p>Netherlands</p>
                <span>$1,064.75</span>
              </div><!-- list-group-item -->
              <div class="list-group-item">
                <i class="flag-icon flag-icon-gb flag-icon-squared"></i>
                <p>United Kingdom</p>
                <span>$1,055.98</span>
              </div><!-- list-group-item -->
              <div class="list-group-item">
                <i class="flag-icon flag-icon-ca flag-icon-squared"></i>
                <p>Canada</p>
                <span>$1,045.49</span>
              </div><!-- list-group-item -->
              <div class="list-group-item">
                <i class="flag-icon flag-icon-au flag-icon-squared"></i>
                <p>Australia</p>
                <span>$1,042.00</span>
              </div><!-- list-group-item -->
            </div><!-- list-group -->
          </div><!-- card -->
        </div><!-- col -->
      </div><!-- row -->
    </div>
    <div class="az-content-body-right">
      <div class="row mg-b-20">
        <div class="col">
          <label class="az-rating-label">Seller Score</label>
          <h6 class="az-rating-value">98%</h6>
        </div><!-- col -->
        <div class="col">
          <label class="az-rating-label">Rating Score</label>
          <h6 class="az-rating-value">4.5</h6>
        </div><!-- col -->
      </div><!-- row -->
      <hr class="mg-y-25">
      <label class="az-content-label tx-base mg-b-25">2 Recent Reviews</label>
      <div class="az-media-list-reviews">
        <div class="media">
          <div class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></div>
          <div class="media-body">
            <div class="d-flex justify-content-between mg-b-10">
              <div>
                <h6 class="mg-b-0">Socrates Itumay</h6>
                <div class="az-star-group">
                  <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                  <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                  <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                  <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                  <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                  <span>4.1</span>
                </div><!-- star-group -->
              </div>
              <small>1 hour ago</small>
            </div>
            <p class="mg-b-0">Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed amet...<a href="#">Read more</a></p>
          </div><!-- media-body -->
        </div><!-- media -->
        <div class="media">
          <div class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></div>
          <div class="media-body">
            <div class="d-flex justify-content-between mg-b-10">
              <div>
                <h6 class="mg-b-0">Reynante Labares</h6>
                <div class="az-star-group">
                  <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                  <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                  <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                  <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                  <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                  <span>4.5</span>
                </div><!-- star-group -->
              </div>
              <small>2 days ago</small>
            </div>
            <p class="mg-b-0">Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed amet...<a href="#">Read more</a></p>
          </div><!-- media-body -->
        </div><!-- media -->
      </div><!-- media-list -->

      <hr class="mg-y-25">
      <label class="az-content-label tx-base mg-b-25">Activity Stream</label>
      <div class="az-media-list-activity mg-b-20">
        <div class="media">
          <div class="media-icon bg-success"><i class="typcn typcn-tick-outline"></i></div>
          <div class="media-body">
            <h6>Successful Purchase</h6>
            <span>Product ID: #0102</span>
          </div>
          <div class="media-right">2 hours</div>
        </div><!-- media -->
        <div class="media">
          <div class="media-icon bg-primary"><i class="typcn typcn-shopping-cart"></i></div>
          <div class="media-body">
            <h6>Order Verification</h6>
            <span>Product ID: #2200</span>
          </div>
          <div class="media-right">3 hours</div>
        </div><!-- media -->
        <div class="media">
          <div class="media-icon bg-purple"><i class="typcn typcn-arrow-forward-outline"></i></div>
          <div class="media-body">
            <h6>Orders For Shipment</h6>
            <span>Cleared By: Agent#20</span>
          </div>
          <div class="media-right">5 hours</div>
        </div><!-- media -->
        <div class="media">
          <div class="media-icon bg-danger"><i class="typcn typcn-times-outline"></i></div>
          <div class="media-body">
            <h6>Purchase Cancellation</h6>
            <span>Product ID: #0102</span>
          </div>
          <div class="media-right">6 hours</div>
        </div><!-- media -->
        <div class="media">
          <div class="media-icon bg-success"><i class="typcn typcn-tick-outline"></i></div>
          <div class="media-body">
            <h6>Successful Purchase</h6>
            <span>Product ID: #2070</span>
          </div>
          <div class="media-right">10 hours</div>
        </div><!-- media -->
        <div class="media">
          <div class="media-icon bg-warning"><i class="typcn typcn-tick-outline"></i></div>
          <div class="media-body">
            <h6>Overdue Shipments</h6>
            <span>Reminder from: Agent#30</span>
          </div>
          <div class="media-right">18 hours</div>
        </div><!-- media -->
        <div class="media">
          <div class="media-icon bg-danger"><i class="typcn typcn-times-outline"></i></div>
          <div class="media-body">
            <h6>Purchase Cancellation</h6>
            <span>Product ID: #0102</span>
          </div>
          <div class="media-right">Yesterday</div>
        </div><!-- media -->
        <div class="media">
          <div class="media-icon bg-info"><i class="typcn typcn-times-outline"></i></div>
          <div class="media-body">
            <h6>New Item Added</h6>
            <span>Department: Wearables</span>
          </div>
          <div class="media-right">Yesterday</div>
        </div><!-- media -->
        <div class="media">
          <div class="media-icon bg-orange"><i class="typcn typcn-times-outline"></i></div>
          <div class="media-body">
            <h6>New Registered Seller</h6>
            <span>Seller Name: Socrates</span>
          </div>
          <div class="media-right">3 days</div>
        </div><!-- media -->
        <div class="media">
          <div class="media-icon bg-success"><i class="typcn typcn-tick-outline"></i></div>
          <div class="media-body">
            <h6>Successful Purchase</h6>
            <span>Product ID: #2070</span>
          </div>
          <div class="media-right">4 days</div>
        </div><!-- media -->
      </div><!-- az-media-list-activity -->
      <a href="#" class="btn btn-outline-light btn-block">View All Activities</a>
    </div>
  </div><!-- az-content-body -->
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
