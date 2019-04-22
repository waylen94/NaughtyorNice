<header class="masthead">
    <div class="container">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Naughty or Nice</h1>

      </div>
    </div>	
		<div class="row sonar-wrapper">
		<button type ="button" class="sonar-emitter text-center text-white mt-0 btn-lg orange-circle-button btn btn-primary "data-toggle="modal" data-target="#line_chart" > Naughty <br />or <br />Nice
		<div class="sonar-wave"></div>
		</button>
		
		
		</div>
        </div>
        
        <div class="modal fade" id="line_chart" tabindex="-1" role="dialog" aria-labelledby="line_chart" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Line Chart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    @include('chart._linechart')
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" >Know more</button>
                  </div>
                </div>
              </div>
		</div>
        
  </header>