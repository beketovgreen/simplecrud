<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">CRUD</a>
    </nav>

    <div class="row col-sm-8">
        <div class="col-sm-4">
            <form>
                <div class="form-group top">
                    <label for="exampleInputName1">Name</label>
                    <input class="form-control" id="inputName" placeholder="Enter name"/>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Surname</label>
                    <input type="email" class="form-control" id="inputSurname" placeholder="Surname">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>

                <button type="submit" class="btn btn-primary btn-group-xs" onclick="saveData()">Ok</button>
            </form>
        </div>
    </div>
</div>