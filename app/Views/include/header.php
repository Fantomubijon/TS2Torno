<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title><?= esc($title); ?></title>

    <style>
    /* General Styles */
body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
}

.table {
    border-radius: 25px; 
    overflow: hidden;
}


html, body {
    width: 100%;
    margin: 0;
}

.container {
    padding: 20px;
    margin: auto;
}

.form-group {
    margin-bottom: 1rem;
}

.form-control {
    border-radius: 8px;
    border: 1px solid #ced4da;
    padding: 0.75rem;
    font-size: 1rem;
    transition: border-color 0.2s ease;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0px 0px 5px rgba(0, 123, 255, 0.25);
}

.btn {
    border-radius: 8px;
    padding: 0.5rem 1rem;
    transition: background-color 0.2s ease, border-color 0.2s ease;
}

.btn-success {
    background-color: #28a745;
    border-color: #28a745;
    color: #fff;
}

.btn-success:hover {
    background-color: #218838;
    border-color: #1e7e34;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
    color: #fff;
}

.btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
}

.btn-warning {
    background-color: #ffc107;
    border-color: #ffc107;
    color: #fff;
}

.btn-warning:hover {
    background-color: #e0a800;
    border-color: #d39e00;
}

.btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
    color: #fff;
}

.btn-secondary:hover {
    background-color: #5a6268;
    border-color: #545b62;
}

/* Card-like Container */
.col-md-6 {
    /* background-color: #fff; */
    border-radius: 12px;
    /* box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); */
    padding: 20px;
    margin: 20px 0;
}

/* Table Styles */
.table {
    width: 100%;
    margin-top: 20px;
}

.table th,
.table td {
    padding: 0.75rem;
    vertical-align: middle;
}

.table thead th {
    background-color: #007bff;
    color: #fff;
    border-bottom: 2px solid #0056b3;
}

.table-hover tbody tr:hover {
    background-color: #f1f1f1;
}

/* Responsive Adjustments */
@media (max-width: 576px) {
    .col-md-6 {
        width: 90%;
        padding: 10px;
    }

    .form-control {
        font-size: 0.9rem;
    }

    .btn {
        font-size: 0.9rem;
        padding: 0.4rem 0.8rem;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .col-md-6 {
        width: 75%;
        padding: 15px;
    }

    .form-control {
        font-size: 1rem;
    }

    .btn {
        font-size: 1rem;
        padding: 0.5rem 1rem;
    }
}

@media (min-width: 769px) {
    .col-md-6 {
        width: 60%;
        padding: 20px;
    }

    .form-control {
        font-size: 1.1rem;
    }

    .btn {
        font-size: 1.1rem;
        padding: 0.6rem 1.2rem;
    }
}


    .login-container {
        border-radius: 12px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .min-vh-100 {
        min-height: 100vh;
    }

    .form-control {
        border-radius: 8px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 8px;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
        border-radius: 8px;
    }

    .navbar {
        background-color: #f8f9fa; 
    }

    .navbar-brand {
        color: #333;
    }

    .navbar-toggler {
        border: none;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .btn-danger {
        background-color: #dc3545;
        border-radius: 8px;
    }

    .navbar-collapse {
        justify-content: flex-end;
    }

    .navbar-brand, .btn-danger {
        transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out;
    }

    .navbar-brand:hover, .btn-danger:hover {
        color: #007bff;
    }

    @media (max-width: 576px) {
    .login-container {
        width: 90%;
        margin: 0 auto;
        padding: 1rem;
    }

    .btn-primary, .btn-secondary {
        font-size: 0.9rem;
        padding: 0.5rem;
    }

    .form-control {
        font-size: 0.9rem;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .login-container {
        width: 75%;
        padding: 1.5rem;
    }

    .btn-primary, .btn-secondary {
        font-size: 1rem;
        padding: 0.75rem;
    }

    .form-control {
        font-size: 1rem;
    }
}


@media (min-width: 769px) {
    .login-container {
        width: 50%;
        padding: 2rem;
    }

    .btn-primary, .btn-secondary {
        font-size: 1.1rem;
        padding: 0.75rem 1rem;
    }

    .form-control {
        font-size: 1.1rem;
    }
}

    @media (max-width: 768px) {
        .navbar-brand {
            font-size: 1.2rem;
        }
        .btn-danger {
            font-size: 0.9rem;
            padding: 0.4rem 0.8rem;
        }
    }

    @media (min-width: 769px) {
        .navbar-brand {
            font-size: 1.5rem;
        }
    }


.form-control {
    border-radius: 8px;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    border-color: #28a745;
    box-shadow: 0 0 5px rgba(40, 167, 69, 0.5); 
}

.btn {
    border-radius: 8px;
    transition: background-color 0.3s ease; 
}

.btn:hover {
    background-color: #218838;
}

</style>
</head>
<body>
    <div class="container m-3 p-0">