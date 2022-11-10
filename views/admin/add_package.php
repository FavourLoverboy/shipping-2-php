<div class="row">
    <div class="col-md-12">
        <h2>Admin Dashboard</h2>   
    </div>
</div>
<hr />
<div class="w3-container w3-content w3-card-4  w3-padding" style="width: 700px;">
    <h3>Add Package</h3>
    <hr>
    <form class="w3-container" action="" method="POST" enctype="multipart/form-data">
        <div class="w3-container ">
            <p>Item image</p>
                <img src="assets/add.jpg" class="w3-image" style="max-width: 20%;"  id="output"/>
                <br>
                <input type="file" name="img" class="input_file mt-2"  required accept="image/*" onchange="loadFile(event)"  style="color:red;"/>
        </div>
        <div class="w3-half w3-padding">
            <p>
                <label>Tracking No</label> 
                <input class="w3-input w3-border w3-round-large" type="text" name="tracking_no" readonly="" value="ELS-UE76RM3W81" />
            </p>
            <p>
                <label>Item</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="item" required  placeholder="enter item name"/>
            </p>
            <p>
                <label>Shipping Type</label>
                <select class="w3-select w3-border" name="shipping_type">
                    <option disabled selected> select </option>
                    <option value="Air"> Air </option>
                    <option value="Road"> Road </option>
                    <option value="Sea"> Sea </option>
                </select>
            </p>
            <p>
                <label>Sender Name</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="sender_name" required  placeholder="enter name"/>
            </p>
            <p>
                <label>Origin</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="origin" required  placeholder="enter source"/>
            </p>
        </div>
        <div class="w3-half w3-padding">
            <p>
                <label>Sender Phone</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="sender_phone" required  placeholder="sender contact"/>
            </p>
            <p>
                <label>Receiver Name</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="receiver_name" required  placeholder="enter name "/>
            </p>
            <p>
                <label>Destination  </label><input class="w3-input w3-border w3-round-large" type="text" name="destination" required  placeholder="enter shipping place "/>
            </p>
            <p>
                <label>Receiver Phone</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="receiver_phone" required  placeholder="receiver contact"/>
            </p>
            <p>
                <label>Status</label>
                <select class="w3-select w3-border" name="status">
                    <option disabled selected> select </option>
                    <option value="Awaiting delivery">Awaiting Delivery</option>
                    <option value="Parcel held"> Parcel held </option>
                    <option value="On transit"> On transit </option>
                </select>
            </p>
        </div>
        <button type="submit" name="add" class="w3-btn  w3-btn-block w3-teal"> ADD <i class="fa fa-plus" ></i></button>

    </form>
</div>


<script >
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('output');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>