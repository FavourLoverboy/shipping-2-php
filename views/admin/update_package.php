<div class="row">
    <div class="col-md-12">
        <h2>Admin Dashboard</h2>   
    </div>
</div>
<hr />       
<div class=" w3-container w3-content w3-card-4  w3-padding" style="width: 700px;">
    <h3>Update Package</h3>
    <hr>
    <form class="w3-container" action="" method="POST" enctype="multipart/form-data">
        <div class="w3-container ">
            <p>Item image</p>
            <img src="assets/2.jpg" class="w3-image w3-margin-bottom" style="max-width: 20%;"  id="output"/> 
            </br>
            <input type="file" name="img" class="input_file"  accept="image/*" onchange="loadFile(event)"  style="color:red;"/>
        </div>
        <div class="w3-half w3-padding">
            <p>
                <label>Tracking No</label> 
                <input class="w3-input w3-border w3-round-large" type="text" name="tracking_no" readonly="" value="ELS-EA62I83WTX" />
            </p>
            <p>
                <label>Item</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="item" required  value="ps3 game" />
            </p>    
            <p>
                <label>Shipping Type</label>
                <select class="w3-select w3-border" name="shipping_type">
                    <option value="Road" >Road</option>
                    <option value="Air">Air</option>
                    <option value="Road">Road</option>
                    <option value="Sea">Sea</option>
                </select>
            </p>
            <p>
                <label>Sender Name</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="sender_name" required  value="John Gill" />
            </p>

            <p>
                <label>Sender Phone</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="sender_phone" required  value="0897654" />
            </p>
            <p>
                <label>Sender Address</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="sender_address" required  value="89 st phils, texas" />
            </p>
            <p>
                <label>Origin</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="origin" required value="USA, texas" />
            </p>
            <p>
                <label>Current Location</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="current_location" required  value="Paris, france" />
            </p>
            <p>
                <label>Location 1</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="loca1"   value="Dubai" />
            </p>
            <p>
                <label>Location 1 Date</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="loca1_date"   value="19/09/2019" />
            </p>
            <p>
                <label>Location 1 Activity</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="loca1_activity"   value="Shipments Ready" />
            </p>
            <p>
                <label>Location 2</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="loca2"   value="Canada" />
            </p>
            <p>
                <label>Location 2 Date</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="loca2_date"   value="25/10/2019" /></p>
            <p>
                <label>Location 2 Activity</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="loca2_activity"   value="with Custom" />
            </p>
            <p>
                <label>Shipping Progress (Percentage %)</label>
                <input class="w3-input w3-border w3-round-large" type="number" name="percent"   value="100" />
            </p>
        </div>
        <div class="w3-half w3-padding">
            <p>
                <label>Receiver Name</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="receiver_name" required  value="Philip gill" />
            </p>
            <p>
                <label>Receiver Phone</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="receiver_phone" required value="08123456789" />
            </p>
            <p>
                <label>Receiver Address</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="receiver_address" required  value="101 peds, paris" />
            </p>
            <p>
                <label>Status</label>
                <select class="w3-select w3-border" name="status">
                    <option value="On transit" >On transit</option>
                    <option value="Awaiting approval">Awaiting Approval</option>
                    <option value="Awaiting delivery">Awaiting Delivery</option>
                    <option value="On transit">On transit</option>
                    <option value="Parcel held">Parcel held</option>
                    <option value="On move">On move</option>
                    <option value="Delivered waiting for pickup">Delivered waiting for pickup</option>
                    <option value="Delivered">Completed & Delivered</option>
                </select>
            </p>
            <p>
                <label>Send date</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="send_date" required  value="2019-02-05" />
            </p>
            <p>
                <label>Delivery Comments  </label>
                <input class="w3-input w3-border w3-round-large" type="text" name="delivery_comments" required  value="Parcel with held by Japan custom" />
            </p>
            <p>
                <label>Destination  </label>
                <input class="w3-input w3-border w3-round-large" type="text" name="destination" required  value="France, st petersburg" />
            </p>
            <p>
                <label>Location 3</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="loca3"   value="France" />
            </p>      
            <p>
                <label>Location 3 Date</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="loca3_date"   value="29/10/2019" />
            </p>
            <p>
                <label>Location 3 Activity</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="loca3_activity"   value="almost near you" />
            </p>
            <p>
                <label>Location 4</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="loca4"   value="Umulolo" />
            </p>
            <p>
                <label>Location 4 Date</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="loca4_date"   value="12/18/19" />
            </p>
            <p>
                <label>Location 4 Activity</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="loca4_activity"   value="going" />
            </p>
            <p>
                <label>Location 5</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="loca5"   value="Umuguma" />
            </p>
            <p>
                <label>Location 5 Date</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="loca5_date"   value="12/19/19" />
            </p>
            <p>
                <label>Location 5 Activity</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="loca5_activity"   value="going" />
            </p>
            <input class="w3-input w3-border w3-round-large" type="hidden" name="item_pic" required  value="pic/parcel-single.jpg" />
        </div>
        <button type="submit" name="update" class="w3-btn  w3-btn-block w3-black"> UPDATE <i class="fa fa-plus" ></i></button> 
    </form>
</div>
<script type="text/javascript">
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
        var output = document.getElementById('output');
        output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>