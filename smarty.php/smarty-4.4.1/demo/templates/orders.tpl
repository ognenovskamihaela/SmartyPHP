<div class="container mt-5">
    <div class="row">
        <div class="col-sm-3">
            <h3 class="text-light">New Order</h3>
            <div class="alert alert-success">Successful!</div>
            <div class="alert alert-danger">Unsuccessful!</div>
            <form name="myForm">
                <div class="mb-3 mt-3">
                    <label for="title" class="form-label">Title:</label>
                    <span class="text-danger">Insert order</span>
                    <input type="text" class="form-control"  placeholder="Enter order title" name="title" id="title">
                    </div>
                    <button type="button" class="btn btn-success" name="btnSave">Save</button>
            </form>
        </div>
        <!-- /left content -->
        <div class="col-sm-9">
        
        <h3 class="text-light">Orders</h3>
        <div class="table-responsive">
            <table class="table table-dark table-hover mt-4">
                <thead>
                    <tr>
                    <th>orders</th>
                    <th>date of order</th>
                    <th>products</th>
                    <th>user</th>
                    <th>petshop</th>
                    <th>edit</th>
                    <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                {section name=index loop=$orders}
                    <tr><td>{$orders[index].n_id}</td>
                        <td>{$orders[index].date}</td>
                        <td>{$orders[index].s_id}</td>
                        <td>{$orders[index].name} {$orders[index].last_name}</td>
                        <td>street: {$orders[index].adress_petshops} <br> city: {$orders[index].city}</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                {/section}
                </tbody>
            </table>
        </div>
        </div>
    </div>
    <!-- /class row -->
</div>
<!-- /Container -->
