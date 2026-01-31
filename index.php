<?php
session_start();

require_once 'app/Models/BaseModel.php';
require_once 'app/Models/Product.php';
require_once 'app/Controllers/ProductController.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'product-list';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($page) {
    case 'product-list':
        $controller = new ProductController();
        $controller->index();
        break;

    case 'product-detail':
        if ($id) {
            $controller = new ProductController();
            $controller->show($id);
        } else {
            header("Location: index.php?page=product-list");
        }
        break;

    case 'product-add':
        $controller = new ProductController();
        $controller->create();
        break;

    case 'product-store':
        $controller = new ProductController();
        $controller->store();
        break;

    case 'product-edit':
        if ($id) {
            $controller = new ProductController();
            $controller->edit($id);
        } else {
            header("Location: index.php?page=product-list");
        }
        break;

    case 'product-update':
        if ($id) {
            $controller = new ProductController();
            $controller->update($id);
        } else {
            header("Location: index.php?page=product-list");
        }
        break;

    case 'product-delete':
        if ($id) {
            $controller = new ProductController();
            $controller->destroy($id);
        } else {
            header("Location: index.php?page=product-list");
        }
        break;

    case 'product-search':
        $controller = new ProductController();
        $controller->search();
        break;

    default:
        header("Location: index.php?page=product-list");
        break;
}
?>