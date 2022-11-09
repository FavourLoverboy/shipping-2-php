<div class="row">
    <div class="col-md-12">
        <h2>Admin Dashboard</h2>   
        <h5 style="font-weight:normal;">Welcome Mr <?php echo $_SESSION['name']; ?>, Rapid Parcel Express, Love to see you back. </h5>
    </div>
</div>
<hr />
<div class="panel panel-default" style="overflow: auto;">    
    <div class="col-md-12" id="del_msg" style="text-align:center;"></div>
    <br>
    <div class="panel-heading">All Packages</div>
        <div class="panel-body">
            <div class="w3-responsive">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Tracking No</th>
                            <th>Item</th>
                            <th>shipping type</th>
                            <th>Status</th>
                            <th>current location</th>
                            <th>Origin</th>
                            <th>Sender</th>
                            <th>Sender phone</th>
                            <th>Receiver</th>
                            <th>Destination</th>
                            <th>Receiver phone</th>
                            <th>Send Date</th>
                            <th>Item pic</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ELS-EA62I83WTX</td>
                            <td>ps3 game</td>
                            <td>Road</td>
                            <td>On transit</td>
                            <td>Paris, france</td>
                            <td>USA, texas</td>
                            <td>John Gill</td>
                            <td>0897654</td>
                            <td>Philip gill</td>
                            <td>France, st petersburg</td>
                            <td>08123456789</td>
                            <td>2019-02-05</td>
                            <td >
                                <img src='assets/1.jpg' style='width:60px;'/>
                            </td>
                            <td>
                                <a href='update_package/ELS-EA62I83WTX' class='btnn btn-primary btn-xs'><i class='fa fa-pencil'></i></a>
                                <buttton remove_id='ELS-EA62I83WTX' class='btnn btn-danger btn-xs'><i class='fa fa-trash-o' ></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>ELS-EA62I83WTX</td>
                            <td>ps3 game</td>
                            <td>Road</td>
                            <td>On transit</td>
                            <td>Paris, france</td>
                            <td>USA, texas</td>
                            <td>John Gill</td>
                            <td>0897654</td>
                            <td>Philip gill</td>
                            <td>France, st petersburg</td>
                            <td>08123456789</td>
                            <td>2019-02-05</td>
                            <td >
                                <img src='assets/2.jpg' style='width:60px;'/>
                            </td>
                            <td>
                                <a href='update_package/ELS-EA62I83WTX' class='btnn btn-primary btn-xs'><i class='fa fa-pencil'></i></a>
                                <buttton remove_id='ELS-EA62I83WTX' class='btnn btn-danger btn-xs'><i class='fa fa-trash-o' ></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>ELS-EA62I83WTX</td>
                            <td>ps3 game</td>
                            <td>Road</td>
                            <td>On transit</td>
                            <td>Paris, france</td>
                            <td>USA, texas</td>
                            <td>John Gill</td>
                            <td>0897654</td>
                            <td>Philip gill</td>
                            <td>France, st petersburg</td>
                            <td>08123456789</td>
                            <td>2019-02-05</td>
                            <td >
                                <img src='assets/1.jpg' style='width:60px;'/>
                            </td>
                            <td>
                                <a href='update_package/ELS-EA62I83WTX' class='btnn btn-primary btn-xs'><i class='fa fa-pencil'></i></a>
                                <buttton remove_id='ELS-EA62I83WTX' class='btnn btn-danger btn-xs'><i class='fa fa-trash-o' ></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> 
        </div> 
    </div>
</div> 