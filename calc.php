<!----------- Loan calculator section ---------->

    <div class="container justify-content-center bg-white">
      <div class="row justify-content-center mt-2">
        <div class="col-md-6 mt-3 justify-content-center vertical-align-center">
          <div class="card border-primary text-white bg-primary mb-3" style="marginleft: 40px;" data-aos="fade-up-right" data-aos-delay="50" data-aos-duration="1000" style="max-width: 30rem;">
            <div class="card-header text-center" style="background-color: darkblue;">Loan Calculator</div>
            <div class="card-body bg-primary">
              <form>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-md-5 col-form-label">
                      Amount
                    </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control form-control-sm" placeholder="Enter Amount" id="input-amount">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-md-5 col-form-label">Loan
                        Period
                      </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control form-control-sm" id="input-period"
                               placeholder="Enter Loan Period in Months">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-md-5 col-form-label">
                      Interest Rate
                      </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control form-control-sm" id="input-interest" placeholder="Enter Interest Rate">
                    </div>
                </div>
                <div class="error-summary text-center">
                        <span id="loanPayment" class="text-center">

                        </span>
                </div>
                
            </form>
            </div>
            <div class="card-footer">
              <div class="form-group row center">
                <button type="button" style="border: 1px solid darkblue;" class="btn btn-primary w-100 mb-1" onclick="loanCalc()">Calculate
                </button>
            </div>
            </div>
          </div>   
        </div>

        <!-- Interest calculator section -->
        <div class="col-md-6 mt-3 justify-content-center vertical-align-center">
          <div class="card border-primary text-white bg-primary mb-3" style="marginleft: 40px;" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" style="max-width: 30rem;">
            <div class="card-header text-center" style="background-color: darkblue;">Interest Calculator</div>
            <div class="card-body bg-primary">
              <form>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-md-5 col-form-label">
                      Amount
                    </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control form-control-sm" placeholder="Enter Amount" id="input-amount">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-md-5 col-form-label">
                      Investment Period
                    </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control form-control-sm" id="input-period" placeholder="Enter Loan Period in Months">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-md-5 col-form-label">
                      Interest Rate
                    </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control form-control-sm" id="input-interest" placeholder="Enter Interest Rate">
                    </div>
                </div>
                <div class="error-summary text-center">
                        <span id="loanPayment" class="text-center">

                        </span>
                </div>
                
            </form>
            </div>
            <div class="card-footer">
              <div class="form-group row center">
                <button type="button" style="border: 1px solid darkblue;" class="btn btn-primary w-100 mb-1" onclick="interestCalc()">Calculate
                </button>
            </div>
            </div>
          </div>   
        </div>

      </div>
    </div>




