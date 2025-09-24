<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.12/themes/default/style.min.css" /> -->
        <style>
            pre {
                background-color: #f4f4f4;
                padding: 15px;
                border: 1px solid #ddd;
                overflow-x: auto; /* For horizontal scrolling if content is wide */
            }
            code {
                font-family: monospace;
                color: #333;
            }
        </style>
    </head>
    <body>
        <table id="showTable" class="display">
            <thead>
                <tr>
                    <th>ID</td>
                    <th>IP</td>
                    <th>Country</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Campaign Name</th>
                    <th>Total Price</th>
                    <th>Card Last Digits</th>
                    <th>Order ID</th>
                    <th>Total Items</th>
                    <th>Total Ship Price</th>
                    <th>Status</th>
                    <th>Payload</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <div class="modal fade" id="payloadModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Payload</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <pre id="payloadContent" class="bg-light p-3 rounded"></pre>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function(){
                var table = $('#showTable').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax":{
                        "url": 'ajaxHandler.php',
                        "type": 'POST',
                        "dataSrc": 'data',
                        "data":{
                            "requestType": "joinTables",
                        }
                    },
                    "columns":[
                        {data:"id"},
                        {data:"ip"},
                        {data:"country"},
                        {
                            data:"email",
                            render:function(data){
                                return data === null ? "null" : data;
                            }
                        },
                        {
                            data:"phone",
                            render:function(data){
                                return data === null ? "null" : data;
                            }
                        },
                        {
                            data:"campaign_name",
                            render:function(data){
                                return data === null ? "null" : data;
                            }
                        },
                        {
                            data:"total_price",
                            render:function(data){
                                return data === null ? "null" : data;
                            }
                        },
                        {
                            data:"card_last_digit",
                            render:function(data){
                                return data === null ? "null" : data;
                            }
                        },
                        {   
                            data:"order_id",
                            render:function(data){
                                return data === null ? "null" : data;
                            }
                        },
                        {
                            data:"total_items",
                            render:function(data){
                                return data === null ? "null" : data;
                            }
                        },
                        {
                            data:"total_ship_price",
                            render:function(data){
                                return data === null ? "null" : data;
                            }
                        },
                        {
                            data:"checkout_payload",
                            render:function(data){
                                return data === null ? "Partial" : "Complete";
                            }
                        }
                    ],
                    "columnDefs": [
                        {
                            "targets": 12,
                            "data": "joinTables",
                            "defaultContent": "<button class='btn btn-primary view-button'>View Payload</button>"
                        }
                    ],
                    "order": [[1, 'asc']],
                    "on": {
                        draw: (e) => {
                            let start = e.dt.page.info().start;
                
                            e.dt.column(0, {page: 'current'})
                                .nodes()
                                .each((cell, i) => {
                                    cell.textContent = start + i + 1;
                                });
                        }
                    }
                });
                $("#showTable tbody").on('click','.view-button',function(){
                    var data = table.row($(this).parents('tr')).data();
                    //console.log(JSON.parse(data.click_payload));
                    var clickData = JSON.parse(data.click_payload);
                    var prospectData = JSON.parse(data.prospect_payload);
                    var checkoutData = JSON.parse(data.checkout_payload);
                    var upsellData = JSON.parse(data.upsell_payload);
                    var successData = JSON.parse(data.success_payload);
                    var formatted_click_json = JSON.stringify(clickData, null, 2);
                    var formatted_prospect_json = JSON.stringify(prospectData, null, 2);
                    var formatted_checkout_json = JSON.stringify(checkoutData, null, 2);
                    var formatted_upsell_json = JSON.stringify(upsellData, null, 2);
                    var formatted_success_json = JSON.stringify(successData, null, 2);

                    var payload_array = [formatted_click_json,formatted_prospect_json,formatted_checkout_json,formatted_upsell_json,formatted_success_json];
                    var label = ["Click Payload: \n","Prospect Payload: \n","Checkout Payload: \n","Upsell Payload: \n","Success Payload: \n"];
                    var item = "";

                    for(var i=0;i<payload_array.length;i++){
                        if(payload_array[i] === "null"){
                            continue;
                        }else{
                            item = item + label[i] + payload_array[i] + "\n";
                        }
                    }

                    $("#payloadContent").text(item);

                    //$("#payloadContent").text("Click Payload \n"+formatted_click_json +"\n Prospect Payload \n"+ formatted_prospect_json + "\n Checkout Payload \n" +formatted_checkout_json + "\n Upsell Payload \n" + formatted_upsell_json + "\n Success Payload \n" + formatted_success_json);
                    
                    var myModal = new bootstrap.Modal(document.getElementById('payloadModal'));
                    myModal.show();
                });
            });
        </script>
    </body>
</html>