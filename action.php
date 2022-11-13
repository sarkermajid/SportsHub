<?php
session_start();
require_once 'vendor/autoload.php';
use App\classes\Admin;
use App\classes\AdminNews;
use App\classes\AdminCategory;
use App\classes\Message;
use App\classes\Auth;

$category = new AdminCategory();
$categories = $category->getAllCategory();

$message = '';
$confirmMessage = '';

if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        $adminNews = new AdminNews();
        $allNews = $adminNews->getAllNews();
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'news-datail')
    {
        $id = $_GET['id'];
        $adminNews = new AdminNews();
        $detailNews = $adminNews->getNewsById($id);
        include 'pages/news-detail.php';
    }
    elseif($_GET['page'] == 'about')
    {
        include 'pages/about-us.php';
    }
    elseif($_GET['page'] == 'contact')
    {
        include 'pages/contact-us.php';
    }
    elseif($_GET['page'] == 'admin')
    {
        $admin = new Admin();
        $admins = $admin->getAdmin();
        include 'pages/admin/admin.php';
    }
    elseif($_GET['page'] == 'add-admin')
    {
        include 'pages/admin/add-admin.php';
    }
    elseif ($_GET['page'] == 'login')
    {
        include 'pages/admin/login.php';
    }
    elseif($_GET['page'] == 'update-profile')
    {
        $id = $_GET['id'];
        $admin = new Admin();
        $singleAdmin = $admin->getAdminById($id);
        include "pages/admin/update-profile.php";
    }
    elseif($_GET['page'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
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

    elseif($_GET['page'] == 'message')
    {
        $message = new Message();
        $singleMessage = $message->getAllMessage();
        include 'pages/admin/messages.php';
    }
    elseif($_GET['page'] == 'delete-message')
    {
        $id = $_GET['id'];
        $message = new Message();
        $message->deleteMessage($id);
    }
}
// Admin

elseif (isset($_POST['add-admin-btn']))
{
    $admin = new Admin($_POST);
    $message = $admin->addAdmin();
    include 'pages/admin/add-admin.php';
}
elseif (isset($_POST['login-btn']))
{
    $auth = new Auth($_POST);
    $message = $auth->login();
    include "pages/admin/login.php";
}
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

// User message

elseif(isset($_POST['message-btn']))
{
    $message = new Message($_POST);
    $confirmMessage = $message->sendMessage();
    include 'pages/contact-us.php';
}