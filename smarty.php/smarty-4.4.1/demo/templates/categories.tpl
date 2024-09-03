<div class="container mt-5">
    <div class="row">
        <div class="col-sm-3">
            <h3 class="text-light">New Category</h3>
            <div class="alert alert-success">Successful!</div>
            <div class="alert alert-danger">Unsuccessful!</div>
            <form name="myForm">
                <div class="mb-3 mt-3">
                    <label for="title" class="form-label">Title:</label>
                    <span class="text-danger">Insert a category with at least three characters!</span>
                    <input type="text" class="form-control"  placeholder="Enter category title" name="title" id="title">
                </div>
                <button type="button" class="btn btn-success" name="btnSave">Save</button>
            </form>
        </div>
        <!-- /left content -->
        <div class="col-sm-9">
        <h3 class="text-light">List Categories</h3>  
        <div class="table-responsive">
            <table class="table table-dark table-hover mt-4" >
                <thead>
                    <tr>
                        <th>categories</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                    {section name=index loop=$categories}
                        <tr>
                            <td>{$categories[index].title}</td>
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
   