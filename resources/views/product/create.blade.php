<!doctype html>
<html class="no-js" lang="en">
    
    @include('inc.headcss')

    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        @include('inc.header')

        <!-- checkout-area start -->
            <div class="checkout-area ptb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <form method="POST" action="/product">

                                {{csrf_field()}}
                                <input type="hidden" name="user_id" value="{{$user->id}}">

                                <div class="checkbox-form">	

                                    <h3>PRODUCT</h3>
                                    <!-- // -->
                                    <!-- <div class="row">
                                        <div class="col-md-12">
                                            <div class="country-select">
                                                <label>Country <span class="required">*</span></label>
                                                <select>
                                                  <option value="volvo">bangladesh</option>
                                                  <option value="saab">Algeria</option>
                                                  <option value="mercedes">Afghanistan</option>
                                                  <option value="audi">Ghana</option>
                                                  <option value="audi2">Albania</option>
                                                  <option value="audi3">Bahrain</option>
                                                  <option value="audi4">Colombia</option>
                                                  <option value="audi5">Dominican Republic</option>
                                                </select> 										
                                            </div>
                                        </div> -->


                                        <!-- /photo/ -->


                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Name<span class="required">*</span></label>
                                                <input type="text" name="name" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Price<span class="required">*</span></label>										
                                                <input type="text" name="price" placeholder="" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Categorie<span class="required">*</span></label> 

                                                <select>
                                                    <option name="categorie_id" value="1">Device</option>  
                                                    <option name="categorie_id" value="2">Women</option>
                                                    <option name="categorie_id" value="3">Men</option>
                                                    <option name="categorie_id" value="4">Sport</option>
                                                    <option name="categorie_id" value="5">Kids</option>            
                                                </select>                                       
                                            </div>
                                        </div>




                                        <div class="order-notes">
                                            <div class="checkout-form-list mrg-nn">
                                                <label>Details</label>
                                                <textarea id="checkout-mess" name="details" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
                                            </div>                                  
                                        </div>
                                        <div class="order-notes">
                                            <div class="checkout-form-list mrg-nn">
                                                <label>Description</label>
                                                <textarea id="checkout-mess" name="description" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
                                            </div>                                  
                                        </div>

                                        <!-- <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Last Name <span class="required">*</span></label>										
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div> -->
                                        
                                        
                                        
                                </div>						
                                
                                <div class="col-md-6">       
                                    <div class="order-button-payment">
                                            <input type="submit" name="submits" value="Add Product" >
                                    </div> 
                                </div> 
                                       
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- checkout-area end -->	
            
        @include('inc.footer')

		
        @include('inc.sidemodal')
		
		
		@include('inc.js')

    </body>
</html>
