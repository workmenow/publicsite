<div class="register-modal modal fade" id="premierModal1" role="dialog">
    <script src="https://use.fontawesome.com/e64f908ce8.js"></script>

<div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Payment details</h2>
        <p>You will be charged the activation fee plus your monthly membership costs. You can cancel anytime without a penalty.</p>
      </div>
      <div class="modal-body">
           <form id="premierForm">



                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>First name<sup class="asterisk">*</sup></label>
                                    <input type="text" class="form-control"  id="fname">
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label>Last name<sup class="asterisk">*</sup></label>
                                    <input type="text" class="form-control" id="lname" required>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-12">


                                <div class="form-group">
                                    <label>Card number<sup class="asterisk">*</sup></label>
                                    <input type="text" class="form-control" id="ccard">
                                </div>
                            </div>
                        </div>


                          <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>CVV<sup class="asterisk">*</sup> <a class="secondary" href="#">What's this?</a></label>
                                    <input type="text" class="form-control" id="cvv">
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>Exp date<sup class="asterisk">*</sup></label>
                                    <input type="text" class="form-control" placeholder="__/____" id="expiration" required>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>Zip code<sup class="asterisk">*</sup></label>
                                    <input type="text" class="form-control" id="zip" required>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-xs-12">
                               <div class="form-group">
                                  <label for="sel1">Charity organization I prefer to benefit:</label>
                                  <select class="form-control charities" id="charity-select">
                                    <option>Red Cross</option>
                                    <option>Habitat for Humanity</option>
                                    <option>Another Charity here</option>
                                    <option>A Great Charity</option>
                                  </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                               <div class="col-lg-12">

                                        <div class="form-group">
                                            <label>Don't see your charity?</label>
                                        <textarea class="form-control" placeholder="Tell us the charity you would like to benefit and who we can contact and we will reach out to them about forming a partnership. (This can also be added and updated in your member portal.)" id="message"></textarea>
                                        </div>

                               </div>
                         </div>


                         <div class="row">
                            <div class="col-md-9 col-xs-12">
                               <div class="checkbox">
                                 <label><input type="checkbox"> I agree to WorkMeNow's Terms & Conditions*</label>
                               </div>
                             </div>
                            <div class="col-md-3 col-xs-12">
                              <a href="success.php" class="btn btn-primary btn-lg btn-block">SUBMIT</a>
                            </div>
                        </div>


                    </form>
      </div>

    </div>

  </div>
</div>



</div>