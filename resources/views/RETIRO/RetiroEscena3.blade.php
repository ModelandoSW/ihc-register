<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Principal</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/css/pricing.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
</head>
<style>
    body {
        color: #566787;
        background: #f5f5f5;
        font-family: 'Varela Round', sans-serif;
        font-size: 13px;
    }

    .table-responsive {
        margin: 30px 0;
    }

    .table-wrapper {
        background: #fff;
        padding: 20px 25px;
        border-radius: 3px;
        min-width: 1000px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .table-title {
        padding-bottom: 15px;
        background: #435d7d;
        color: #fff;
        padding: 16px 30px;
        min-width: 100%;
        margin: -20px -25px 10px;
        border-radius: 3px 3px 0 0;
    }

    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }

    .table-title .btn-group {
        float: right;
    }

    .table-title .btn {
        color: #fff;
        float: right;
        font-size: 13px;
        border: none;
        min-width: 50px;
        border-radius: 2px;
        border: none;
        outline: none !important;
        margin-left: 10px;
    }

    .table-title .btn i {
        float: left;
        font-size: 21px;
        margin-right: 5px;
    }

    .table-title .btn span {
        float: left;
        margin-top: 2px;
    }

    table.table tr th,
    table.table tr td {
        border-color: #e9e9e9;
        padding: 12px 15px;
        vertical-align: middle;
    }

    table.table tr th:first-child {
        width: 60px;
    }

    table.table tr th:last-child {
        width: 100px;
    }

    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }

    table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
    }

    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }

    table.table td:last-child i {
        opacity: 0.9;
        font-size: 22px;
        margin: 0 5px;
    }

    table.table td a {
        font-weight: bold;
        color: #566787;
        display: inline-block;
        text-decoration: none;
        outline: none !important;
    }

    table.table td a:hover {
        color: #2196F3;
    }

    table.table td a.edit {
        color: #FFC107;
    }

    table.table td a.delete {
        color: #F44336;
    }

    table.table td i {
        font-size: 19px;
    }

    table.table .avatar {
        border-radius: 50%;
        vertical-align: middle;
        margin-right: 10px;
    }

    .pagination {
        float: right;
        margin: 0 0 5px;
    }

    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }

    .pagination li a:hover {
        color: #666;
    }

    .pagination li.active a,
    .pagination li.active a.page-link {
        background: #03A9F4;
    }

    .pagination li.active a:hover {
        background: #0397d6;
    }

    .pagination li.disabled i {
        color: #ccc;
    }

    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }

    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }

    /* Custom checkbox */
    .custom-checkbox {
        position: relative;
    }

    .custom-checkbox input[type="checkbox"] {
        opacity: 0;
        position: absolute;
        margin: 5px 0 0 3px;
        z-index: 9;
    }

    .custom-checkbox label:before {
        width: 18px;
        height: 18px;
    }

    .custom-checkbox label:before {
        content: '';
        margin-right: 10px;
        display: inline-block;
        vertical-align: text-top;
        background: white;
        border: 1px solid #bbb;
        border-radius: 2px;
        box-sizing: border-box;
        z-index: 2;
    }

    .custom-checkbox input[type="checkbox"]:checked+label:after {
        content: '';
        position: absolute;
        left: 6px;
        top: 3px;
        width: 6px;
        height: 11px;
        border: solid #000;
        border-width: 0 3px 3px 0;
        transform: inherit;
        z-index: 3;
        transform: rotateZ(45deg);
    }

    .custom-checkbox input[type="checkbox"]:checked+label:before {
        border-color: #03A9F4;
        background: #03A9F4;
    }

    .custom-checkbox input[type="checkbox"]:checked+label:after {
        border-color: #fff;
    }

    .custom-checkbox input[type="checkbox"]:disabled+label:before {
        color: #b8b8b8;
        cursor: auto;
        box-shadow: none;
        background: #ddd;
    }

    /* Modal styles */
    .modal .modal-dialog {
        max-width: 400px;
    }

    .modal .modal-header,
    .modal .modal-body,
    .modal .modal-footer {
        padding: 20px 30px;
    }

    .modal .modal-content {
        border-radius: 3px;
        font-size: 14px;
    }

    .modal .modal-footer {
        background: #ecf0f1;
        border-radius: 0 0 3px 3px;
    }

    .modal .modal-title {
        display: inline-block;
    }

    .modal .form-control {
        border-radius: 2px;
        box-shadow: none;
        border-color: #dddddd;
    }

    .modal textarea.form-control {
        resize: vertical;
    }

    .modal .btn {
        border-radius: 2px;
        min-width: 100px;
    }

    .modal form label {
        font-weight: normal;
    }
</style>
<script>
    $(document).ready(function() {
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function() {
            if (this.checked) {
                checkbox.each(function() {
                    this.checked = true;
                });
            } else {
                checkbox.each(function() {
                    this.checked = false;
                });
            }
        });
        checkbox.click(function() {
            if (!this.checked) {
                $("#selectAll").prop("checked", false);
            }
        });
    });
</script>

<body><br>
    <div class="nav justify-content-center">
        <img width="350" height="40" src="{{ asset('assets/images/logogabriel.png') }}">
    </div>
    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            </div>
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h3 class="fw-normal"> <b>
                        218002319 - ANDRADE ORTIZ ESROM OBED
                    </b></h3>
                <h4 class="text-muted"><b>Seleccione Una Opci??n: </b></h4>
            </div>
        </header>
        <div class="row">
            <h3 class="fw-normal"><b> PPA :</b>
            </h3>
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                 65
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="#">65</a></li>
                  <li><a class="dropdown-item" href="#">53</a></li>
                  <li><a class="dropdown-item" href="{{ route('welcome')}}">35</a></li>
                </ul>
              </div>
        </div>

        <main>
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2><b>Retiro</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#deleteEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                            class="material-icons">&#xE15C;</i> <span>Guardar</span></a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Grupo</th>
                                    <th>Sigla</th>
                                    <th>Materia</th>
                                    <th>Cantidad Inscritos</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                <label for="checkbox1"></label>
                                            </span>
                                        </td> -->
                                    <td>SA</td>
                                    <td>MAT202</td>
                                    <td>Probabilidades Estadistica1</td>
                                    <td>89</td>
                                    
                                    <td>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SA</td>
                                    <td>MAT205</td>
                                    <td>MetodosNumeros</td>
                                    <td>50</td>
                                    
                                    <td>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SA</td>
                                    <td>INF220</td>
                                    <td>EstructurasDatos</td>
                                    <td>90</td>
                                    
                                    <td>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    </td>
                                </tr>
                                <tr>
                                     <td>SA</td>
                                    <td>INF221</td>
                                    <td>ProgramacionEnsamblador</td>
                                    <td>40</td>
                                 
                                    <td>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    </td>
                                </tr>
                                <tr>
                                     <td>SA</td>
                                    <td>ADM200</td>
                                    <td>contabilidad</td>
                                    <td>60</td>
                               
                                    <td>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    </td>
                                </tr>
                                   <tr>
                                    <td>SA</td>
                                    <td>INF221</td>
                                    <td>ProgramacionEnsamblador</td>
                                    <td>40</td>
                                    
                                    <td>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SA</td>
                                    <td>INF310</td>
                                    <td>Estructura de datos2</td>
                                    <td>90</td>
                                   
                                    <td>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Edit Modal HTML -->
            <div id="addEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Add Employee</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-success" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Edit Modal HTML -->
            <div id="editEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Employee</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-info" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Delete Modal HTML -->
            <div id="deleteEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Employee</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete these Records?</p>
                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <a href="{{ route('InscripcionCaso1Ok') }}" type="button"
                class="w-100 text-white btn btn-lg btn-warning">Correcto</a>
        </main>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="col-12 col-md">
                <small class="d-block mb-3 text-muted">&copy;2023</small>
            </div>
        </footer>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
