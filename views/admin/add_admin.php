<div class="row">
    <div class="col-md-12">
        <h2>Admin Dashboard</h2>   
    </div>
</div>              
<hr />    
<div class=" w3-container w3-content w3-card-4  w3-padding" style="width: 700px;height:355px;">
    <h3>Create an  Admin</h3>
    <hr>
    <form class="w3-container" action="" method="POST">
        <div class="w3-half w3-padding">
            <p>
                <label>Admin Name</label> 
                <input class="w3-input w3-border w3-round-large" type="text" name="admin_name" required=""  placeholder="admin name" />
            </p>

            <p>
                <label>Admin Type</label>
                <select class="w3-select w3-border" name="admin_type">
                    <option disabled selected> select </option>
                    <option value="Staff"> Staff </option>
                    <option value="Admin"> Admin </option>
                </select>
            </p>

        </div>

        <div class="w3-half w3-padding mb-2">
            <p>
                <label>Admin username</label>
                <input class="w3-input w3-border w3-round-large" type="text" name="admin_username" required  placeholder="admin usernname"/>
            </p>
            <p>
                <label>Choose Password</label>
                <input class="w3-input w3-border w3-round-large" type="password" name="admin_password" required  placeholder="enter a password "/>
            </p>
        </div>
        <button type="submit" name="add" class="w3-btn  w3-btn-block w3-black"> ADD <i class="fa fa-plus" ></i></button>
    </form>
</div>