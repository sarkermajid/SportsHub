<?php

require_once 'vendor/autoload.php';
use App\classes\Admin;
use App\classes\AdminNews;
use App\classes\AdminCategory;

$message = '';

if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif($_GET['page'] == 'admin')
    {
        $admin = new Admin();
        $admins = $admin->getAdmin();
        include 'pages/admin/admin.php';
    }
    elseif($_GET['page'] == 'update-profile')
    {
        $id = $_GET['id'];
        $admin = new Admin();
        $singleAdmin = $admin->getAdminById($id);
        include "pages/admin/update-profile.php";
    }
    elseif ($_GET['page'] == 'add-category')
    {
        include 'pages/admin/add-category.php';
    }
    elseif($_GET['page'] == 'add-news')
    {
        include "pages/admin/add-news.php";
    }
    elseif($_GET['page'] == 'manage-news')
    {
        $adminNews = new AdminNews();
        $allNews = $adminNews->getAllNews();
        include "pages/admin/manage-news.php";
    }
    elseif ($_GET['page'] == 'edit-news')
    {
        $id = $_GET['id'];
        $adminNews = new AdminNews();
        $singleNews = $adminNews->getNewsById($id);
        include 'pages/admin/edit-news.php';
    }
    elseif($_GET['page'] == 'delete-news')
    {
        $id = $_GET['id'];
        $adminNews = new AdminNews();
        $adminNews->deleteNews($id);
    }
    elseif($_GET['page'] == 'manage-category')
    {
        $category = new AdminCategory();
        $categories = $category->getAllCategory();
        include "pages/admin/manage-category.php";
    }
    elseif($_GET['page'] == 'edit-category')
    {
        $id = $_GET['id'];
        $category = new AdminCategory();
        $singleCategory = $category->getCategoryById($id);
        include 'pages/admin/edit-category.php';
    }
    elseif($_GET['page'] == 'delete-category')
    {
        $id = $_GET['id'];
        $category = new AdminCategory();
        $category->deleteCategory($id);
    }
}
// Admin

elseif(isset($_POST['update-admin']))
{
    $admin = new Admin($_POST);
    $admin->updateAdmin();
}


// News
elseif(isset($_POST['news-btn']))
{
    $adminNews = new AdminNews($_POST, $_FILES);
    $message = $adminNews->addNews();
    include 'pages/admin/add-news.php';
}
elseif(isset($_POST['news-update-btn']))
{
    $adminNews = new AdminNews($_POST, $_FILES);
    $adminNews->updateNews();
}

// Category
elseif(isset($_POST['category_btn']))
{
    $category = new AdminCategory($_POST);
    $message = $category->createCategory();
    include 'pages/admin/add-category.php';
}
elseif(isset($_POST['update_category_btn']))
{
    $category = new AdminCategory($_POST);
    $category->updateCategory();
}
